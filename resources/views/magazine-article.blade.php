@extends('master')
@section('content')
@include('magazine-nav')
<div class="max-w-screen-xl ms-auto mb-10">
    <div class="me-auto md:ms-auto h-[600px] flex flex-col md:flex-row justify-start items-center md:ps-5">
        <div class="title w-full mb-5 ps-5 md:ps-0">
            <span class="uppercase"> Collection - 12/12/2024</span>
            <h1 class=" mt-3 title-container text-start w-3/4 text-[30px] lg:text-[40px] xl:text-[50px]" style="font-family:'Times New Roman', Times, serif">Jordan 4s Every Collector Needs</h1>
        </div>
        <div class="poster w-full h-[600px] overflow-hidden">
            <img src="{{asset('profile-image/jordan-4.webp')}}" alt="" class="object-contain">
        </div>
    </div>
</div>
<div class="my-10 content-container max-w-screen-md mx-auto font-semibold">
    <p class="leading-loose px-3 md:px-0">
        Michael Jordan himself said that, out of all the Jordans he’s donned, the 4’s are his favorite. Designed by the legendary Tinker Hatfield, MJ debuted the Jordan 4 during the first half of the 1989-1990 NBA season. Over 30 years later, we still can’t get enough. In fact, this year marks the AJ4’s 35th birthday. To celebrate this iconic silhouette, we went ahead and rounded up some of our favorite Air Jordan 4’s on StockX. These are true classics that no collector should be without.Because if any of these pairs haven’t found their way into your closet at some point in your life, can you really call yourself a sneakerhead? <br>
        One of the four OG colorways released in 1989, the Jordan 4 Retro Fire Red is a fan favorite for obvious reasons. If you look at any highlight reel of Michael Jordan, chances are he’s wearing these, as these particular AJ4’s were MJ’s go-to shoes come gametime. The shoe consists of a white leather upper with touches of black and fire red throughout. The rubber netted underlays make that winged lacing system stand out more than ever. The heel tab is black with a fire redNike Air Swoosh logo. This 2020 release marks the first time this colorway has retroed since its debut in 1989. It’s a classic that you should have in your collection <br>
        Also known as the ‘Black Cement 4′ this Jordan 4 Retro is a timeless sneaker that has been a favorite ever since they first hit the shelves in 89’. With their iconic black and red color scheme, these shoes feature black nubuck uppers with red accents on the tongue and midsole. They first retroed these in 1999, and re-released again in 2008, 2012, and 2019. A unique feature of this 2019 release is the Nike Air branding returning on the heel tab. Prior to that, unless you had the1999 pair, every retro had the signature Jumpman logo on the back. Then, in 2019, that Nike Air logo with the swoosh returned, adding to the sneaker’s legendary status. An iconic Jordan silhouette in an iconic Jordan colorway. <br>
        The counterpart to the Black Cement or Bred colorway, the Jordan 4 Retro White Cement is like the cooler side of the pillow. First released all the way back in 1989, this colorway has been re-released multiple times over the past four decades, with 2016 being the most recent. The shoe features a white leather upper alongside black waffle eyestays and white mesh/netting. On the midsole, wings, and heel you’ll find that famous black and gray speckled ‘cement’ print. In this case, it really pops against the white leather. Overall, these are true staples and perhaps one of the most recognizable AJ4s. Do yourself a favor and grab a pair of these. <br>
        While many sneakers feature this ‘Triple Black’ colorway, few do it as well as the Jordan 4 Retro Black Cat. These first launched in 2006 and re-released in 2020 but heads up, you won’t find these for anywhere close to retail. Why? Everybody wants to get their hands on these. They’re unique as far as Jordan’s go, a masterclass in monochrome. A nod to one of MJ’s various nicknames. 
        The shoe’s upper is black suede, matching its midsole and outsole. To be honest, the majority of this shoe is black, besides the light graphite Jumpman logo on the tongue. Even though it’s so minimal, the contrast is very visually appealing. Come to think of it – they’re almost non-slip kitchen footwear-core? Spring, Summer, Fall, or Winter these shoes really go with anything. Truly an essential must-have for your sneaker rotation. <br>
        Officially released in 2004, (bonus points if you can get your hands on that drop) the Jordan 4 Retro ‘Cool Grey’ colorway became an instant hit. We first saw this colorway on the Cool Grey 11’s in 2001 and people went crazy for those. As a result, when AJ4’s were given the cool grey treatment, people fell in love with the look all over again.
        The shoes are predominantly grey nubuck, with black waffle eyestays and charcoal-colored interior. However, the beauty of these shoes lies in their details. A chromed-out Jumpman logo sits on the heel tab. Tiny hits of yellow on the tongue patch, air bubble and outsole are just enough to make you double take when spotting these IRL. The mostly white midsole and black, white, and yellow outsole round out the shoe nicely. These were released again in 2019 so hopefully there should still be plenty of pairs floating around. 
    </p>
</div>
<div class="related-articles-container my-10">
    <h1 class="mb-20" style="font-family:'Times New Roman', Times, serif">Related Articles</h1>
    <div class="left-scroll absolute w-[10px] left-0 h-[610px]"></div>
    <div class="right-scroll absolute w-[10px] right-0 h-[610px]"></div>
    <div class="w-full overflow-x-auto related-articles">
        <div class="flex mx-2 gap-2">
            <div class="mb-2 shrink-0 border border-red-500 w-[350px] h-[300px] overflow-hidden">
                <a href="{{url('/')}}" class="relative">
                    <div class="title absolute bg-white text-black py-1 px-2 left-2 bottom-14 font-normal">
                    <span style="font-family:'Times New Roman', Times, serif" class="block text-[30px] ">Fall Campaign</span>
                    <span class="uppercase text-[0.8rem]">By StreetCode - 12/12/2024</span>
                    </div>
                    
                    <img src="{{asset('profile-image/jordan-4.webp')}}" alt="" class="object-contain">

                </a>
            </div>
            <div class="mb-2 shrink-0 border border-red-500 w-[350px] h-[300px] overflow-hidden">
                <a href="{{url('/')}}" class="relative">
                    <div class="title absolute bg-white text-black py-1 px-2 left-2 bottom-14 font-normal">
                    <span style="font-family:'Times New Roman', Times, serif" class="block text-[30px] ">Fall Campaign</span>
                    <span class="uppercase text-[0.8rem]">By StreetCode - 12/12/2024</span>
                    </div>
                    
                    <img src="{{asset('profile-image/jordan-4.webp')}}" alt="" class="object-contain">

                </a>
            </div>
            <div class="mb-2 shrink-0 border border-red-500 w-[350px] h-[300px] overflow-hidden">
                <a href="{{url('/')}}" class="relative">
                    <div class="title absolute bg-white text-black py-1 px-2 left-2 bottom-14 font-normal">
                    <span style="font-family:'Times New Roman', Times, serif" class="block text-[30px] ">Fall Campaign</span>
                    <span class="uppercase text-[0.8rem]">By StreetCode - 12/12/2024</span>
                    </div>
                    
                    <img src="{{asset('profile-image/jordan-4.webp')}}" alt="" class="object-contain">

                </a>
            </div>
            <div class="mb-2 shrink-0 border border-red-500 w-[350px] h-[300px] overflow-hidden">
                <a href="{{url('/')}}" class="relative">
                    <div class="title absolute bg-white text-black py-1 px-2 left-2 bottom-14 font-normal">
                    <span style="font-family:'Times New Roman', Times, serif" class="block text-[30px] ">Fall Campaign</span>
                    <span class="uppercase text-[0.8rem]">By StreetCode - 12/12/2024</span>
                    </div>
                    
                    <img src="{{asset('profile-image/jordan-4.webp')}}" alt="" class="object-contain">

                </a>
            </div>
            <div class="mb-2 shrink-0 border border-red-500 w-[350px] h-[300px] overflow-hidden">
                <a href="{{url('/')}}" class="relative">
                    <div class="title absolute bg-white text-black py-1 px-2 left-2 bottom-14 font-normal">
                    <span style="font-family:'Times New Roman', Times, serif" class="block text-[30px] ">Fall Campaign</span>
                    <span class="uppercase text-[0.8rem]">By StreetCode - 12/12/2024</span>
                    </div>
                    
                    <img src="{{asset('profile-image/jordan-4.webp')}}" alt="" class="object-contain">

                </a>
            </div>
            <div class="mb-2 shrink-0 border border-red-500 w-[350px] h-[300px] overflow-hidden">
                <a href="{{url('/')}}" class="relative">
                    <div class="title absolute bg-white text-black py-1 px-2 left-2 bottom-14 font-normal">
                    <span style="font-family:'Times New Roman', Times, serif" class="block text-[30px] ">Fall Campaign</span>
                    <span class="uppercase text-[0.8rem]">By StreetCode - 12/12/2024</span>
                    </div>
                    
                    <img src="{{asset('profile-image/jordan-4.webp')}}" alt="" class="object-contain">

                </a>
            </div>
        </div>
        <div class="flex mx-2 gap-2">
            <div class="mb-2 shrink-0 border border-red-500 w-[350px] h-[300px] overflow-hidden">
                <a href="{{url('/')}}" class="relative">
                    <div class="title absolute bg-white text-black py-1 px-2 left-2 bottom-14 font-normal">
                    <span style="font-family:'Times New Roman', Times, serif" class="block text-[30px] ">Fall Campaign</span>
                    <span class="uppercase text-[0.8rem]">By StreetCode - 12/12/2024</span>
                    </div>
                    
                    <img src="{{asset('profile-image/jordan-4.webp')}}" alt="" class="object-contain">

                </a>
            </div>
            <div class="mb-2 shrink-0 border border-red-500 w-[350px] h-[300px] overflow-hidden">
                <a href="{{url('/')}}" class="relative">
                    <div class="title absolute bg-white text-black py-1 px-2 left-2 bottom-14 font-normal">
                    <span style="font-family:'Times New Roman', Times, serif" class="block text-[30px] ">Fall Campaign</span>
                    <span class="uppercase text-[0.8rem]">By StreetCode - 12/12/2024</span>
                    </div>
                    
                    <img src="{{asset('profile-image/jordan-4.webp')}}" alt="" class="object-contain">

                </a>
            </div>
            <div class="mb-2 shrink-0 border border-red-500 w-[350px] h-[300px] overflow-hidden">
                <a href="{{url('/')}}" class="relative">
                    <div class="title absolute bg-white text-black py-1 px-2 left-2 bottom-14 font-normal">
                    <span style="font-family:'Times New Roman', Times, serif" class="block text-[30px] ">Fall Campaign</span>
                    <span class="uppercase text-[0.8rem]">By StreetCode - 12/12/2024</span>
                    </div>
                    
                    <img src="{{asset('profile-image/jordan-4.webp')}}" alt="" class="object-contain">

                </a>
            </div>
            <div class="mb-2 shrink-0 border border-red-500 w-[350px] h-[300px] overflow-hidden">
                <a href="{{url('/')}}" class="relative">
                    <div class="title absolute bg-white text-black py-1 px-2 left-2 bottom-14 font-normal">
                    <span style="font-family:'Times New Roman', Times, serif" class="block text-[30px] ">Fall Campaign</span>
                    <span class="uppercase text-[0.8rem]">By StreetCode - 12/12/2024</span>
                    </div>
                    
                    <img src="{{asset('profile-image/jordan-4.webp')}}" alt="" class="object-contain">

                </a>
            </div>
            <div class="mb-2 shrink-0 border border-red-500 w-[350px] h-[300px] overflow-hidden">
                <a href="{{url('/')}}" class="relative">
                    <div class="title absolute bg-white text-black py-1 px-2 left-2 bottom-14 font-normal">
                    <span style="font-family:'Times New Roman', Times, serif" class="block text-[30px] ">Fall Campaign</span>
                    <span class="uppercase text-[0.8rem]">By StreetCode - 12/12/2024</span>
                    </div>
                    
                    <img src="{{asset('profile-image/jordan-4.webp')}}" alt="" class="object-contain">

                </a>
            </div>
        </div>
    </div>
</div>
<span class="w-1/2 mx-auto border border-gray-200 block"></span>
<div class="logo w-1/2 mx-auto py-5 flex flex-col md:flex-row justify-between items-center gap-2">
    <p class="text-[30px]" style="font-family:'Times New Roman', Times, serif">Sign up for our newsletter</p>
    <button class="min-[480px]:block hidden px-3 py-1 border border-gray-900 w-full md:w-2/4 hover:text-white hover:bg-gray-900 transition-all duration-300">SignUp</button>
</div>
<div class="share-toggle">
    <div class="share-popup fixed bottom-24 py-3 px-3 bg-gray-300 w-[200px] transition duration-300 -left-52">
        <span class="text-center block">Share this article</span>
        <ul class="mt-3 flex flex-row justify-around">
            <li>
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
                </svg>
            </li>
            <li>
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                </svg>
            </li>
            <li>
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z"/>
                </svg>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                </svg>
            </li>
        </ul>
    </div>
    <button type="button" id="share-article-toggle" class="fixed left-5 bottom-10 text-white bg-black font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 share-article-icon transition duration-300">
    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
    </svg>
    </button>  
</div>
@include('footer')
@endsection