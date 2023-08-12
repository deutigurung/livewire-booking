<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Add Country
        </h2>

    </x-slot> 
    <div class="py-12">
        <div class="max-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form wire:submit.prevent="submit">
                        <div>
                            <x-input-label class="mb-1" for="country.name"  value="Country Name" />
                            <x-input type="text" class="mt-1" name="country.name" wire:model="country.name"/>
                            @error('country.name') 
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
