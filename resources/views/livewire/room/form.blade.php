<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ $isEdit ? 'Edit' : 'Add' }} Property
        </h2>

    </x-slot> 
    <div class="py-12">
        <div class="max-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form wire:submit.prevent="submit">
                        @csrf
                        <div>
                            <x-input-label class="mb-1" for="room.apartment_id"  value="Apartment Name" />
                             <select name="room.apartment_id" wire:model="room.apartment_id">
                                <option selected value="">---Select Apartment---</option>
                                @foreach($data['apartments'] as $apartment)
                                    <option value="{{ $apartment['id'] }}">{{ $apartment['name']}}</option>
                                @endforeach
                             </select>
                            @error('room.apartment_id') 
                                <span class="error text-red-500">{{ $message }}</span> 
                            @enderror
                        </div>

                        <div>
                            <x-input-label class="mb-1" for="room.room_type_id"  value="Room Type" />
                             <select name="room.room_type_id" wire:model="room.room_type_id">
                                <option selected value="">---Select Room Type---</option>
                                @foreach($data['types'] as $type)
                                    <option value="{{ $type['id'] }}">{{ $type['name']}}</option>
                                @endforeach
                             </select>
                            @error('room.room_type_id') 
                                <span class="error text-red-500">{{ $message }}</span> 
                            @enderror
                        </div>


                        <div>
                            <x-input-label class="mb-1" for="room.name"  value="Room Name" />
                            <x-input type="text" class="mt-1" name="room.name" wire:model="room.name"/>
                            @error('room.name') 
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
