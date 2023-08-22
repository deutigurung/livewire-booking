<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Bed') }}
            </h2>
            <a href="{{ route('beds.create')}}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase bg-indigo-800 rounded-md border border-transparent hover:bg-indigo-700">Add New</a>
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
                                    Room name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Bed Type
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Name
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Action</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-900">
                            @foreach($beds as $bed)
                                <tr>
                                    <th scope="row" class="px-6 py-4">
                                        {{ $bed->room->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $bed->bed_type->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $bed->name }}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="{{ route('beds.edit',$bed->id)}}" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        /
                                        <button wire:click="deleteConfirm('destroy',{{$bed->id}})" class="text-red-600 dark:text-red-500 hover:underline">
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
</div>
