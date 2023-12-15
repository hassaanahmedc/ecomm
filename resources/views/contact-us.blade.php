<x-guest-layout>
    <div class="max-w-5xl w-full mx-auto my-20 min-h-[calc(100vh-200px)]">
        <section
            class="flex justify-center bg-white rounded-2xl  shadow-[0px_10px_34px_-15px_rgba(0,0,0,0.24)]">
            <div id="contact-img"
                class="w-3/5 relative min-h-full">
                <img src="{{ Vite::asset('resources/images/hero_section/contact2.jpg') }}"
                    class="w-full h-full object-cover rounded-l-2xl"
                    alt="">
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-center z-10">
                    <h1 class="text-4xl font-bold">Need Assistance?</h1>
                    <p class="text-lg/5 mt-2">We're here to help! Contact us with any questions or concerns</p>
                </div>
                <div
                    class="absolute top-0 left-0 w-full h-full bg-black opacity-50 rounded-l-2xl">
                </div>
            </div>

            <div id="contact-form"
                class="w-2/5 p-6 mx-4">
                <h1 class="text-center font-extrabold text-xl">Contact US</h1>
                <div class="flex flex-col justify-center items-center">
                    <input type="text"
                        class="px-6 mt-4 w-full border-none bg-[#e8e8e8] rounded-[30px]"
                        placeholder="Name">
                    <input type="email"
                        class="px-6 mt-4 w-full border-none bg-[#e8e8e8] rounded-[30px]"
                        placeholder="Email">
                    <input type="text"
                        class="px-6 mt-4 w-full border-none bg-[#e8e8e8] rounded-[30px]"
                        placeholder="Subject">
                    <textarea name="text"
                        rows="4"
                        cols="50"
                        class="px-6 mt-4 w-full border-none bg-[#e8e8e8] rounded-[30px] resize-none"
                        placeholder="Message"
                        id=""></textarea>
                </div>
                <button
                    class="py-3 mt-4 w-full bg-[#009eff] text-white hover:bg-[#0b8dff] rounded-[30px]">Submit</button>
            </div>
        </section>
    </div>
</x-guest-layout>
