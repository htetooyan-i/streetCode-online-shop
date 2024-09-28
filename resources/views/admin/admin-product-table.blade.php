@extends('master')
@section('content')
@include('admin/admin-nav')
<main class="mb-24">
    <div class="mx-2">
        @include('admin/aside')
        <a href="{{url('admin/product/create')}}" class="bg-black text-white rounded-lg py-3 px-5 shadow-md">Create new Product</a>
        <div class="relative shadow-md sm:rounded-lg overflow-x-auto my-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Serie
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Brand
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Retail Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Product Detail
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color Way
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Keywords
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ranking
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Stock
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Sold Products
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Created At
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Updated At
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $product->id }}
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $product->Name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->serie }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->Category }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->Brand }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->Retail_Price }}
                            </td>
                            <td class="px-6 py-4">
                                @foreach ($product->Product_Detail as $key => $product_detail)
                                    <p>{{ $key }}: {{ $product_detail }}</p>
                                @endforeach
                            </td>
                            <td class="px-6 py-4">
                                @foreach ($product->avaliable_colorway as $key => $avaliable_colorway)
                                    <p>{{ $avaliable_colorway }}</p>
                                @endforeach
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->keywords }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->ranking }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->Stock }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->num_sold_product }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->created_at }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->updated_at }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{url('admin/product/'.$product->id.'/delete')}}" class="font-medium text-red-600 dark:text-blue-500 hover:underline">DELETE</a>
                                <a href="{{ url('admin/product/'.$product->id.'/edit') }}" class="font-medium text-indigo-600 dark:text-blue-500 hover:underline">EDIT</a>
                            </td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@include('admin/admin-footer')
@endsection