<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Booking') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Apartment name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        User
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Price
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Date
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Payment Status
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Payment Method
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Action</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-900">
                            @foreach($bookings as $booking)
                                <tr>
                                    <th scope="row" class="px-6 py-4">
                                        {{ $booking->apartment->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $booking->user->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        ${{ $booking->total_price }}
                                    </td>
                                    <td class="px-6 py-4">
                                        From <strong>{{ $booking->start_date->toFormattedDateString() }}</strong> To <strong>{{ $booking->end_date->toFormattedDateString() }}</strong>
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $booking->payment_status }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $booking->payment_method }}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        /
                                        <button class="text-red-600 dark:text-red-500 hover:underline">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $bookings->links()}}
        </div>
    </div>
</div>
