@extends('layouts.app')

@section('content')

<section class="bg-black lg:py-[100px] flex justify-center items-center">
    <div class="max-w-screen-xl px-5 xl:px-16">
        <div class="flex flex-col lg:flex-row wow fadeInUp"  data-wow-delay="0.5s">
            <div class="text-white wow bounceInUp " data-wow-duration="2s" data-wow-delay="0.5s">
                <strong class="text-gray-600">Paperless Invoicing App</strong>
                <h1 class="text-2xl lg:text-5xl text-bold transition ease-in-out mr-4">Invoicing app that makes your small and
                    medium businesses more efficient.</h1>
            </div>
            <div class="wow bounceInUp"  data-wow-delay="0.6s">
                <p class="text-gray-300 md:text-md lg:text-xl mt-7">
                    Billify.tech helps you maintain your customers, issue invoices, manage cash flow and grow your business
                    — all from the
                    palm of your hand
                </p>
            </div>
        </div>
        <div class="mt-10 z-0 overflow-hidden aspect-w-16 aspect-h-9 rounded-2xl lg:rounded-none wow fadeInUp" data-wow-delay="0.7s">
            <video class="md:hidden" autoplay playsinline loop muted>
                <source
                    src="https://res.cloudinary.com/glide/video/upload/v1/glideapps.com/ai/AI%20Header%20mob.webm?_a=DATAdtAAZAA0"
                    type="video/webm">
                <source
                    src="https://res.cloudinary.com/glide/video/upload/v1/glideapps.com/ai/AI%20Header%20mob.mp4?_a=DATAdtAAZAA0"
                    type="video/mp4">
                <source
                    src="https://res.cloudinary.com/glide/video/upload/v1/glideapps.com/ai/AI%20Header%20mob.ogv?_a=DATAdtAAZAA0"
                    type="video/ogg">
            </video>
            <video class="max-md:hidden" autoplay playsinline loop muted>
                <source
                    src="https://res.cloudinary.com/glide/video/upload/v1/glideapps.com/ai/AI%20Header.webm?_a=DATAdtAAZAA0"
                    type="video/webm">
                <source
                    src="https://res.cloudinary.com/glide/video/upload/v1/glideapps.com/ai/AI%20Header.mp4?_a=DATAdtAAZAA0"
                    type="video/mp4">
                <source
                    src="https://res.cloudinary.com/glide/video/upload/v1/glideapps.com/ai/AI%20Header.ogv?_a=DATAdtAAZAA0"
                    type="video/ogg">
            </video>
        </div>
    </div>
</section>

<section class="my-6 flex justify-center items-center">
    <div class="max-w-screen-xl px-5 xl:px-16">
        <div class="grid items-center lg:grid-cols-3">
            <p class="font-semibold focus:outline-none text-center sm:text-lg md:text-lg max-lg:text-md lg:text-left lg:max-w-[360px] text-gray-600 wow fadeInUp" data-wow-delay="0.3s">
                Join the 50+ small and medium businesses already benefiting from smoother billing and happier
                customers.</p>
            <div class="lg:grid-cols-2 lg:col-span-2 max-lg:mt-6 wow fadeInUp" data-wow-delay="0.4s">
                <div
                    class="grid items-center grid-cols-3 lg:gap-5 mt-5 lg:mt-0 max-xl:gap-6 xl:grid-cols-2 xl:flex justify-items-center">
                    <img class="h-fit lg:h-8 xl:h-7"
                        src="https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Flogos%2Fmercury.png&w=384&q=75"
                        alt="">
                    <img class="h-fit lg:h-8 xl:h-7"
                        src="https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Flogos%2Fgeneral-electric.png&w=384&q=75"
                        alt="">
                    <img class="h-fit lg:h-8 xl:h-7"
                        src="https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Flogos%2Fliberty.png&w=384&q=75"
                        alt="">
                    <img class="h-fit lg:h-8 xl:h-7"
                        src="https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Flogos%2Feagle.png&w=384&q=75"
                        alt="">
                    <img class="h-fit lg:h-8 xl:h-7"
                        src="https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Flogos%2Fhilton.png&w=384&q=75"
                        alt="">
                    <img class="h-fit lg:h-8 xl:h-7"
                        src="https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Flogos%2Fpga.png&w=384&q=75"
                        alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 md:py-24 lg:py-[50px] flex justify-center items-center">
    <div class="max-w-screen-xl px-5 xl:px-16">
        <div class="text-center wow fadeInUp" data-wow-delay="0.3s">
            {{-- font-chromatic-grotesque text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-medium --}}
            <h2 class="font-sans text-2xl mx-0 md:mx-2 sm:text-4xl lg:mx-3 lg:text-6xl xl:text-7xl font-medium">Software
                designed for your small and medium businesses</h2>
            <div>
                <p class="mx-auto max-w-[779px] mt-8 text-xl text-gray-600 px-6 focus:outline-none">Billify.tech gives you the powers of a
                    streamline your billing process and simplify invoicing with just a few taps on
                    your phone screen, manage customers effectively and it’s just the beginning.</p>
            </div>
        </div>
        <div class="mt-20 md:mt-24 lg:mt-[120px] xl:hidden wow fadeInUp" data-wow-delay="0.4s">
            <div class="grid md:grid-cols-2 gap-x-6 gap-y-8">
                <div class="block w-full wow fadeInUp" data-wow-delay="0.3s">
                    <div class="z-0 overflow-hidden bg-neutrals-opaque-3 rounded-xl aspect-w-5 aspect-h-3">
                        <img src="https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Fadaptive-software%2Fconnect-your-data.jpg&w=1200&q=75"
                            alt="">
                    </div>
                    <div class="flex items-center mt-4 text-black">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="w-8 h-8">
                            <path
                                d="M21 4.5C21 5.88071 16.9706 7 12 7C7.02944 7 3 5.88071 3 4.5C3 3.11929 7.02944 2 12 2C16.9706 2 21 3.11929 21 4.5Z"
                                stroke="currentColor" stroke-width="1.5" vector-effect="none" stroke-linejoin="round">
                            </path>
                            <path d="M21 14.5C21 15.8807 16.9706 17 12 17C7.02944 17 3 15.8807 3 14.5"
                                stroke="currentColor" stroke-width="1.5" vector-effect="none" stroke-linejoin="round">
                            </path>
                            <path d="M21 4.5V19.5C21 20.8807 16.9706 22 12 22C7.02944 22 3 20.8807 3 19.5V4.5"
                                stroke="currentColor" stroke-width="1.5" vector-effect="none" stroke-linejoin="round">
                            </path>
                            <path d="M21 9.5C21 10.8807 16.9706 12 12 12C7.02944 12 3 10.8807 3 9.5"
                                stroke="currentColor" stroke-width="1.5" vector-effect="none" stroke-linejoin="round">
                            </path>
                        </svg>
                        <p class="ml-2 text-lg font-semibold">Connect to your data</p>
                    </div>
                    <p class="text-left mt-1 ml-[42px] text-neutrals-opaque-9">Glide works with your existing business
                        data,
                        whether it lives in spreadsheets or databases.</p>
                </div>
                <div class="block w-full wow fadeInUp" data-wow-delay="0.4s">
                    <div class="z-0 overflow-hidden bg-neutrals-opaque-3 rounded-xl aspect-w-5 aspect-h-3">
                        <img src="https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Fadaptive-software%2Fdeploy-on-all-your-devices.jpg&w=2048&q=75"
                            alt="">
                    </div>
                    <div class="flex items-center mt-4 text-black">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="w-8 h-8">
                            <path
                                d="M8 20H19C20.6569 20 22 18.6569 22 17V9C22 7.34315 20.6569 6 19 6H12M12 6V17C12 18.6569 10.6569 20 9 20H6C4.34315 20 3 18.6569 3 17V6C3 4.34315 4.34315 3 6 3H9C10.6569 3 12 4.34315 12 6Z"
                                stroke="currentColor" stroke-width="1.5" vector-effect="none"></path>
                        </svg>
                        <p class="ml-2 text-lg font-semibold">Deploy on all devices</p>
                    </div>
                    <p class="text-left mt-1 ml-[42px] text-neutrals-opaque-9">Create apps with self-designing layouts
                        that
                        adapt to every device and always look modern and fresh. </p>
                </div>
                <div class="block w-full wow fadeInUp" data-wow-delay="0.5s">
                    <div class="z-0 overflow-hidden bg-neutrals-opaque-3 rounded-xl aspect-w-5 aspect-h-3">
                        <img src="https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Fadaptive-software%2Fautomate-your-workflows.jpg&w=2048&q=75"
                            alt="">
                    </div>
                    <div class="flex items-center mt-4 text-black">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="w-8 h-8">
                            <circle cx="6" cy="5" r="3" stroke="currentColor" stroke-width="1.5" vector-effect="none"
                                stroke-linejoin="round"></circle>
                            <circle cx="18" cy="19" r="3" stroke="currentColor" stroke-width="1.5" vector-effect="none"
                                stroke-linejoin="round"></circle>
                            <path
                                d="M11 5H16.1319C18.1328 5 18.8937 7.61309 17.2056 8.68732L6.79437 15.3127C5.10629 16.3869 5.86722 19 7.86812 19H13"
                                stroke="currentColor" stroke-width="1.5" vector-effect="none"></path>
                        </svg>
                        <p class="ml-2 text-lg font-semibold">Build powerful workflows</p>
                    </div>
                    <p class="text-left mt-1 ml-[42px] text-neutrals-opaque-9">Create and manage complex, multi-step
                        actions
                        that update your data and connect your app to other tools.</p>
                </div>
                <div class="block w-full wow fadeInUp" data-wow-delay="0.6s">
                    <div class="z-0 overflow-hidden bg-neutrals-opaque-3 rounded-xl aspect-w-5 aspect-h-3">
                        <img src="https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Fadaptive-software%2Fmaximize-your-budget.jpg&w=2048&q=75"
                            alt="">
                    </div>
                    <div class="flex items-center mt-4 text-black">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="w-8 h-8">
                            <path
                                d="M22 19H3C2.44772 19 2 18.5523 2 18V6C2 5.44772 2.44772 5 3 5H21C21.5523 5 22 5.44772 22 6V15"
                                stroke="currentColor" stroke-width="1.5" vector-effect="none"></path>
                            <path d="M17.8824 23L22 19M22 19L17.8824 15M22 19L12 19" stroke="currentColor"
                                stroke-width="1.5" vector-effect="none" stroke-linejoin="round"></path>
                            <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5" vector-effect="none">
                            </circle>
                        </svg>
                        <p class="ml-2 text-lg font-semibold">Consolidate your licenses</p>
                    </div>
                    <p class="text-left mt-1 ml-[42px] text-neutrals-opaque-9">Reduce overspending on tools you don't
                        need with
                        one platform to build the solutions you do need. </p>
                </div>
                <div class="block w-full md:hidden wow fadeInUp" data-wow-delay="0.7s">
                    <div class="z-0 overflow-hidden bg-neutrals-opaque-3 rounded-xl aspect-w-5 aspect-h-3">
                        <img src="https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Fadaptive-software%2Fimpress-your-team.jpg&w=2048&q=75"
                            alt="">
                    </div>
                    <div class="flex items-center mt-4 text-black">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="w-8 h-8">
                            <path
                                d="M9.81718 12.3244C10.075 11.6276 11.0607 11.6276 11.3185 12.3244L13.0344 16.9615C13.1155 17.1805 13.2882 17.3533 13.5073 17.4344L18.1443 19.1502C18.8412 19.4081 18.8412 20.3937 18.1443 20.6516L13.5073 22.3674C13.2882 22.4485 13.1155 22.6212 13.0344 22.8403L11.3185 27.4774C11.0607 28.1742 10.075 28.1742 9.81718 27.4774L8.10132 22.8403C8.02025 22.6212 7.84751 22.4485 7.62842 22.3674L2.9914 20.6516C2.29453 20.3937 2.29453 19.4081 2.9914 19.1502L7.62842 17.4344C7.84751 17.3533 8.02025 17.1806 8.10132 16.9615L9.81718 12.3244Z"
                                stroke="currentColor" stroke-width="1.5" vector-effect="none" stroke-linejoin="round">
                            </path>
                            <path
                                d="M23.0426 4.24331C23.236 3.72066 23.9752 3.72066 24.1686 4.24331L25.4555 7.72107C25.5163 7.88539 25.6458 8.01494 25.8102 8.07575L29.2879 9.36264C29.8106 9.55603 29.8106 10.2953 29.2879 10.4887L25.8102 11.7756C25.6458 11.8364 25.5163 11.9659 25.4555 12.1302L24.1686 15.608C23.9752 16.1306 23.236 16.1306 23.0426 15.608L21.7557 12.1302C21.6949 11.9659 21.5653 11.8364 21.401 11.7756L17.9232 10.4887C17.4006 10.2953 17.4006 9.55603 17.9232 9.36264L21.401 8.07575C21.5653 8.01494 21.6949 7.88539 21.7557 7.72107L23.0426 4.24331Z"
                                stroke="currentColor" stroke-width="1.5" vector-effect="none" stroke-linejoin="round">
                            </path>
                        </svg>
                        <p class="ml-2 text-lg font-semibold">Impress your team</p>
                    </div>
                    <p class="text-left mt-1 ml-[42px] text-neutrals-opaque-9">Glide software is beautiful
                        out-of-the-box. Your
                        team will love using the tools you build for them.</p>
                </div>
            </div>
        </div>
        <div class="hidden xl:flex max-xl:hidden lg:mt-[120px] wow fadeInUp" data-wow-delay="0.5s">
            <div class="main-btn flex flex-col justify-between w-1/3">
                <button data-id="1" class="flex btn-sf cursor-pointer z-10 text-gray-400 text-lg font-semibold hover:text-gray-900 block w-full p-6 focus:outline-none transition relative rounded-[18px] bg-gray-400 bg-opacity-10 wow fadeInUp" data-wow-delay="0.5s">
                    <svg class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8">
                        <path
                            d="M21 4.5C21 5.88071 16.9706 7 12 7C7.02944 7 3 5.88071 3 4.5C3 3.11929 7.02944 2 12 2C16.9706 2 21 3.11929 21 4.5Z"
                            stroke="currentColor" stroke-width="1.5" vector-effect="none" stroke-linejoin="round">
                        </path>
                        <path d="M21 14.5C21 15.8807 16.9706 17 12 17C7.02944 17 3 15.8807 3 14.5"
                            stroke="currentColor" stroke-width="1.5" vector-effect="none" stroke-linejoin="round">
                        </path>
                        <path d="M21 4.5V19.5C21 20.8807 16.9706 22 12 22C7.02944 22 3 20.8807 3 19.5V4.5"
                            stroke="currentColor" stroke-width="1.5" vector-effect="none" stroke-linejoin="round">
                        </path>
                        <path d="M21 9.5C21 10.8807 16.9706 12 12 12C7.02944 12 3 10.8807 3 9.5"
                            stroke="currentColor" stroke-width="1.5" vector-effect="none" stroke-linejoin="round">
                        </path>
                    </svg>
                    Connect to your data
                </button>
                <button data-id="2" class="flex btn-sf cursor-pointer z-10 text-gray-400 text-lg font-semibold hover:text-gray-900 block w-full p-6 focus:outline-none transition relative rounded-[18px] bg-opacity-10 wow fadeInUp" data-wow-delay="0.5s">
                    <svg class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8">
                        <path
                            d="M8 20H19C20.6569 20 22 18.6569 22 17V9C22 7.34315 20.6569 6 19 6H12M12 6V17C12 18.6569 10.6569 20 9 20H6C4.34315 20 3 18.6569 3 17V6C3 4.34315 4.34315 3 6 3H9C10.6569 3 12 4.34315 12 6Z"
                            stroke="currentColor" stroke-width="1.5" vector-effect="none"></path>
                     </svg>
                     Deploy on all devices
                </button>
                <button data-id="3" class="flex btn-sf cursor-pointer z-10 text-gray-400 text-lg font-semibold hover:text-gray-900 block w-full p-6 focus:outline-none transition relative rounded-[18px] bg-opacity-10 wow fadeInUp" data-wow-delay="0.5s">
                    <svg class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8">
                        <path d="M22 19H3C2.44772 19 2 18.5523 2 18V6C2 5.44772 2.44772 5 3 5H21C21.5523 5 22 5.44772 22 6V15"
                            stroke="currentColor" stroke-width="1.5" vector-effect="none"></path>
                        <path d="M17.8824 23L22 19M22 19L17.8824 15M22 19L12 19" stroke="currentColor" stroke-width="1.5"
                            vector-effect="none" stroke-linejoin="round"></path>
                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5" vector-effect="none">
                        </circle>
                    </svg>
                    Consolidate your licenses
                </button>
                <button data-id="4" class="flex btn-sf cursor-pointer z-10 text-gray-400 text-lg font-semibold hover:text-gray-900 block w-full p-6 focus:outline-none transition relative rounded-[18px] bg-opacity-10 wow fadeInUp" data-wow-delay="0.5s">
                    <svg class="mr-2" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8">
                        <path
                            d="M9.81718 12.3244C10.075 11.6276 11.0607 11.6276 11.3185 12.3244L13.0344 16.9615C13.1155 17.1805 13.2882 17.3533 13.5073 17.4344L18.1443 19.1502C18.8412 19.4081 18.8412 20.3937 18.1443 20.6516L13.5073 22.3674C13.2882 22.4485 13.1155 22.6212 13.0344 22.8403L11.3185 27.4774C11.0607 28.1742 10.075 28.1742 9.81718 27.4774L8.10132 22.8403C8.02025 22.6212 7.84751 22.4485 7.62842 22.3674L2.9914 20.6516C2.29453 20.3937 2.29453 19.4081 2.9914 19.1502L7.62842 17.4344C7.84751 17.3533 8.02025 17.1806 8.10132 16.9615L9.81718 12.3244Z"
                            stroke="currentColor" stroke-width="1.5" vector-effect="none" stroke-linejoin="round">
                        </path>
                        <path
                            d="M23.0426 4.24331C23.236 3.72066 23.9752 3.72066 24.1686 4.24331L25.4555 7.72107C25.5163 7.88539 25.6458 8.01494 25.8102 8.07575L29.2879 9.36264C29.8106 9.55603 29.8106 10.2953 29.2879 10.4887L25.8102 11.7756C25.6458 11.8364 25.5163 11.9659 25.4555 12.1302L24.1686 15.608C23.9752 16.1306 23.236 16.1306 23.0426 15.608L21.7557 12.1302C21.6949 11.9659 21.5653 11.8364 21.401 11.7756L17.9232 10.4887C17.4006 10.2953 17.4006 9.55603 17.9232 9.36264L21.401 8.07575C21.5653 8.01494 21.6949 7.88539 21.7557 7.72107L23.0426 4.24331Z"
                            stroke="currentColor" stroke-width="1.5" vector-effect="none" stroke-linejoin="round">
                        </path>
                    </svg>
                    Impress your team
                </button>
            </div>
            <div class="w-2/3 ml-6">
                <div class="relative z-0 overflow-hidden bg-black rounded-3xl aspect-w-5 aspect-h-3">
                    <div style="opacity: 1;" class="img_wrapper transition delay-1s duration-300 ease-in-out">
                        <img src="https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Fadaptive-software%2Fconnect-your-data.jpg&w=1200&q=75"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#F9F9F9] flex justify-center items-center">
    <div class="max-w-screen-xl px-5 xl:px-16">
        <div class="wow fadeInUp" data-wow-delay="2s">
            <div class="grid gap-6 lg:grid-cols-2 py-20 md:py-24 lg:py-[80px] wow fadeInUp" data-wow-delay="0.5s">
                <div class="grid gap-6 lg:self-center lg:block lg:gap-0">
                    <h2 class="font-sans text-3xl md:text-4xl lg:text-5xl font-medium">
                        “We
                        got a Glide app out to a few hundred drivers with literally two hours of effort. Building this in
                        our native app
                        would’ve taken weeks.”</h2>
                </div>
                <figure class="relative aspect-w-4 aspect-h-3 ">
                    <img class="rounded-3xl"
                        src="https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Fsection-build%2Fgrubhub.jpg&w=3840&q=75"
                        alt="">
                </figure>
            </div>
        </div>
        <div class="wow fadeInUp" data-wow-delay="2.5s">
            <div class="grid grid-cols-2 gap-4 gap-y-6 lg:gap-y-0 lg:gap-4 lg:grid-cols-6 pb-5 md:pb-10 lg:pb-16">
                <div class="col-span-2 text-xl lg:text-[22px] lg:col-span-3">
                    <p class="font-semibold">Smarter software spend</p>
                    <p class="text-[#4A4A50] max-md:mt-2 text-lg lg:text-[22px] font-normal lg:max-w-md">
                        Save time and money by using Billify.tech that fits the needs of your small and medium business.</p>
                </div>
                <a class="flex flex-col gap-5 pl-[13px] border-l-2" href="#">
                    <span class="text-xl font-semibold lg:text-3xl">8,640$</span>
                    <div>
                        <p class="flex font-semibold text-md text-blue-600">saved each year
                            <svg width="18" height="18" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="ml-1 mt-1 group-hover:translate-x-0.5 transition max-md:hidden">
                                <path d="M13 19L20 12M20 12L13 5M20 12L3 12" stroke="currentColor" stroke-width="1.5"
                                    vector-effect="none" stroke-linejoin="round">
                                </path>
                            </svg>
                        </p>
                    </div>
                </a>
                <a class="flex flex-col gap-5 pl-[13px] border-l-2" href="#">
                    <span class="text-xl font-semibold lg:text-3xl">365 hours</span>
                    <div>
                        <p class="flex font-semibold text-md text-blue-600">saved each year
                            <svg width="18" height="18" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="ml-1 mt-1 group-hover:translate-x-0.5 transition max-md:hidden">
                                <path d="M13 19L20 12M20 12L13 5M20 12L3 12" stroke="currentColor" stroke-width="1.5"
                                    vector-effect="none" stroke-linejoin="round">
                                </path>
                            </svg>
                        </p>
                    </div>
                </a>
                <a class="flex flex-col gap-5 pl-[13px] border-l-2" href="#">
                    <span class="text-xl font-semibold lg:text-3xl">30% sales</span>
                    <div>
                        <p class="flex font-semibold text-md text-blue-600">increased each year
                            <svg width="18" height="18" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="ml-1 mt-1 group-hover:translate-x-0.5 transition max-md:hidden">
                                <path d="M13 19L20 12M20 12L13 5M20 12L3 12" stroke="currentColor" stroke-width="1.5"
                                    vector-effect="none" stroke-linejoin="round">
                                </path>
                            </svg>
                        </p>
                    </div>
                </a>

                {{-- <a class="flex flex-col gap-5 pl-[13px] border-l-2 lg:hidden" href="#">
                    <span class="text-xl font-semibold lg:text-3xl">12,000</span>
                    <div>
                        <p class="font-semibold text-lg text-blue-600">saved each year</p>
                        <p class="flex font-semibold text-lg text-blue-600">TechnipFMC
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="ml-1 group-hover:translate-x-0.5 transition max-md:hidden">
                                <path d="M13 19L20 12M20 12L13 5M20 12L3 12" stroke="currentColor" stroke-width="1.5"
                                    vector-effect="none" stroke-linejoin="round">
                                </path>
                            </svg>
                        </p>
                    </div>
                </a> --}}
            </div>
        </div>
    </div>
</section>

<section class="mt-28 flex justify-center items-center">
    <div class="max-w-screen-xl px-5 xl:px-16">
        <div class="max-sm:text-center wow fadeInUp" data-wow-delay="0.5s">
            <h2 class="font-medium text-2xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl">
                One system,<br class="sm:hidden"> many solutions
            </h2>
            <p class="max-w-[800px] mt-6 text-md lg:text-xl text-neutrals-opaque-9">
                Create powerful tools and workflows from
                your existing business data and quickly ship professional-grade solutions for your team.
            </p>
        </div>
    </div>
</section>

<section class="flex justify-center items-center">
    <div class="max-w-screen-xl px-5 lg:px-16 w-full rounded-3xl wow fadeInUp" data-wow-delay="0.5s">
        <div class="relative">
            <div class="max-w-screen mx-5 top-48 z-10 relative">
                {{-- desktop and laptop --}}
                <div class="hidden btn-container justify-center bg-[#e8e7e5d6] backdrop-blur-[10px] rounded-full py-1.5 px-1 mb-24 lg:flex xl:flex overflow-x-scroll no-scrollbar shadow-md"
                    style="opacity: 1">
                    <button data-id="mb-invoice" class="btn relative lg:text-md xl:text-lg font-sans py-2.5 focus:outline-none bold font-semibold lg:px-2 xl:px-8 bg-white rounded-full">
                        Mobile Invoicing
                    </button>
                    <button data-id="mb-expense" class="btn relative lg:text-md xl:text-lg font-sans py-2.5 lg:px-2 xl:px-5 focus:outline-none bold font-semibold"
                        style="max-width: 110px; min-width: fit-content;">
                        Expense Tracking
                    </button>
                    <button data-id="mb-customer" class="btn relative lg:text-md xl:text-lg font-sans py-2.5 lg:px-2 xl:px-5 focus:outline-none bold font-semibold"
                        style="max-width: 110px; min-width: fit-content;">Customer Management
                    </button>
                    <button data-id="mb-inventory" class="btn relative lg:text-md xl:text-lg font-sans py-2.5 lg:px-2 xl:px-5 focus:outline-none bold font-semibold"
                        style="max-width: 110px; min-width: fit-content;">Inventory
                    </button>
                    <button data-id="mb-automation" class="btn relative lg:text-md xl:text-lg font-sans py-2.5 lg:px-2 xl:px-5 focus:outline-none bold font-semibold"
                        style="max-width: 110px; min-width: fit-content;">Automation
                    </button>
                    <button data-id="mb-production" class="btn relative lg:text-md xl:text-lg font-sans py-2.5 lg:px-2 xl:px-5 focus:outline-none bold font-semibold"
                        style="max-width: 110px; min-width: fit-content;">
                        Production Management
                    </button>
                </div>
            </div>
            {{-- screen ipad and smart phone --}}
            <div class="btn-container-sm flex md:flex px-4 py-4 mb-4 -mx-4 space-x-4 overflow-x-scroll no-scrollbar lg:hidden xl:hidden"
                style="opacity: 1;">
                <button data-id="mb-invoice"
                    class="btn-sm rounded-full transition relative py-2.5 px-5  bold font-semibold  focus:outline-none bg-white shadow-lg"
                    style="max-width: 110px; min-width: fit-content;">Mobile Invoicing
                </button>
                <button data-id="mb-expense"
                    class="btn-sm rounded-full transition relative py-2.5 px-5  bold font-semibold  focus:outline-none"
                    style="max-width: 110px; min-width: fit-content;">Expense Tracking
                </button>
                <button data-id="mb-customer"
                    class="btn-sm rounded-full transition relative py-2.5 px-5 bold font-semibold  focus:outline-none"
                    style="max-width: 110px; min-width: fit-content;">Customer Management
                </button>
                <button data-id="mb-inventory"
                    class="btn-sm rounded-full transition relative py-2.5 px-5 bold font-semibold  focus:outline-none"
                    style="max-width: 110px; min-width: fit-content;">Inventory
                </button>
                <button data-id="mb-automation"
                    class="btn-sm rounded-full transition relative py-2.5 px-5 bold font-semibold  focus:outline-none"
                    style="max-width: 110px; min-width: fit-content;">Automation
                </button>
                <button data-id="mb-production"
                    class="btn-sm rounded-full transition relative py-2.5 px-5 bold font-semibold  focus:outline-none"
                    style="max-width: 110px; min-width: fit-content;">Production Management
                </button>
            </div>
        </div>
        <div class="pb-20 lg:pb-0">
            <figure
                class="overflow-hidden pointer-events-none select-none rounded-3xl lg:rounded-none lg:pb-9 max-sm:aspect-w-1 max-sm:aspect-h-1 menu-wrapper">
                <video autoplay playsinline loop class="object-cover w-full max-h-[680px] rounded-3xl lg:rounded-none max-sm:hidden"
                  src="https://res.cloudinary.com/glide/video/upload/w_1224/v1679490963/glideapps.com/homepage/2023/2.1%20Field%20Operations_med.mp4" style="opacity: 1;">
                </video>
            </figure>
        </div>
    </div>
</section>
@endsection
