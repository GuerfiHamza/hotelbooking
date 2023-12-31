@extends('layouts.layout')

@section('title', 'Contact Us')

@section('content')
    <div class="relative isolate">
        <div class="mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2">
            <div class="relative px-6 pb-20 pt-16 sm:pt-32 lg:static lg:px-8 lg:py-24 lg:border-r lg:border-yellow-400 sm:border-r-0">
                <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">

                    <h2 class="text-3xl font-bold tracking-tight text-white">Get in touch</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-300">{{ $settings->content }}</p>
                    <dl class="mt-10 space-y-4 text-base leading-7 text-gray-300">
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Address</span>
                                <svg class="h-7 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                                </svg>
                            </dt>
                            <dd>{{ $settings->address }}</dd>
                        </div>
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Telephone</span>
                                <svg class="h-7 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                            </dt>
                            <dd><a class="hover:text-white" href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a>
                            </dd>
                        </div>
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Email</span>
                                <svg class="h-7 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </dt>
                            <dd><a class="hover:text-white" href="mailto:{{ $settings->email }}">{{ $settings->email }}</a>
                            </dd>
                        </div>
                        <div class="flex gap-x-4">
                            @foreach ($settings->social_media_links as $link)
                                <dt class="flex-none">
                                    <a href="{{ $link['url'] }}" target="_blank" rel="noopener noreferrer">
                                        <x-icon name="{{ $link['icon'] }}" width="20" style="color: #FFF"/>
                                    </a>

                                </dt>
                            @endforeach
                        </div>
                    </dl>
                </div>
            </div>
            <form action="{{ route('contact.create') }}" method="POST" class="px-6 sm:pb-32 lg:px-8 lg:py-24">
                
                @csrf
                <div class="mx-auto max-w-xl lg:mr-0 lg:max-w-lg">
                    @if (session('success'))
                        <div class="bg-green-500 text-white px-4 py-2 rounded mb-6">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="bg-red-500 text-white px-4 py-2 rounded mb-6">
                            <p>{{ session('error') }}</p>
                        </div>
                    @endif
                    @if ($errors->any())
                    <div class="bg-red-500 text-white px-4 py-2 rounded mb-6">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>

                @endif
                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                        <div class="sm:col-span-2">
                            <label for="name" class="block text-sm font-semibold leading-6 text-white">Full name <span class="text-red-600">*</span></label>
                            <div class="mt-2.5">
                                <input type="text" name="name" id="name" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="email" class="block text-sm font-semibold leading-6 text-white">Email <span class="text-red-600">*</span></label>
                            <div class="mt-2.5">
                                <input type="email" name="email" id="email" autocomplete="email"
                                    class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="company" class="block text-sm font-semibold leading-6 text-white">Company</label>
                            <div class="mt-2.5">
                                <input type="text" name="company" id="company" autocomplete="company"
                                    class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="subject" class="block text-sm font-semibold leading-6 text-white">Subject <span class="text-red-600">*</span></label>
                            <div class="mt-2.5">
                                <input type="text" name="subject" id="subject" autocomplete="subject"
                                    class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="content" class="block text-sm font-semibold leading-6 text-white">Message <span class="text-red-600">*</span></label>
                            <div class="mt-2.5">
                                <textarea name="content" id="content" rows="4"
                                    class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 flex justify-end">
                        <button type="submit"
                            class="rounded-md px-3.5 py-2.5 text-sm font-semibold shadow-sm bg-yellow-300 text-gray-900 hover:bg-yellow-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">Send
                            message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
