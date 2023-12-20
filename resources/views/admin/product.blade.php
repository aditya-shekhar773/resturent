@extends('admin.layout.base')
@section('content')
    <div class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto">
            <div class="flex justify-between items-center">

                <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Product
                </h2>

                <h2 class="bg-green-700 px-2 py-2 rounded-lg">
                    <a href="{{route("admin.product.insert")}}" class="font-semibold text-white dark:text-gray-200">Product Insert</a>
                </h2>
            </div>

            <div class="px-4 py-3 flex mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div class="w-full overflow-hidden rounded-lg shadow-xs p-5">
                    <div class="w-full overflow-x-auto ">
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                                <tr
                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-4 py-3 w-42">ID</th>
                                    <th class="px-4 py-3 w-42">Product Name</th>
                                    <th class="px-4 py-3 w-42">Image</th>
                                    <th class="px-4 py-3 w-42">Price</th>
                                    <th class="px-4 py-3 w-42">Discount Price</th>
                                    <th class="px-4 py-3 w-42">Category Name</th>
                                    <th class="px-4 py-3 w-42">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                @foreach ($products as $product)
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3 text-sm">
                                        {{$product->id}}
                                    </td>
                                    <td class="px-4 py-3 text-xs">
                                        {{$product->product_name}}
                                    </td>
                                    <td class="px-4 py-3 text-xs">
                                        <img src="{{asset("storage/".$product->image)}}" class="rounded-full w-32"/>
                                    </td>
                                    <td class="px-4 py-3 text-xs text-center">
                                        {{$product->price}}
                                    </td>
                                    <td class="px-4 py-3 text-xs text-center">
                                        {{$product->discount_price}}
                                    </td>
                                    <td class="px-4 py-3 text-xs">
                                        {{$product->category->category_name}}
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
                                                <form method="post" action="{{ route('admin.product.delete') }}">
                                                    @csrf
                                                    @method("delete")
                                                    <input type="hidden" name="id" value="{{ $product->id }}">
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
               
                
            </div>
        </div>
    </div>
@endsection
