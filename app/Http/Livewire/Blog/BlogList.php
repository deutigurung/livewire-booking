<?php

namespace App\Http\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;

class BlogList extends Component
{
    protected $listeners = ['destroy'];
    
    public function render()
    {
        $blogs = Blog::get();
        return view('livewire.blog.blog-list',compact('blogs'));
    }

    public function deleteConfirm($method , $id = null){
        $this->dispatchBrowserEvent('swal:confirm',[
            'type' => 'warning',
            'title' => 'Are you sure want to delete?',
            'text' => '',
            'id' => $id,
            'method' => $method
        ]);
    }

    public function destroy($id){
        Blog::findOrFail($id)->delete();
        return redirect()->route('blogs.index');
    }

    public function updateStatus($id){
        $blog = Blog::findOrFail($id);
        $blog->update([
            'status' => !$blog->status
        ]);
        return redirect()->route('blogs.index');
    }
}
