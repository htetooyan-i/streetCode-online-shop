@extends('master')
@section('content')
<nav class="w-full border-b border-gray-400 flex justify-center bg-white">
    <a href="{{url('/')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('profile-image/logo.png') }}" class="my-5 h-14 rounded-full" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Street Code</span>
    </a>
</nav>
<main class="max-w-screen-md mx-auto mb-10">
    <h3 class="my-5">About Us</h3>
    <p>Welcome to <strong>Street Code</strong>, where streetwear culture meets cutting-edge fashion. We’re more than just a trading platform; we’re a community of trendsetters, collectors, and enthusiasts who live and breathe streetwear. Whether you’re hunting for the latest drops, rare finds, or vintage classics, our marketplace is designed to connect you with the gear that defines your style.</p>
        
    <h3 class="my-5">Our Mission</h3>
    <p>At <strong>Street Code</strong>, our mission is to make streetwear accessible to everyone, from seasoned collectors to newcomers. We strive to create a seamless and secure trading experience, where authenticity and quality are always guaranteed. Our platform is built by streetwear lovers, for streetwear lovers, ensuring that every piece you find here is not just a product but a statement.</p>
        
    <h3 class="my-5">What We Offer</h3>
    <ul>
            <li><strong>Curated Collections:</strong> Discover a wide range of streetwear brands, from iconic names to emerging labels. Each item is carefully selected to reflect the latest trends and timeless styles.</li>
            <li><strong>Authenticity Guaranteed:</strong> We take authenticity seriously. Every item sold on our platform undergoes rigorous checks to ensure it meets our high standards. No fakes, no compromises.</li>
            <li><strong>Secure Transactions:</strong> Your safety is our priority. We use state-of-the-art encryption and secure payment gateways to protect your information and ensure a smooth transaction process.</li>
            <li><strong>Community Driven:</strong> Join a growing community of streetwear enthusiasts. Share your collections, connect with like-minded individuals, and stay updated on the latest trends.</li>
    </ul>
        
    <h3 class="my-5">Our Commitment</h3>
    <p>We believe in transparency, trust, and passion. Our team is dedicated to providing the best customer service, whether you’re buying, selling, or simply exploring. We’re here to support you at every step of your streetwear journey.</p>
        
    <p>Thank you for choosing <strong>Street Code</strong> as your go-to destination for all things streetwear. Let’s elevate your style together.</p>
</main>
@include('footer')
@endsection