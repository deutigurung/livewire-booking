<div>
    <div class="py-12">
        <div class="max-auto max-w-7xl sm:px-6 lg:px-8 justify-between">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="isolate bg-white px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl text-center">
                            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $isUpdate ? 'Edit' : 'Add' }} Bed</h2>
                        </div>
                        <form wire:submit.prevent="submit" class="mx-auto mt-16 max-w-2xl sm:mt-20">
                            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                <div>
                                    <label for="bed.room_id" class="block text-sm font-semibold leading-6 text-gray-900">Room Name</label>
                                    <div class="mt-2.5">
                                        <select name="bed.room_id" wire:model="bed.room_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option selected value="">---Select Room---</option>
                                            @foreach($data['rooms'] as $room)
                                                <option value="{{ $room['id']}}">{{ $room['name'] }}</option>
                                            @endforeach
                                         </select>
                                        @error('bed.room_id') 
                                            <span class="error text-red-500">{{ $message }}</span> 
                                        @enderror                                    
                                    </div>
                                </div>
                                <div>
                                    <label for="bed.bed_type_id" class="block text-sm font-semibold leading-6 text-gray-900">Bed Type</label>
                                    <div class="mt-2.5">
                                        <select name="bed.bed_type_id" wire:model="bed.bed_type_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option selected value="">---Select Bed Type---</option>
                                            @foreach($data['types'] as $type)
                                                <option value="{{ $type['id']}}">{{ $type['name'] }}</option>
                                            @endforeach
                                         </select>
                                        @error('bed.bed_type_id') 
                                            <span class="error text-red-500">{{ $message }}</span> 
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="bed.name" class="block text-sm font-semibold leading-6 text-gray-900">Bed Name</label>
                                    <div class="mt-2.5">
                                    <input type="text" name="bed.name" wire:model="bed.name" autocomplete="bed" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                    @error('bed.name') 
                                        <span class="error text-red-500">{{ $message }}</span> 
                                    @enderror
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
