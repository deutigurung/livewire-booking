<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Blog') }}
            </h2>
            <a href="{{ route('blogs.create')}}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase bg-indigo-800 rounded-md border border-transparent hover:bg-indigo-700">Add New</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Category name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Title
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Summary
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Status
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Author
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Action</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-900">
                            @foreach($blogs as $blog)
                                <tr>
                                    <th scope="row" class="px-6 py-4">
                                        {{ $blog->blog_category->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $blog->title }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ substr($blog->summary,0,50) }}...
                                    </td>
                                    <td class="px-6 py-4">
                                        @php 
                                            $class = 'gray';
                                            if($blog->status == 1) {
                                                $class = 'indigo';
                                            }
                                        @endphp
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox" wire:click="updateStatus({{$blog->id}})" @if($blog->status) checked @endif class="sr-only peer">
                                            <div class="w-11 h-6 bg-{{$class}}-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-{{$class}}-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-{{$class}}-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-{{$class}}-600 peer-checked:bg-blue-600"></div>
                                            <span class="ml-3 text-sm font-medium text-{{$class}}-900 dark:text-{{$class}}-300">{{ $blog->status ? 'Active' : 'InActive' }}</span>
                                        </label>
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $blog->user->name }}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="{{ route('blogs.edit',$blog->id)}}" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        /
                                        <button wire:click="deleteConfirm('destroy',{{$blog->id}})" class="text-red-600 dark:text-red-500 hover:underline">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
