@extends('layouts.layout')
@section("title", "Home")
@section('content')
    <div>
        <div class="relative">
            <div class="mx-auto max-w-7xl">
                <div class="relative z-10 pt-6 lg:w-full lg:max-w-2xl">
                    <svg class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-black lg:block"
                        viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                        <polygon points="0,0 90,0 50,100 0,100"></polygon>
                    </svg>
                    <div class="relative px-6 py-24 sm:py-40 lg:px-8 lg:py-56 lg:pr-0">
                        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
                            <div class="hidden sm:mb-10 sm:flex">
                                <div
                                    class="relative rounded-full px-3 py-1 text-sm leading-6 text-white bg-[#0d0d0d] ring-1 ring-gray-700/10 hover:ring-gray-800/20">
                                    <i class="fa-solid fa-star" style="color: #ffd500;"></i> Rated 4.7 on <a href="#"
                                        class="whitespace-nowrap font-semibold text-yellow-300"><span
                                            class="absolute inset-0" aria-hidden="true"></span>Trip Advisor <span
                                            aria-hidden="true">→</span></a>
                                </div>
                            </div>
                            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Welcome to Villa Mystic
                                Mirage</h1>
                            <p class="mt-6 text-lg leading-8 text-gray-100">Discover a world of luxury and tranquility in
                                our exclusive villa retreat.</p>
                            <div class="mt-10 flex items-center gap-x-6">
                                <a href="#"
                                    class="rounded-md px-3.5 py-2.5 text-sm font-semibold shadow-sm bg-yellow-300 text-gray-900 hover:bg-yellow-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">Get
                                    started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-black lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="aspect-[3/2] object-cover lg:aspect-auto lg:h-full lg:w-full"
                    src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="">
            </div>
        </div>
    </div>
    <div>
        <div class="mx-auto max-w-7xl py-24 sm:px-2 sm:py-32 lg:px-4">
            <div class="mx-auto max-w-2xl px-4 lg:max-w-none">
                <div class="grid grid-cols-1 items-center gap-x-16 gap-y-10 lg:grid-cols-2">

                    <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg bg-gray-100">
                        <img src="https://images.pexels.com/photos/221457/pexels-photo-221457.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="" class="object-cover object-center">
                    </div>
                    <div>
                        <h2 class="text-4xl font-bold tracking-tight text-white">Exclusive Incentives and Special Offers
                        </h2>
                        <p class="mt-4 text-white">Make your stay even more rewarding with our exclusive incentives and
                            limited-time special offers.</p>
                    </div>
                </div>
                <div class="mt-16 grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-3">
                    <div class="sm:flex lg:block">
                        <div class="sm:flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" height="4rem" viewBox="0 0 384 512">
                                <style>
                                    svg {
                                        fill: #ffffff
                                    }
                                </style>
                                <path
                                    d="M374.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-320 320c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l320-320zM128 128A64 64 0 1 0 0 128a64 64 0 1 0 128 0zM384 384a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z" />
                            </svg>
                        </div>
                        <div class="mt-4 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-6">
                            <h3 class="text-sm font-medium text-white">Early Bird Discount</h3>
                            <p class="mt-2 text-sm text-white">Book your stay in advance and enjoy our exclusive Early Bird
                                Discount. Receive up to 20% off your reservation when you book at least 60 days before your
                                arrival. Don't miss out on this limited-time offer to secure your luxury escape at an
                                unbeatable rate.</p>
                        </div>
                    </div>
                    <div class="sm:flex lg:block">
                        <div class="sm:flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" height="4rem" viewBox="0 0 576 512">
                                <style>
                                    svg {
                                        fill: #ffffff
                                    }
                                </style>
                                <path
                                    d="M183.1 235.3c33.7 20.7 62.9 48.1 85.8 80.5c7 9.9 13.4 20.3 19.1 31c5.7-10.8 12.1-21.1 19.1-31c22.9-32.4 52.1-59.8 85.8-80.5C437.6 207.8 490.1 192 546 192h9.9c11.1 0 20.1 9 20.1 20.1C576 360.1 456.1 480 308.1 480H288 267.9C119.9 480 0 360.1 0 212.1C0 201 9 192 20.1 192H30c55.9 0 108.4 15.8 153.1 43.3zM301.5 37.6c15.7 16.9 61.1 71.8 84.4 164.6c-38 21.6-71.4 50.8-97.9 85.6c-26.5-34.8-59.9-63.9-97.9-85.6c23.2-92.8 68.6-147.7 84.4-164.6C278 33.9 282.9 32 288 32s10 1.9 13.5 5.6z" />
                            </svg>
                        </div>
                        <div class="mt-4 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-6">
                            <h3 class="text-sm font-medium text-white">Complimentary Spa Package</h3>
                            <p class="mt-2 text-sm text-white"> Indulge in the ultimate relaxation with our Complimentary
                                Spa Package. Book your stay with us and receive a complimentary spa treatment for each
                                guest. Unwind in style with a rejuvenating massage or spa therapy, enhancing your vacation
                                experience and leaving you refreshed and pampered.</p>
                        </div>
                    </div>
                    <div class="sm:flex lg:block">
                        <div class="sm:flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" height="4rem" viewBox="0 0 512 512">
                                <style>
                                    svg {
                                        fill: #ffffff
                                    }
                                </style>
                                <path
                                    d="M216 64c-13.3 0-24 10.7-24 24s10.7 24 24 24h16v33.3C119.6 157.2 32 252.4 32 368H480c0-115.6-87.6-210.8-200-222.7V112h16c13.3 0 24-10.7 24-24s-10.7-24-24-24H256 216zM24 400c-13.3 0-24 10.7-24 24s10.7 24 24 24H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H24z" />
                            </svg>
                        </div>
                        <div class="mt-4 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-6">
                            <h3 class="text-sm font-medium text-white">Personalized Concierge Services</h3>
                            <p class="mt-2 text-sm text-white">Elevate your stay with our Personalized Concierge Services.
                                From the moment you arrive, our dedicated concierge team is at your service to tailor your
                                experience to your preferences. Whether it's arranging private tours, making restaurant
                                reservations, or fulfilling any special requests, our concierge is here to ensure your every
                                need is met.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="relative bg-[#0d0d0d]">
        <div class="relative h-80 overflow-hidden bg-yellow-300 md:absolute md:left-0 md:h-full md:w-1/3 lg:w-1/2">
            <img class="h-full w-full object-cover"
                src="https://images.pexels.com/photos/2549029/pexels-photo-2549029.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="">
            <svg viewBox="0 0 926 676" aria-hidden="true"
                class="absolute -bottom-24 left-24 w-[57.875rem] transform-gpu blur-[118px]">
                <path fill="url(#60c3c621-93e0-4a09-a0e6-4c228a0116d8)" fill-opacity=".4"
                    d="m254.325 516.708-90.89 158.331L0 436.427l254.325 80.281 163.691-285.15c1.048 131.759 36.144 345.144 168.149 144.613C751.171 125.508 707.17-93.823 826.603 41.15c95.546 107.978 104.766 294.048 97.432 373.585L685.481 297.694l16.974 360.474-448.13-141.46Z">
                </path>
                <defs>
                    <linearGradient id="60c3c621-93e0-4a09-a0e6-4c228a0116d8" x1="926.392" x2="-109.635" y1=".176"
                        y2="321.024" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#776FFF"></stop>
                        <stop offset="1" stop-color="#FF4694"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="relative mx-auto max-w-7xl py-24 sm:py-32 lg:px-8 lg:py-40">
            <div class="pl-6 pr-6 md:ml-auto md:w-2/3 md:pl-16 lg:w-1/2 lg:pl-24 lg:pr-0 xl:pl-32">
                <h2 class="text-base font-semibold leading-7 text-yellow-300">Indulge in Luxury and Serenity</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Experience Villa Mystic Mirage</p>
                <p class="mt-6 text-base leading-7 text-gray-300">Our stunning villa offers breathtaking views, elegant
                    amenities, and an unforgettable escape from the ordinary.</p>
                <div class="mt-8">
                    <a href="#"
                        class="inline-flex rounded-md bg-yellow-300 px-3.5 py-2.5 text-sm font-semibold transition-colors shadow-sm hover:bg-yellow-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Learn
                        More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-4xl font-bold text-white tracking-tight sm:text-6xl">Explore Bali's Hidden Treasures</h2>
            <p class="mt-6 text-lg leading-8 text-gray-100">While at Villa Mystic Mirage, discover the beauty of Bali's
                landscapes, culture, and vibrant experiences.</p>
        </div>
        <section class="relative">

            <div class="container mx-auto px-4">
                <div x-data="{
                    openTab: 1,
                    activeClasses: 'border-b-2 border-sobar-dark text-white',
                    inactiveClasses: ''
                }">
                    <div class="mb-12 lg:mb-16 lg:text-center max-w-max mx-auto lg:border-b">
                        <ul class="flex">
                            <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class=""> <button
                                    :class="openTab === 1 ? activeClasses : inactiveClasses"
                                    class="px-4 lg:px-8 py-4 pb-4 text-sm font-semibold text-white hover:text-white">
                                    <a>Canggu</a> </button> </li>
                            <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class=""> <button
                                    :class="openTab === 2 ? activeClasses : inactiveClasses"
                                    class="px-4 lg:px-8 py-4 pb-4 text-sm font-semibold text-white hover:text-white"><a>
                                        Ubud </a></button> </li>


                        </ul>
                    </div>

                    <div x-show="openTab === 1">
                        <div class="flex flex-wrap mb-6 lg:mb-14 -mx-3">
                            <div class="flex flex-wrap w-full md:w-1/2 lg:h-screen">
                                <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                    <img class="w-full h-full object-cover rounded-lg object-top"
                                        src="https://images.pexels.com/photos/4394295/pexels-photo-4394295.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="">
                                </div>
                                <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                    <img class="w-full h-full object-cover rounded-lg"
                                        src="https://images.pexels.com/photos/5289209/pexels-photo-5289209.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="">
                                </div>
                                <div class="w-full h-64 lg:h-2/3 p-3">
                                    <img class="w-full h-full object-cover rounded-lg"
                                        src="https://images.pexels.com/photos/16242142/pexels-photo-16242142/free-photo-of-canggu.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="">
                                </div>
                            </div>
                            <div class="flex flex-wrap w-full md:w-1/2 lg:h-screen">
                                <div class="w-full h-64 lg:h-2/3 p-3">
                                    <img class="w-full h-full object-cover rounded-lg"
                                        src="https://images.pexels.com/photos/2166559/pexels-photo-2166559.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="">
                                </div>
                                <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                    <img class="w-full h-full object-cover rounded-lg"
                                        src="https://images.pexels.com/photos/1544351/pexels-photo-1544351.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="">
                                </div>
                                <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                    <img class="w-full h-full object-cover bg-bottom rounded-lg"
                                        src="https://images.pexels.com/photos/931018/pexels-photo-931018.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div x-show="openTab === 2">
                        <div class="flex flex-wrap mb-6 lg:mb-14 -mx-3">
                            <div class="flex flex-wrap w-full md:w-1/2 lg:h-screen">
                                <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                    <img class="w-full h-full object-cover rounded-lg object-center"
                                        src="https://images.pexels.com/photos/2100804/pexels-photo-2100804.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="">
                                </div>
                                <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                    <img class="w-full h-full object-cover rounded-lg"
                                        src="https://images.pexels.com/photos/931007/pexels-photo-931007.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="">
                                </div>
                                <div class="w-full h-64 lg:h-2/3 p-3">
                                    <img class="w-full h-full object-cover rounded-lg"
                                        src="https://images.pexels.com/photos/2474690/pexels-photo-2474690.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="">
                                </div>
                            </div>
                            <div class="flex flex-wrap w-full md:w-1/2 lg:h-screen">
                                <div class="w-full h-64 lg:h-2/3 p-3">
                                    <img class="w-full h-full object-cover rounded-lg"
                                        src="https://images.pexels.com/photos/1802183/pexels-photo-1802183.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="">
                                </div>
                                <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                    <img class="w-full h-full object-cover rounded-lg"
                                        src="https://images.pexels.com/photos/2474689/pexels-photo-2474689.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="">
                                </div>
                                <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                    <img class="w-full h-full object-cover bg-bottom rounded-lg"
                                        src="https://images.pexels.com/photos/982673/pexels-photo-982673.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </section>
    </div>
    <div class="px-6 py-4 sm:py-4 lg:px-4">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-4xl font-bold text-white tracking-tight sm:text-6xl">What Our Guests Are Saying</h2>
        </div>
        <section class=" px-6 py-8">
            <figure class="mx-auto max-w-2xl">
                <p class="sr-only">5 out of 5 stars</p>
                <div class="flex gap-x-1 text-yellow-300">
                    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
                    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
                    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
                    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
                    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
                </div>
                <blockquote
                    class="mt-10 text-xl font-semibold leading-8 tracking-tight text-white sm:text-2xl sm:leading-9">
                    <p>“Qui dolor enim consectetur do et non ex amet culpa sint in ea non dolore. Enim minim magna anim id
                        minim eu cillum sunt dolore aliquip. Amet elit laborum culpa irure incididunt adipisicing culpa amet
                        officia exercitation. Eu non aute velit id velit Lorem elit anim pariatur.”</p>
                </blockquote>
                <figcaption class="mt-10 flex items-center gap-x-6">
                    <img class="h-12 w-12 rounded-full bg-gray-50"
                        src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=1024&amp;h=1024&amp;q=80"
                        alt="">
                    <div class="text-sm leading-6">
                        <div class="font-semibold text-gray-100">Judith Black</div>
                    </div>
                </figcaption>
            </figure>
        </section>
    </div>
@endsection
