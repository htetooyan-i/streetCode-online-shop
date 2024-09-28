@extends('master')
@section('content')
<!-- Navbar -->
<div class="bg-gray-100 h-screen">
    <nav class="w-full border-b border-gray-400 flex justify-center bg-white">
        <a href="{{url('/')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('profile-image/logo.png') }}" class="my-5 h-14 rounded-full" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Street Code</span>
        </a>
    </nav>
    <div class="py-5">
        <div class="rounded-lg border border-gray-400 bg-white mx-auto px-4 w-full md:w-[500px]">
            <div id="signUpLoginInToggle" class="flex flex-row flex-nowrap gap-2">
                <a href="{{url('userControl/signup')}}" class="block w-full">
                    <p @class([
                        'border-b-2', 
                        'py-5', 
                        'grow', 
                        'text-center', 
                        'font-bold', 
                        'border-black' => request()->is('userControl/signup'),
                        'border-gray-400' => request()->is('userControl/login')

                    ])>
                        Sign Up
                    </p>
                </a>
                <a href="{{url('userControl/login')}}" class="block w-full">
                    <p @class([
                        'border-b-2', 
                        'py-5', 
                        'grow', 
                        'text-center', 
                        'font-bold', 
                        'border-black' => request()->is('userControl/login'),
                        'border-gray-400' => request()->is('userControl/signup')

                    ])>
                        Log In
                    </p>
                </a> 
            </div>
            <div id="form" class="mt-5">               
                    <h3 class="title">
                        @if(request()->is('userControl/signup'))
                            Sign Up
                        @else
                            Log In
                        @endif
                    </h3>              
                    <form action="{{ url('userControl/' . (request()->is('userControl/signup') ? 'signup' : 'login')) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(request()->is('userControl/signup'))
                            <div id="first-name">
                                <input type="text" name="firstName" placeholder="First Name*" required class="w-full my-3 border-gray-400 focus:outline-none focus:ring-0 focus:border-black peer">
                            </div>
                            <div id="last-name">
                                <input type="text" name="lastName" placeholder="Last Name*" required class="w-full my-3 border-gray-400 focus:outline-none focus:ring-0 focus:border-black peer">
                            </div>
                        @endif
                        <div id="email">
                            <input type="email" name="email" placeholder="Email Address*" required class="w-full my-3 border-gray-400 focus:outline-none focus:ring-0 focus:border-black peer">
                            @if ($errors->has('email'))
                                <span class="text-red-500">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div id="password">
                            <input type="password" name="password" placeholder="Password*" required class="w-full my-3 border-gray-400 focus:outline-none focus:ring-0 focus:border-black peer">
                        </div>
                        @if(request()->is('userControl/signup'))
                            <div type="submit" id="change-to-login" class="text-center mb-3">
                                <button type="submit" class="bg-black text-white w-full py-2 my-3 text-bold border hover:border-black hover:bg-white hover:text-black">Sign Up</button>
                            </div>
                        @else
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li class="text-sm text-red-500">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <button type="submit" class="bg-black text-white w-full py-2 my-3 text-bold border hover:border-black hover:bg-white hover:text-black">Login</button>
                        @endif
                    </form>
                @if(request()->is('userControl/signup'))
                    <div id="change-to-login" class="text-center mb-3">
                        <span class="text-gray-600">Already have an account? <a href="{{url('userControl/login')}}" class="underline">Log In</a></span>
                    </div>
                @else
                    <div id="change-to-signUp" class="text-center mb-3">
                        <span class="text-gray-600">Need an account? <a href="{{url('userControl/signup')}}" class="underline">Sign Up</a></span>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection