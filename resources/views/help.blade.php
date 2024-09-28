@extends('master')
@section('content')
<nav class="w-full border-b border-gray-400 flex justify-center bg-white">
    <a href="{{url('/')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('profile-image/logo.png') }}" class="my-5 h-14 rounded-full" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Street Code <span class="font-normal text-[1rem]">Help Center</span></span>
    </a>
</nav>
<main class="max-w-screen-md mx-auto mb-10">
    <h3  class="my-5">Help Center</h3>
    <p>Welcome to the <strong>Street Code Help Center</strong>, your one-stop destination for all the support and information you need to make the most out of our platform. Whether you have questions about buying, selling, or simply navigating the site, we're here to assist you every step of the way.</p>
        
    <h3  class="my-5">Frequently Asked Questions (FAQs)</h3>
    <p>Have a question? Start here! Our <a href="#">FAQ section</a> covers a wide range of topics, including:</p>
    <ul>
            <li>How to create an account</li>
            <li>How to buy or sell items</li>
            <li>Payment methods and security</li>
            <li>Shipping and delivery</li>
            <li>Returns and refunds</li>
            <li>Account and privacy settings</li>
    </ul>
    <p>If you can't find the answer you're looking for, don't worry—we're just a click away.</p>
        
    <h3  class="my-5">Contact Us</h3>
    <p>If you need further assistance, our customer support team is here to help. You can reach us through the following channels:</p>
    <ul>
            <li><strong>Email:</strong> <a href="mailto:support@service@streetcode.com" class="text-red-500 underline">service@streetcode.com</a></li>
            <li><strong>Phone:</strong> +1 (123) 456-7890</li>
            <li><strong>Live Chat:</strong> Available during business hours</li>
    </ul>
    <p>We strive to respond to all inquiries within 24 hours. Your satisfaction is our top priority.</p>
        
    <h3  class="my-5">Troubleshooting Guides</h3>
    <p>Encountering an issue? Our <a href="#">Troubleshooting Guides</a> offer step-by-step instructions to help you resolve common problems quickly and efficiently.</p>
        
    <h3  class="my-5">Community Support</h3>
    <p>Connect with other members of our community! Our <a href="#">Community Forum</a> is a great place to ask questions, share tips, and learn from fellow streetwear enthusiasts.</p>
        
    <h3  class="my-5">Account Management</h3>
    <p>Need help managing your account? Visit our <a href="#">Account Management</a> page for information on how to update your profile, change your password, manage your notifications, and more.</p>
        
    <h3  class="my-5">Security & Privacy</h3>
    <p>Your security and privacy are important to us. Learn more about how we protect your information and keep your transactions secure by visiting our <a href="#">Security & Privacy</a> page.</p>
        
    <p  class="my-5">Thank you for choosing <strong>Street Code</strong>. We're here to ensure your experience is as smooth and enjoyable as possible!</p>
</main>
@include('footer')
@endsection