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
                            Buyer Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Product Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Address
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Payment Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bid Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Size
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Response
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
                @foreach ($orders as $order )
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <td class="px-6 py-4">
                                    {{$order -> id}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$order -> buyer_id}}
                                </td>
                                <td class="px-6 py-4">
                                    
                                    @foreach ($order->product_id as $product)
                                        {{ $product['id'] }}
                                            ,
                                    @endforeach             
                                </td>
                                <td class="px-6 py-4">
                                    {{$order -> address}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$order -> phone_no}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$order -> email}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$order -> payment_id}}
                                </td>
                                <td class="px-6 py-4">
                                    ${{$order -> bid_price}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$order -> size}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$order -> response}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$order -> created_at}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$order -> updated_at}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{url('admin/order/'.$order->id.'/delete')}}" class="font-medium text-red-600 dark:text-blue-500 hover:underline">DELETE</a>
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