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
                            <x-input-label class="mb-1" for="property.city_id"  value="City Name" />
                             <select name="property.city_id" wire:model="property.city_id">
                                <option selected value="">---Select City---</option>
                                @foreach($arrayData['cities'] as $city)
                                    <option value="{{ $city['id'] }}">{{ $city['name']}}</option>
                                @endforeach
                             </select>
                            @error('property.city_id') 
                                <span class="error text-red-500">{{ $message }}</span> 
                            @enderror
                        </div>

                        <div>
                            <x-input-label class="mb-1" for="property.name"  value="Property Name" />
                            <x-input type="text" class="mt-1" name="property.name" wire:model="property.name"/>
                            @error('property.name') 
                                <span class="error text-red-500">{{ $message }}</span> 
                            @enderror
                        </div>
                        <div>
                            <x-input-label class="mb-1" for="property.address_street"  value="Street Address" />
                            <x-input type="text" class="mt-1" name="property.address_street" wire:model="property.address_street"/>
                            @error('property.address_street') 
                                <span class="error text-red-500">{{ $message }}</span> 
                            @enderror
                        </div>
                        <div>
                            <x-input-label class="mb-1" for="property.address_postcode"  value="Postal Code" />
                            <x-input type="text" class="mt-1" name="property.address_postcode" wire:model="property.address_postcode"/>
                            @error('property.address_postcode') 
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
