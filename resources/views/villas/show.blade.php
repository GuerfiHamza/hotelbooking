@extends('layouts.layout')

@section('title', $villa->name)
@section('head')
    <link rel="preload" href="{{ URL::asset('js/spotlight.bundle.js') }}" as="script">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />

@endsection
@section('content')
    <section class="text-white">
        <section class="bg-black overflow-hidden">
            <img class="w-full h-96 md:h-128 object-cover" src="{{ asset('storage/' . $villa->main_image) }}" alt="">
            <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-semibold leading-6 text-white mb-5">{{ $villa->name }}</h1>
                <div class="mb-6 max-w-3xl">

                    <div>
                        <ul role="list" class="mt-3 grid grid-cols-1 gap-5 sm:grid-cols-2 sm:gap-6 lg:grid-cols-5">
                            <li class="col-span-1 flex rounded-md shadow-sm">
                                <div
                                    class="flex mr-3 flex-shrink-0 items-center justify-center  rounded-l-md text-sm font-medium text-white">
                                    <x-icon name="gmdi-bedroom-parent-o" width="20" />

                                </div>
                                <div class="flex flex-1 items-center justify-between truncate rounded-r-md">
                                    {{ $villa->bedrooms }} Bedrooms

                                </div>
                            </li>
                            <li class="col-span-1 flex rounded-md shadow-sm">
                                <div
                                    class="flex mr-3 flex-shrink-0 items-center justify-center  rounded-l-md text-sm font-medium text-white">
                                    <x-icon name="gmdi-bedroom-child-o" width="20" />

                                </div>
                                <div class="flex flex-1 items-center justify-between truncate rounded-r-md">
                                    {{ $villa->beds }} Beds

                                </div>
                            </li>
                            <li class="col-span-1 flex rounded-md shadow-sm">
                                <div
                                    class="flex mr-3 flex-shrink-0 items-center justify-center  rounded-l-md text-sm font-medium text-white">
                                    <x-icon name="gmdi-bathroom-o" width="20" />

                                </div>
                                <div class="flex flex-1 items-center justify-between truncate rounded-r-md">
                                    {{ $villa->bathrooms }} Bathrooms

                                </div>
                            </li>
                            <li class="col-span-1 flex rounded-md shadow-sm">
                                <div
                                    class="flex mr-3 flex-shrink-0 items-center justify-center  rounded-l-md text-sm font-medium text-white">
                                    <x-icon name="gmdi-supervised-user-circle-o" width="20" />

                                </div>
                                <div class="flex flex-1 items-center justify-between truncate rounded-r-md">
                                    {{ $villa->max_guests }} Max guests

                                </div>
                            </li>
                            <li class="col-span-1 flex rounded-md shadow-sm">
                                <div
                                    class="flex mr-3 flex-shrink-0 items-center justify-center  rounded-l-md text-sm font-medium text-white">
                                    <x-icon name="gmdi-pin-drop-o" width="20" />

                                </div>
                                <div class="flex flex-1 items-center justify-between truncate rounded-r-md">
                                    {{ $villa->city->name }}

                                </div>
                            </li>

                        </ul>
                    </div>

                </div>
                <div
                    class="mx-auto grid max-w-2xl grid-cols-1 grid-rows-1 items-start gap-x-8 gap-y-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                    <div class="lg:col-start-3 lg:row-end-1">
                        <form autocomplete="off" class="bg-[#0D0D0D] shadow-md rounded px-8 pt-6 pb-8 mb-4">
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">

                                    <label for="arrivingdate" class="block uppercase tracking-wide text-white text-xs font-bold mb-2">Date of arrival:</label>
                                    <input type="date" name="arriving" id="arrivingdate" class="appearance-none block w-full bg-gray-200 text-black border border-yellow-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required>
                                </div>
                                <div class="w-full md:w-1/2 px-3">

                                    <label for="leavingdate" class="block uppercase tracking-wide text-white text-xs font-bold mb-2">Date of departure:</label>
                                    <input type="date" name="leaving" id="leavingdate" class="appearance-none block w-full bg-gray-200 text-black border border-yellow-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required>

                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label for="number_of_guests" class="block uppercase tracking-wide text-white text-xs font-bold mb-2">Number of guests</label>
                            <input type="number" name="number_of_guests" id="number_of_guests" placeholder="Number of guests" class="appearance-none block w-full bg-gray-200 text-black border border-yellow-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required>
                                </div>
                            </div>
                            <input type="submit" onclick='gotowhatsapp()' name="submit" id="submit" class="rounded-md px-3.5 py-2.5 text-sm font-semibold shadow-sm bg-yellow-300 text-gray-900 hover:bg-yellow-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">
                        </form>
                    </div>

                    <div
                        class="shadow-sm ring-1 ring-gray-900/5 sm:mx-0 sm:rounded-lg sm:px-6 lg:px-8 lg:col-span-2 lg:row-span-2 lg:row-end-2 ">
                        <p>{!! $villa->description !!}</p>


                        <h3 class="block uppercase tracking-wide text-white font-bold mb-2 py-8">Included amenities</h3>
                        <div class="mx-auto max-w-7xl">

                            <div>
                                <ul role="list"
                                    class="mt-3 grid grid-cols-1 gap-5 sm:grid-cols-2 sm:gap-6 lg:grid-cols-4">
                                    @foreach ($villa->amenities as $amenity)
                                        <li class="col-span-1 flex rounded-md shadow-sm">
                                            <div
                                                class="flex w-16 flex-shrink-0 items-center justify-center  rounded-l-md text-sm font-medium text-white">
                                                <x-icon name="{{ $amenity->icon }}" width="20" />

                                            </div>
                                            <div class="flex flex-1 items-center justify-between truncate rounded-r-md">
                                                {{ $amenity->name }}

                                            </div>
                                        </li>
                                    @endforeach

                                    @foreach ($villa->facilities as $facility)
                                        <li class="col-span-1 flex rounded-md shadow-sm">
                                            <div
                                                class="flex w-16 flex-shrink-0 items-center justify-center  rounded-l-md text-sm font-medium text-white">
                                                <x-icon name="{{ $facility->icon }}" width="20" />

                                            </div>
                                            <div class="flex flex-1 items-center justify-between truncate rounded-r-md">
                                                {{ $facility->name }}

                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>

                        </div>

                        <h3 class="block uppercase tracking-wide text-white font-bold mb-2 py-8">Look at the villa with details</h3>

                        <div class="spotlight-group">
                            <a class="spotlight" href="{{ asset('storage/' . $villa->main_image) }}" data-play="true">
                                <div class="group relative">

                                <img src="{{ asset('storage/' . $villa->main_image) }}">
                                <div
                                class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-gray-200 opacity-0 group-hover:h-full group-hover:opacity-100 duration-500">
                                <h1 class="text-2xl text-black">Open Gallery</h1>
                            </div>
                                </div>
                            </a>

                        <div class="flex">
                            @foreach ($villa->images as $image)
                                <a class="spotlight mr-2 mt-2" href="{{ asset('storage/' . $image['image']) }}"
                                    data-title="{{ $image['title'] }}" data-description="{{ $image['description'] }}"
                                    data-play="true">
                                    <img src="{{ asset('storage/' . $image['image']) }}" width="160"
                                        alt="{{ $image['description'] }}">
                                </a>
                            @endforeach
                        </div>
                    </div>

                        <div id='map' style='width: full; height: 300px;margin-top: 15px'></div>
                    </div>
                </div>


            </div>
            </div>
        </section>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" src="{{ URL::asset('js/spotlight.bundle.js') }}" defer></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet"
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">
    <script>
        mapboxgl.accessToken =
            'pk.eyJ1IjoibmVvemVyb3NlZXIiLCJhIjoiY2xodWRwd3pjMDVyMjNtbWI4M29wYWRwNiJ9.j0kwH1vw-JkeRS651WxTAg';

        var map = new mapboxgl.Map({
            container: 'map',
            center: [{{ $villa->longitude }}, {{ $villa->latitude }}],
            zoom: 15,
            style: 'mapbox://styles/mapbox/streets-v11'
        });

        const marker = new mapboxgl.Marker()
            .setLngLat([{{ $villa->longitude }}, {{ $villa->latitude }}])
            .addTo(map);
        map.addControl(
            new MapboxGeocoder({
                accessToken: mapboxgl.accessToken,
                mapboxgl: mapboxgl
            })
        );

        map.addControl(new mapboxgl.NavigationControl());
    </script>
    <script>
        function gotowhatsapp() {

            var arriving = document.getElementById("arrivingdate").value;
            var leaving = document.getElementById("leavingdate").value;
            var number_of_guests = document.getElementById("number_of_guests").value;

            var url =
                "https://api.whatsapp.com/send?phone=213540000688&text=Hello i'am interested in booking your villa %0a" +
                "Arriving: " + arriving + "%0a" +
                "Leaving: " + leaving + "%0a" +
                "Number of guests: " + number_of_guests + "%0a";

            window.open(url, '_blank').focus();
        }
    </script>
@endsection
