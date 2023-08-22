<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Room') }}
        </h2>

        <a href="{{ route('rooms.create')}}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase bg-gray-800 rounded-md border border-transparent hover:bg-gray-700">Add New</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-auto min-w-full border divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left bg-gray-50">
                            </th>
                            <th class="bg-gray-50">Apartment</th>
                            <th class="bg-gray-50">Room Type</th>
                            <th class="bg-gray-50">Name</th>
                            <th class="bg-gray-50">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                        @foreach($rooms as $room)
                        <tr>
                            <td></td>
                            <td>{{ $room->apartment->name }}</td>
                            <td>{{ $room->room_type->name }}</td>
                            <td>{{ $room->name }}</td>
                            <td>
                                <a href="{{ route('rooms.edit',$room->id)}}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase bg-green-800 rounded-md border border-transparent hover:bg-green-700">Edit</a>
                                <button wire:click="deleteConfirm('destroy',{{$room->id}})" class="px-4 py-2 text-xs text-red-500 uppercase bg-red-200 rounded-md border border-transparent hover:text-red-700 hover:bg-red-300">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>