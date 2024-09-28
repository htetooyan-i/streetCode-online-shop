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
                            Seller Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Product Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Size
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ranking
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
                    @foreach ($resellProducts as $resellProduct)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{ $resellProduct->id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $resellProduct->Seller_id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $resellProduct->product_id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $resellProduct->Name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $resellProduct->Color }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $resellProduct->Size }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $resellProduct->ranking }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $resellProduct->created_at }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $resellProduct->updated_at }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{url('admin/resell-product/'. $resellProduct->id .'/delete')}}" class="font-medium text-red-600 dark:text-blue-500 hover:underline">DELETE</a>
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