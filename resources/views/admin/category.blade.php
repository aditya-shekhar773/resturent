@extends('admin.layout.base')
@section('content')
    <div class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Category ({{count($categories)}})
            </h2>

            <div class="px-4 py-3 flex mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div class="w-full overflow-hidden rounded-lg shadow-xs p-10">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                                <tr
                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-4 py-3 w-42">ID</th>
                                    <th class="px-4 py-3 w-42">Category Name</th>
                                    <th class="px-4 py-3 w-42">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                @foreach ($categories as $item)

                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3 text-sm">
                                        {{$item->id}}
                                    </td>
                                    <td class="px-4 py-3 text-xs">
                                       {{$item->category_name}}
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center space-x-4 text-sm">
                                            <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Edit">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <div>
                                                <form method="post" action="{{ route('admin.category.delete') }}">
                                                    @csrf
                                                    @method("delete")
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <input type="submit" value="X" class="px-3 py-2 bg-red-700 rounded-lg text-white"/>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
               
                <div class="">
                    <h2 class="my-6 text-2xl  ml-4 font-semibold text-gray-700 dark:text-gray-200">
                        Category Insert
                    </h2>
                    <form method="post" action="{{route('admin.category.create')}}" class="p-5 ml-4">
                        @csrf
                        <label class="text-lg font-serif font-bold ">Name</label>
                        <input type="text" name="category_name" value="{{ old('category_name') }}" class="border rounded-lg py-2 px-2" />
                        @error('category_name')
                            <p class="text-red-500 text-sm">{{$message}}</p>
                        @enderror
                        <input type="submit" value="Submit" class="px-2 py-2 bg-green-700 mt-1 w-full rounded-lg text-black text-sm font-serif"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
