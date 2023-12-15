<x-guest-layout>
    <div class="max-w-7xl w-full mx-auto my-8 min-h-[calc(100vh-200px)]">
        <section class="flex bg-white my-8">
            {{-- Product Image and buttons --}}
            <div class="w-2/5 p-4 flex flex-col gap-8">
                <img src="{{ Vite::asset('resources/images/product_images/PS5.jpg') }}"
                    class="w-full object-cover"
                    alt="">
                <div class="flex gap-4">
                    <button class="flex-1 py-4 bg-[#009eff] text-white hover:bg-[#0b8dff]"><i class="mr-2 fa-solid fa-cart-shopping"></i>ADD
                        TO CART</button>
                    <button class="flex-1 py-4 bg-[#07659b] text-white hover:bg-[#215e82]"><i class="mr-2 fa-solid fa-bag-shopping"></i>BUY
                        NOW</button>
                </div>
            </div>

            {{-- Product Details --}}
            <div class="w-2/4 p-4">
                <h1 class="text-2xl">SONY PlayStation 5 console 825 GB</h1>
                <div class='stars my-2'>
                    <i class="fa-solid fa-star text-orange-300"></i>
                    <i class="fa-solid fa-star text-orange-300"></i>
                    <i class="fa-solid fa-star text-orange-300"></i>
                    <i class="fa-solid fa-star text-orange-300"></i>
                    <i class="fa-regular fa-star text-orange-300"></i>
                </div>
                <span class="text-[28px] font-extrabold">Rs 100,000</span>
                <div>
                    <h2 class="text-xl font-bold my-2">Product Description</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Ipsam, quasi error qui dignissimos possimus quam fugiat!
                        Commodi harum maxime voluptatem incidunt illo rerum
                        temporibus amet voluptatum cumque sapiente aperiam
                        asperiores dolorem aspernatur molestias tempore earum,
                        impedit necessitatibus veniam beatae assumenda?</p>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="p-4">
                <h2 class="text-xl font-bold my-2">Similar Products</h2>
                <div class="flex flex-wrap justify-center gap-4">
                    <x-product-card />
                    <x-product-card />
                    <x-product-card />
                    <x-product-card />
                    <x-product-card />
                    <x-product-card />
                    <x-product-card />
                    <x-product-card />
                </div>
                
            </div>
        </section>
    </div>
</x-guest-layout>
