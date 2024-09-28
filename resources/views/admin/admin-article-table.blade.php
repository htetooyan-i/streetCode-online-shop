@extends('master')
@section('content')
@include('admin/admin-nav')

<main class="mb-24">
    <div class="mx-2">
        @include('admin/aside')
        <div class="relative shadow-md sm:rounded-lg overflow-x-auto mb-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Creater_ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Content
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
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
                    @foreach ($articles as $article)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $article->id }}
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $article->creator_id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $article->title }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $article->content }}
                            </td>
                            <td class="px-6 py-4">
                                <img src="{{ asset('storage/articleImages/' . $article->image) }}" alt="{{ $article->image }}">
                            </td>
                            <td class="px-6 py-4 text-wrap" style="width:200px">
                                {{ $article->category }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $article->created_at }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $article->updated_at }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{url('admin/article/'.$article->id.'/delete')}}" class="font-medium text-red-600 dark:text-blue-500 hover:underline">DELETE</a>
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