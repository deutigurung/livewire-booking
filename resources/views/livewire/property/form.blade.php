<div>
    <div class="py-12">
        <div class="max-auto max-w-7xl sm:px-6 lg:px-8 justify-between">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="isolate bg-white px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl text-center">
                            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $isEdit ? 'Edit' : 'Add' }} Property</h2>
                        </div>
                        <form wire:submit.prevent="submit" class="mx-auto mt-16 max-w-2xl sm:mt-20">
                            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                <div>
                                    <label for="property.city_id" class="block text-sm font-semibold leading-6 text-gray-900">City Name</label>
                                    <div class="mt-2.5">
                                        <select name="property.city_id" wire:model="property.city_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option selected value="">---Select City ---</option>
                                            @foreach($arrayData['cities'] as $city)
                                                <option value="{{ $city['id']}}">{{ $city['name'] }}</option>
                                            @endforeach
                                         </select>
                                        @error('property.city_id') 
                                            <span class="error text-red-500">{{ $message }}</span> 
                                        @enderror                                    
                                    </div>
                                </div>
                                <div>
                                    <label for="property.name" class="block text-sm font-semibold leading-6 text-gray-900">Property</label>
                                    <div class="mt-2.5">
                                    <input type="text" name="property.name" wire:model="property.name" autocomplete="property" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                    @error('property.name') 
                                        <span class="error text-red-500">{{ $message }}</span> 
                                    @enderror
                                </div>
                                <div>
                                    <label for="property.address_street" class="block text-sm font-semibold leading-6 text-gray-900">Street</label>
                                    <div class="mt-2.5">
                                    <input type="text" name="property.address_street" wire:model="property.address_street" autocomplete="adult-capacity" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                    @error('property.address_street') 
                                        <span class="error text-red-500">{{ $message }}</span> 
                                    @enderror
                                </div>
                                <div>
                                    <label for="property.address_postcode" class="block text-sm font-semibold leading-6 text-gray-900">PostCode</label>
                                    <div class="mt-2.5">
                                    <input type="text" name="property.address_postcode" wire:model="property.address_postcode" autocomplete="children-capacity" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                    @error('property.address_postcode') 
                                        <span class="error text-red-500">{{ $message }}</span> 
                                    @enderror
                                </div>
                                <div class="space-y-10">
                                    <fieldset>
                                      <legend class="text-sm font-semibold leading-6 text-gray-900">Facilities</legend>
                                      <div class="mt-6 space-y-6">
                                        @foreach($arrayData['facilities'] as $key => $facility)
                                            <div class="relative flex gap-x-3">
                                                <div class="flex h-6 items-center">
                                                    <input wire:model="facilities" value="{{$facility['id']}}"
                                                        type="checkbox" 
                                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                </div>
                                                <div class="text-sm leading-6">
                                                    <label for="facilities" class="font-medium text-gray-900">{{ $facility['name'] }}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                        @error('property.facilities') 
                                            <span class="error text-red-500">{{ $message }}</span> 
                                        @enderror
                                      </div>
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
