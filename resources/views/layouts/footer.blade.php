<footer class="bg-[#0D0D0D] border-t border-yellow-300">
    <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
        <div class="flex justify-center space-x-6 md:order-2">
          @foreach ($contactSettings->social_media_links as $link)

            <a href="{{ $link['url'] }}" target="_blank" class="text-gray-400 hover:text-gray-500">
              <x-icon name="{{ $link['icon'] }}" width="20" />
            </a>
          @endforeach

        </div>
        <div class="mt-8 md:order-1 md:mt-0">
            <p class="text-center text-xs leading-5 text-gray-500">© {{ Carbon\Carbon::now()->format('Y') }}
                {{ $seoSettings->site_title }}. All rights reserved.</p>
        </div>
    </div>
</footer>
