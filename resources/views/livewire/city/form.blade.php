<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ $edit ? 'Edit' : 'Add' }} City
        </h2>

    </x-slot> 
    <div class="py-12">
        <div class="max-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form wire:submit.prevent="submit">
                        @csrf
                        <div>
                            <x-input-label class="mb-1" for="city.country_id"  value="Country Name" />
                             <select name="city.country_id" wire:model="city.country_id">
                                <option selected value="">---Select Country---</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country['id'] }}">{{ $country['name'] }}</option>
                                @endforeach
                             </select>
                            @error('city.country_id') 
                                <span class="error text-red-500">{{ $message }}</span> 
                            @enderror
                        </div>

                        <div>
                            <x-input-label class="mb-1" for="city.name"  value="City Name" />
                            <x-input type="text" class="mt-1" name="city.name" wire:model="city.name"/>
                            @error('city.name') 
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
