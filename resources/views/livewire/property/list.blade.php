<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Property') }}
        </h2>

        <a href="{{ route('properties.create')}}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase bg-gray-800 rounded-md border border-transparent hover:bg-gray-700">Add New</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-auto min-w-full border divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left bg-gray-50">
                            </th>
                            <th class="bg-gray-50">Owner</th>
                            <th class="bg-gray-50">Name</th>
                            <th class="bg-gray-50">Address</th>
                            <th class="bg-gray-50">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                        @foreach($properties as $property)
                        <tr>
                            <td></td>
                            <td>{{ $property->user->name }}</td>
                            <td>{{ $property->name }}</td>
                            <td>{{ $property->address }}</td>
                            <td>
                                <a href="{{ route('properties.edit',$property->id)}}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase bg-green-800 rounded-md border border-transparent hover:bg-green-700">Edit</a>
                                <button wire:click="deleteConfirm('destroy',{{$property->id}})" class="px-4 py-2 text-xs text-red-500 uppercase bg-red-200 rounded-md border border-transparent hover:text-red-700 hover:bg-red-300">
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