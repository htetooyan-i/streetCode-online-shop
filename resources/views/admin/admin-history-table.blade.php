@extends('master')
@section('content')
@include('admin/admin-nav')
<main class="mb-24">
    <div class="mx-2">
        @include('admin/aside')
        <div class="relative shadow-md sm:rounded-lg overflow-x-auto my-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Buyer ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Seller ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Product ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Product Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Product Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Product size
                        </th>
                        <th scope="col" class="px-6 py-3">
                            price
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
                    @foreach ($productHistories as $productHistory)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $productHistory->id }}
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $productHistory->buyer_id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $productHistory->seller_id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $productHistory->product_id }}
                            </td>
                            <td class="px-6 py-4 text-wrap" style="width:200px">
                                {{ $productHistory->product_name }}
                            </td>
                            <td class="px-6 py-4 text-wrap" style="width:200px">
                                {{ $productHistory->product_color }}
                            </td>
                            <td class="px-6 py-4 text-wrap" style="width:200px">
                                {{ $productHistory->product_size }}
                            </td>
                            <td class="px-6 py-4 text-wrap" style="width:200px">
                                {{ $productHistory->price }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $productHistory->created_at }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $productHistory->updated_at }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{url('admin/history/'.$productHistory->id.'/delete')}}" class="font-medium text-red-600 dark:text-blue-500 hover:underline">DELETE</a>
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