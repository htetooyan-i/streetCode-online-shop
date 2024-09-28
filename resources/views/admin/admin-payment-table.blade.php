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
                            User Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            First Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Last Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Address
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Country
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Postal Code
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Card Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Expire Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            CVV
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
                    @foreach ($payments as $payment )
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <td class="px-6 py-4">
                                    {{$payment -> id}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$payment -> user_id}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$payment -> first_name}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$payment -> last_name}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$payment -> address}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$payment -> country}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$payment -> phone_no}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$payment -> postal}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$payment -> card_no}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$payment -> expire}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$payment -> cvv}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$payment -> created_at}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$payment -> updated_at}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{url('admin/payment/'.$payment->id.'/delete')}}" class="font-medium text-red-600 dark:text-blue-500 hover:underline">DELETE</a>
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