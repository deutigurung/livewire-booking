<?php

namespace App\Http\Livewire\Blog;

use App\Models\Blog;
use App\Models\BlogCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class BlogForm extends Component
{
    public Blog $blog;
    public bool $isUpdate = false;
    public array $categories = [];
    public int $userId;

    public function mount(Blog $blog)
    {
        $this->blog = $blog;
        $this->userId = auth()->id();
        $this->categories = BlogCategory::get()->toArray();
        if($this->blog->exists){
            $this->isUpdate = true;
        }
    }

    protected $rules = [
        'blog.title' => 'required|string',
        'blog.slug' => 'required|string',
        'blog.description' => 'required|string',
        'blog.summary' => 'required|string',
        'blog.blog_category_id' => 'required|exists:blog_categories,id',
        'blog.status' => 'required|boolean',
        'blog.user_id' => 'required|exists:users,id',
    ];
    public function render()
    {
        return view('livewire.blog.blog-form');
    }

    //livewire lifecycle hooks for blog slug generation
    public function updatedBlogTitle(){
        $this->blog->slug = Str::slug($this->blog->title);
        $this->blog->user_id = auth()->id();
    }
    public function submit()
    {
        $this->validate();
        $this->blog->save();
        return redirect()->route('blogs.index');
    }
}
