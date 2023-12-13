<x-guest-layout>
    <x-slot name="hero_img">
        <x-hero-section/>
    </x-slot>
    <main class="max-w-7xl mx-auto my-0">
        <div class="w-full min-h-screen">
            <section class="text-black">
                <h1 class="text-center text-5xl my-8">Latest Products</h1>
                <div class="flex flex-wrap justify-center gap-4">
                    <x-product-card />
                    <x-product-card />
                    <x-product-card />
                    <x-product-card />
                    <x-product-card />
                    <x-product-card />
                    <x-product-card />
                    <x-product-card />
                    <x-product-card />
                    <x-product-card />
                    <x-product-card />
                </div>
            </section>
        </div>
    </main>
</x-guest-layout>
