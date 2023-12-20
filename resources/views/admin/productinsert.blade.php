@extends('admin.layout.base')
@section('content')
    <div class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto">
            <div class="flex justify-between items-center">

                <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Product Insert
                </h2>

                <h2 class="my-6 bg-green-700 px-2 py-2 rounded-lg ">
                    <a href="{{ route('admin.product') }}"
                        class="font-semibold text-white dark:text-gray-200 text-sm">Back</a>
                </h2>
            </div>

            <div class="px-4 py-3 flex mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div class="w-full lg:w-4/5 mx-auto overflow-hidden rounded-lg shadow-xs lg:p-10 p-5 bg-slate-300">
                    <form method="post" action="{{route('admin.product.create')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="space-y-12">
                            <div class=" pb-12">
                                <div class="grid grid-cols-1 gap-x-6 gap-y-5 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <label for="first-name"
                                            class="block text-sm font-medium leading-6 text-gray-900">Product Name</label>
                                        <div class="mt-2">
                                            <input type="text" name="product_name" value="{{old('product_name')}}" 
                                                autocomplete="given-name"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="country"
                                            class="block text-sm font-medium leading-6 text-gray-900">Category Name</label>
                                        <div class="mt-2">
                                            <select name="category_id"  class="block lg:w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                                @foreach ($cate as $item)
                                                    <option value="{{$item->id}}">{{$item->category_name}}</option>
                                                @endforeach 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="first-name"
                                            class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                                        <div class="mt-2">
                                            <input type="text" name="price" value="{{old('price')}}"
                                                autocomplete="given-name"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="first-name"
                                            class="block text-sm font-medium leading-6 text-gray-900">Discount Price</label>
                                        <div class="mt-2">
                                            <input type="text" name="discount_price" value="{{old('discount_price')}}"
                                                autocomplete="given-name"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div class="w-full sm:col-span-3">
                                        <label for="first-name"
                                            class="block text-sm font-medium leading-6 text-gray-900">Image</label>
                                        <div class="mt-2">
                                            <input type="file" name="image" value="{{old('image')}}" 
                                                autocomplete="given-name"
                                                class="block w-full rounded-md border bg-slate-400 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-6">
                                        <label for="first-name"
                                            class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                        <div class="mt-2">
                                            <textarea type="file" name="description" value="{{old('description')}}" 
                                                autocomplete="given-name"
                                                class="block w-full rounded-md border bg-slate-400 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                        </div>
                                    </div>

                                    <div class="sm:col-span-6">
                                        <input type="submit" value="Submit"
                                            class="w-full rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
