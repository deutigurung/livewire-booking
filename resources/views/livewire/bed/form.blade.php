<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ $isUpdate ? 'Edit' : 'Add' }} Bed
        </h2>

    </x-slot> 
    <div class="py-12">
        <div class="max-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form wire:submit.prevent="submit">
                        @csrf
                        <div>
                            <x-input-label class="mb-1" for="bed.room_id"  value="Room Name" />
                             <select name="bed.room_id" wire:model="bed.room_id">
                                <option selected value="">---Select Room---</option>
                                @foreach($data['rooms'] as $room)
                                    <option value="{{ $room['id'] }}">{{ $room['name'] }}</option>
                                @endforeach
                             </select>
                            @error('bed.room_id') 
                                <span class="error text-red-500">{{ $message }}</span> 
                            @enderror
                        </div>

                        <div>
                            <x-input-label class="mb-1" for="bed.bed_type_id"  value="Bed Type" />
                             <select name="bed.bed_type_id" wire:model="bed.bed_type_id">
                                <option selected value="">---Select Bed Type---</option>
                                @foreach($data['types'] as $type)
                                    <option value="{{ $type['id'] }}">{{ $type['name']}}</option>
                                @endforeach
                             </select>
                            @error('bed.bed_type_id') 
                                <span class="error text-red-500">{{ $message }}</span> 
                            @enderror
                        </div>


                        <div>
                            <x-input-label class="mb-1" for="bed.name"  value="Bed Name" />
                            <x-input type="text" class="mt-1" name="bed.name" wire:model="bed.name"/>
                            @error('bed.name') 
                                <span class="error text-red-500">{{ $message }}</span> 
                            @enderror
                        </div>
                        <div class="mt-4">
                            <x-button class="btn-blue-500" type="submit">Submit</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
