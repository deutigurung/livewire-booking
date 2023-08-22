<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ $isUpdate ? 'Edit' : 'Add' }} Apartment
        </h2>

    </x-slot> 
    <div class="py-12">
        <div class="max-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form wire:submit.prevent="submit" method="POST">
                        @csrf
                        <div>
                            <x-input-label class="mb-1" for="apartment.property_id"  value="Property Name" />
                             <select name="apartment.property_id" wire:model="apartment.property_id">
                                <option selected value="">---Select Property---</option>
                                @foreach($data['properties'] as $property)
                                    <option value="{{ $property['id']}}">{{ $property['name'] }}</option>
                                @endforeach
                             </select>
                            @error('apartment.property_id') 
                                <span class="error text-red-500">{{ $message }}</span> 
                            @enderror
                        </div>

                        <div>
                            <x-input-label class="mb-1" for="apartment.apartment_type_id"  value="Apartment Type" />
                             <select name="apartment.apartment_type_id" wire:model="apartment.apartment_type_id">
                                <option selected value="">---Select Apartment Type---</option>
                                @foreach($data['types'] as $type)
                                    <option value="{{ $type['id']}}">{{ $type['name'] }}</option>
                                @endforeach
                             </select>
                            @error('apartment.apartment_type_id') 
                                <span class="error text-red-500">{{ $message }}</span> 
                            @enderror
                        </div>

                        <div>
                            <x-input-label class="mb-1" for="apartment.name"  value="Apartment Name" />
                            <x-input type="text" class="mt-1" name="apartment.name" wire:model="apartment.name"/>
                            @error('apartment.name') 
                                <span class="error text-red-500">{{ $message }}</span> 
                            @enderror
                        </div>

                        <div>
                            <x-input-label class="mb-1" for="apartment.capacity_adults"  value="Adult Capacity" />
                            <x-input type="text" class="mt-1" name="apartment.capacity_adults" wire:model="apartment.capacity_adults"/>
                            @error('apartment.capacity_adults') 
                                <span class="error text-red-500">{{ $message }}</span> 
                            @enderror
                        </div>

                        <div>
                            <x-input-label class="mb-1" for="apartment.capacity_children"  value="Child Capacity" />
                            <x-input type="text" class="mt-1" name="apartment.capacity_children" wire:model="apartment.capacity_children"/>
                            @error('apartment.capacity_children') 
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
