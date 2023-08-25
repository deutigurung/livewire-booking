<div>
    <div class="py-12">
        <div class="max-auto max-w-7xl sm:px-6 lg:px-8 justify-between">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="isolate bg-white px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl text-center">
                            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $isUpdate ? 'Edit' : 'Add' }} Blog</h2>
                        </div>
                        <form wire:submit.prevent="submit" class="mx-auto mt-16 max-w-2xl sm:mt-20">
                            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                <div class="col-span-full">
                                    <label for="blog.blog_category_id" class="block text-sm font-semibold leading-6 text-gray-900">Category Name</label>
                                    <div class="mt-2.5">
                                        <select name="blog.blog_category_id" wire:model="blog.blog_category_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option selected value="">---Select Category---</option>
                                            @foreach($categories as $cate)
                                                <option value="{{ $cate['id']}}">{{ $cate['name'] }}</option>
                                            @endforeach
                                         </select>
                                        @error('blog.blog_category_id') 
                                            <span class="error text-red-500">{{ $message }}</span> 
                                        @enderror                                    
                                    </div>
                                </div>
                                <div>
                                    <label for="blog.title" class="block text-sm font-semibold leading-6 text-gray-900">Title</label>
                                    <div class="mt-2.5">
                                    <input type="text" name="blog.title" wire:model.lazy="blog.title" autocomplete="title" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                    @error('blog.title') 
                                        <span class="error text-red-500">{{ $message }}</span> 
                                    @enderror
                                </div>
                                <div>
                                    <label for="blog.slug" class="block text-sm font-semibold leading-6 text-gray-900">Slug</label>
                                    <div class="mt-2.5">
                                    <input type="text" name="blog.slug" wire:model.lazy="blog.slug" autocomplete="slug" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                    @error('blog.slug') 
                                        <span class="error text-red-500">{{ $message }}</span> 
                                    @enderror
                                </div>
                                <div class="col-span-full">
                                    <label for="blog.summary" class="block text-sm font-medium leading-6 text-gray-900">Summary</label>
                                    <div class="mt-2">
                                        <textarea wire:model.defer="blog.summary" name="blog.summary" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                    </div>
                                    <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about blog.</p>
                                    @error('blog.summary') 
                                        <span class="error text-red-500">{{ $message }}</span> 
                                    @enderror
                                </div>
                                <div class="col-span-full">
                                    <label for="blog.description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                    <div class="mt-2">
                                        <textarea wire:model.defer="blog.description" name="blog.description" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                    </div>
                                    <p class="mt-3 text-sm leading-6 text-gray-600">Write a details about blog.</p>
                                    @error('blog.description') 
                                        <span class="error text-red-500">{{ $message }}</span> 
                                    @enderror
                                </div>
                                <div class="space-y-10">
                                    <fieldset>
                                        <legend class="text-sm font-semibold leading-6 text-gray-900">Status</legend>
                                        <div class="mt-6 space-y-6">
                                          <div class="flex items-center gap-x-3">
                                            <input id="active-blog" wire:model="blog.status" value="1" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            <label for="active-blog" class="block text-sm font-medium leading-6 text-gray-900">Active</label>
                                          </div>
                                          <div class="flex items-center gap-x-3">
                                            <input id="inactive-blog" wire:model="blog.status" value="0" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            <label for="inactive-blog" class="block text-sm font-medium leading-6 text-gray-900">Inactive</label>
                                          </div>
                                        </div>
                                        @error('blog.status') 
                                            <span class="error text-red-500">{{ $message }}</span> 
                                        @enderror
                                    </fieldset>
                                </div>
                            </div>
                            <div class="mt-10">
                            <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
