  <div class="bg-[{{ $websiteSettings->bg_secondary_color }}]">
    
    <header x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-[#0d0d0d] ">
      <nav class="mx-auto flex max-w-7xl items-center justify-between p-4 lg:px-8" aria-label="Global">
        <a href="{{ route('home')}}" class="-m-1.5 p-1.5">
          <span class="sr-only">{{$seoSettings->site_title}}</span>
          <img class="h-8 w-auto" src="{{ asset('storage/'.$seoSettings->logo_url) }}" alt="{{$seoSettings->site_title}}">
        </a>
        <div class="flex lg:hidden">
          <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white" @click="open = true">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
  </svg>
          </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-8 items-center">
          <a href="{{route('home')}}" class="text-sm font-semibold leading-6 text-white rounded-lg px-3 py-2 hover:bg-black transition-colors">Home</a>
          <a href="{{ route('villas.show', ['slug' => $villaSlug]) }}" class="text-sm font-semibold leading-6 text-white rounded-lg px-3 py-2 hover:bg-black transition-colors">{{ $villaName }}</a>
          <a href="{{ route('contact') }}" class="text-sm font-semibold leading-6 text-white rounded-lg px-3 py-2 hover:bg-black transition-colors">Contact</a>
          
        </div>
      </nav>
      <div class="lg:hidden" x-ref="dialog" x-show="open" aria-modal="true">
        <div class="fixed inset-0 z-30"></div>
        <div class="fixed inset-y-0 right-0 z-30 w-full overflow-y-auto bg-[#0d0d0d] px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10" @click.away="open = false">
          <div class="flex items-center justify-between">
            <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
              <span class="sr-only">{{$seoSettings->site_title}}</span>
              <img class="h-8 w-auto" src="{{ asset('storage/'.$seoSettings->logo_url) }}" alt="{{$seoSettings->site_title}}">
            </a>
            <button type="button" class="-m-2.5 rounded-md p-2.5 text-white" @click="open = false">
              <span class="sr-only">Close menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
  </svg>
            </button>
          </div>
          <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
              <div class="space-y-2 py-6">
                <a href="{{route('home')}}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-900">Home</a>
                <a href="{{ route('villas.show', ['slug' => $villaSlug]) }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-900">{{ $villaName }}</a>
                <a href="{{ route('contact')}}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-900">Contact</a>
                
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </header>
  
    </div>