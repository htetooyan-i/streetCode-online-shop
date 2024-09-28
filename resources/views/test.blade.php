@if ($product->Category != 'Accessories')
            <div id="size-choice" class="z-10 bg-white w-full px-3 py-2 size-list border border-gray-400 rounded-lg overflow-hidden size-choice h-[40px]">
                <div class="block h-[40px]">
                        <span class="float-end size-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5  -7.5" />
                            </svg>
                        </span>
                        <span id="selected-size" class="float-start">All</span>
                </div>
                <div class="block mt-3">
                        <span class="text-[0.8rem]">Size and Conversions</span>
                        <div class="flex flex-row justify-start mt-3 gap-2 lg:gap-4">
                            <button type="button" class="md:text-[0.7rem] lg:text-[1rem] text-[0.8rem] rounded-full bg-gray-200 hover:bg-black hover:text-white px-4 py-1 transition duration-100">US M</button>
                            <button type="button" class="md:text-[0.7rem] lg:text-[1rem] text-[0.8rem] rounded-full bg-gray-200 hover:bg-black hover:text-white px-4 py-1 transition duration-100">US W</button>
                            <button type="button" class="md:text-[0.7rem] lg:text-[1rem] text-[0.8rem] rounded-full bg-gray-200 hover:bg-black hover:text-white px-4 py-1 transition duration-100">EU</button>
                        </div>
                </div>
                <form id="size-choice-form" action="{{url('product-detail/'.$product->id.'/'.$color)}}" method="post">
                    @csrf
                    <!-- Radio Buttons for Sizes -->
                    <div class="size-btns grid grid-cols-3 justify-center mt-3 overflow-auto">
                        <div>
                            <input type="radio" name="size" value="US M 4" id="size-4" class="hidden peer">
                            <label for="size-4" class="peer-checked:border-black peer-checked:bg-gray-200 peer-checked:border-2 border flex flex-col items-center justify-center border-gray-400 w-11/12 rounded-md mb-3 transition duration-100 cursor-pointer">
                                <span class="siz-item">US M 4</span>
                                <span class="text-gray-500">BID</span>
                            </label>
                        </div>
                        <div>
                            <input type="radio" name="size" value="US M 5" id="size-5" class="hidden peer">
                            <label for="size-5" class="peer-checked:border-black peer-checked:bg-gray-200 peer-checked:border-2 border flex flex-col items-center justify-center border-gray-400 w-11/12 rounded-md mb-3 transition duration-100 cursor-pointer">
                                <span class="siz-item">US M 5</span>
                                <span class="text-gray-500">BID</span>
                            </label>
                        </div>
                        <div>
                            <input type="radio" name="size" value="US M 6" id="size-6" class="hidden peer">
                            <label for="size-6" class="peer-checked:border-black peer-checked:bg-gray-200 peer-checked:border-2 border flex flex-col items-center justify-center border-gray-400 w-11/12 rounded-md mb-3 transition duration-100 cursor-pointer">
                                <span class="siz-item">US M 6</span>
                                <span class="text-gray-500">BID</span>
                            </label>
                        </div>
                        <!-- Add more sizes similarly -->
                    </div>
                </form>
            </div>
            @endif