<div x-data="{ current_img: 0 }"
    x-init="setInterval(() => { current_img = (current_img + 1) % 3 }, 5000)"
    class="relative w-full h-screen overflow-hidden">
    <img x-cloak
    x-transition.duration.300ms
        x-show="current_img === 0"
        src="{{ Vite::asset('resources/images/hero_section/new.jpg') }}"
        class="w-full h-full object-cover"
        alt="">

    <img x-cloak
    x-transition.duration.300ms
        x-show="current_img === 1"
        src="{{ Vite::asset('resources/images/hero_section/img1.jpg') }}"
        class="w-full h-full object-cover"
        alt="">

    <img x-cloak
    x-transition.duration.300ms
        x-show="current_img === 2"
        src="{{ Vite::asset('resources/images/hero_section/img3.jpg') }}"
        class="w-full h-full object-cover"
        alt="">

    <img x-cloak
    x-transition.duration.300ms
        x-show="current_img === 3"
        src="{{ Vite::asset('resources/images/hero_section/img3.jpg') }}"
        class="w-full h-full object-cover"
        alt="">

    <div
        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-center z-10">
        <h1 class="text-4xl font-bold">eComSite</h1>
        <p class="text-lg">Essential items for everyday use!</p>
    </div>
    <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
</div>
