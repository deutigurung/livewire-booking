

    <div class="mt-20 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Start Date
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    End Date
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Action</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-900">
                        @foreach($apartment->apartment_prices as $price)
                            <tr>
                                <!-- Inline update form start -->
                                <td scope="row" class="@if($apartmentPriceId !== $price->id) hidden @endif px-6 py-4">
                                    <x-input type="number" wire:model="price" id="price" class="py-2 pr-4 pl-2 w-full text-sm rounded-lg border border-gray-400 sm:text-base focus:outline-none focus:border-blue-400" />
                                    @error('price')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </td>
                                <td scope="row" class="@if($apartmentPriceId !== $price->id) hidden @endif px-6 py-4">
                                    <x-input type="date" wire:model="start_date" id="start_date" class="py-2 pr-4 pl-2 w-full text-sm rounded-lg border border-gray-400 sm:text-base focus:outline-none focus:border-blue-400" />
                                    @error('start_date')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </td>
                                <td scope="row" class="@if($apartmentPriceId !== $price->id) hidden @endif px-6 py-4">
                                    <x-input type="date" wire:model="end_date" id="end_date" class="py-2 pr-4 pl-2 w-full text-sm rounded-lg border border-gray-400 sm:text-base focus:outline-none focus:border-blue-400" />
                                    @error('end_date')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </td>
                                <!-- form end -->

                                <td scope="row" class="@if($apartmentPriceId === $price->id) hidden @endif px-6 py-4">
                                    {{ $price->price}}
                                </td>
                                <td class="@if($apartmentPriceId === $price->id) hidden @endif px-6 py-4">
                                    {{ $price->start_date->toFormattedDateString() }}
                                </td>
                                <td class="@if($apartmentPriceId === $price->id) hidden @endif px-6 py-4">
                                    {{ $price->end_date->toFormattedDateString() }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    @if($apartmentPriceId === $price->id)
                                        <button wire:click="storePrice" class="btn bg-yellow-50 dark:text-yellow-500 hover:underline">
                                            Update
                                        </button>
                                        /
                                        <button wire:click="cancelApartmentPriceEdit" class="btn bg-red-50 dark:text-red-500 hover:underline">
                                            Cancel
                                        </button>
                                    @else
                                    <button wire:click="editApartmentPrice({{$price->id}})" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</button>
                                    /
                                    <button wire:click="deleteConfirm('destroy',{{$price->id}})" class="text-red-600 dark:text-red-500 hover:underline">
                                        Delete
                                    </button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

