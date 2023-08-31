<?php

namespace App\Http\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class BlogList extends Component
{
    use WithPagination;
    protected $listeners = ['destroy'];
    
    public function render()
    {
        $blogs = Blog::paginate(25);
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
