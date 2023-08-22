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

                    <!-- Invoice summary -->
                    <div class="lg:col-start-3 lg:row-end-1">
                        
                    </div>

                    <!-- Invoice -->
                    <div
                        class="-mx-4 shadow-sm ring-1 ring-gray-900/5 sm:mx-0 sm:rounded-lg sm:pb-14 lg:col-span-2 lg:row-span-2 lg:row-end-2 ">
                        <p>{!! $villa->description !!}</p>


                        <h3 class="font-semibold text-xl text-gray-500 leading-6 py-8">Included amenities</h3>
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

                                    @foreach($villa->facilities as $facility)
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

                        <h3 class="font-semibold text-xl text-gray-500 leading-6 py-8">Look at the villa with details</h3>

                        <div class="spotlight-group">
                            <a class="spotlight" href="{{ asset('storage/' . $villa->main_image) }}" data-play="true">
                                <img src="{{ asset('storage/' . $villa->main_image) }}">
                            </a>
                        </div>

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
                        <div id='map' style='width: full; height: 300px;margin-top: 15px'></div>
                    </div>
                </div>


            </div>
            </div>
        </section>
    </section>

    <script type="text/javascript" src="{{ URL::asset('js/spotlight.bundle.js') }}" defer></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">
    <script>

        mapboxgl.accessToken =
            'pk.eyJ1IjoibmVvemVyb3NlZXIiLCJhIjoiY2xodWRwd3pjMDVyMjNtbWI4M29wYWRwNiJ9.j0kwH1vw-JkeRS651WxTAg';
        // Create a new marker.
        
        var map = new mapboxgl.Map({
            container: 'map',
            center: [{{$villa->longitude}}, {{$villa->latitude}}],
            zoom: 15,
            style: 'mapbox://styles/mapbox/streets-v11'
        });

        const marker = new mapboxgl.Marker()
            .setLngLat([{{$villa->longitude}}, {{$villa->latitude}}])
            .addTo(map);
            map.addControl(
new MapboxGeocoder({
accessToken: mapboxgl.accessToken,
mapboxgl: mapboxgl
})
);
            
map.addControl(new mapboxgl.NavigationControl());

    </script>
@endsection
