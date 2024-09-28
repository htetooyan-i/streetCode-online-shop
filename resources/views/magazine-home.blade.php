@extends('master')
@section('content')
@include('magazine-nav')
<div class="max-w-screen-xl ms-auto mb-10">
    <div class="me-auto md:ms-auto h-[600px] flex flex-col md:flex-row justify-start items-center md:ps-5">
        <div class="title w-full mb-5 ps-5 md:ps-0">
            <span class="uppercase"> Collection - 12/12/2024</span>
            <h1 class=" mt-3 mb-10 title-container text-start w-3/4 text-[30px] lg:text-[40px] xl:text-[50px]" style="font-family:'Times New Roman', Times, serif">Jordan 4s Every Collector Needs</h1>
            <a href="{{url('news/1')}}" class="px-5 py-3 bg-black text-white">
            ReadNow ++++
            </a>
        </div>
        <div class="poster w-full h-[600px] overflow-hidden">
            <img src="{{asset('profile-image/jordan-4.webp')}}" alt="" class="object-contain">
        </div>
    </div>
</div>
<div class="max-w-screen-xl ms-auto mb-10">
    <div class="me-auto md:ms-auto h-[600px] flex flex-col md:flex-row justify-start items-center md:ps-5">
        <div class="title w-full mx-5 ps-5 md:ps-0 order-2">
            <span class="uppercase"> Collection - 12/12/2024</span>
            <h1 class=" mt-3 mb-10 title-container text-start w-3/4 text-[30px] lg:text-[40px] xl:text-[50px]" style="font-family:'Times New Roman', Times, serif">Jordan 4s Every Collector Needs</h1>
            <a href="{{url('news/1')}}" class="px-5 py-3 bg-black text-white">
            ReadNow ++++
            </a>
        </div>
        <div class="poster w-full h-[600px] overflow-hidden order-1">
            <img src="{{asset('profile-image/jordan-4.webp')}}" alt="" class="object-contain">
        </div>
    </div>
</div>
@include('footer')
@endsection