@extends('master')
@section('content')
@include('admin/admin-nav')

<main class="mb-24">
    <div class="mx-2">
        @include('admin/aside')
        <div class="relative shadow-md sm:rounded-lg overflow-x-auto mb-5">
            <table class="text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            First Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Last Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Profile Image
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Password
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Earning
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Created At
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Updated At
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Role
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($accs as $acc)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $acc->id }}
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $acc->firstname }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $acc->lastname }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $acc->email }}
                            </td>
                            <td class="px-6 py-4">
                                <img src="{{ asset('storage/AccImages/' . $acc->profile) }}" alt="{{ $acc->profile }}">
                            </td>
                            <td class="px-6 py-4 text-wrap" style="width:200px">
                                {{ $acc->password }}
                            </td>
                            <td class="px-6 py-4 text-wrap" style="width:200px">
                                {{ $acc->earning }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $acc->created_at }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $acc->updated_at }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $acc->role }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{url('admin/user/'.$acc->id.'/delete')}}" class="font-medium text-red-600 dark:text-blue-500 hover:underline">DELETE</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{url('admin/user/create')}}" class="bg-black text-white rounded-lg py-3 px-5 shadow-md">Create new Admin Account</a>
    </div>
</main>
@include('admin/admin-footer')
@endsection