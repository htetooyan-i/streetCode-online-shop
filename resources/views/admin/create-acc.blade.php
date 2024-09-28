@extends('master')
@section('content')
@include('admin/admin-nav')

<main class="">
    <div class="mx-2">
        @include('admin/aside')
    </div>
    <div class="max-w-lg mx-auto">
        <h3>Create new account</h3>
        <form action="{{url('admin/user/create')}}" method="post">
            @csrf
            <div id="first-name">
                <input type="text" name="firstName" placeholder="First Name*" required class="w-full my-3 border-gray-400 focus:outline-none focus:ring-0 focus:border-black peer">
            </div>
            <div id="last-name">
                <input type="text" name="lastName" placeholder="Last Name*" required class="w-full my-3 border-gray-400 focus:outline-none focus:ring-0 focus:border-black peer">
            </div>
            <div id="role">
                <input type="text" name="role" placeholder="Account Type*" required class="w-full my-3 border-gray-400 focus:outline-none focus:ring-0 focus:border-black peer">
            </div>
            <div id="email">
                <input type="email" name="email" placeholder="Email Address*" required class="w-full my-3 border-gray-400 focus:outline-none focus:ring-0 focus:border-black peer">
                @if ($errors->has('email'))
                    <span class="text-red-500">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div id="password">
                <input type="password" name="password" placeholder="Password*" required class="w-full my-3 border-gray-400 focus:outline-none focus:ring-0 focus:border-black peer">
            </div>
            <div type="submit" id="change-to-login" class="text-center mb-3">
                <button type="submit" class="bg-black text-white w-full py-2 my-3 text-bold border hover:border-black hover:bg-white hover:text-black">Sign Up</button>
            </div>
        </form> 
    </div>  
</main>
@endsection