<footer class="bg-c-blue-200">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="flex flex-col px-4 py-12 md:py-16 lg:grid lg:grid-cols-3">

      <div class="hidden lg:block">
        <div class="lg:flex lg:items-center">
          <a href="{{ home_url('/') }}" class="hover:opacity-50 lg:mx-auto">
            <img id="logo-main" class="" src="{!! $logo['url'] !!}" alt="{{ $siteName }}" />
          </a>
        </div>
      </div>

      <div class="hidden lg:flex lg:items-center">
        <div class="flex items-center justify-center space-x-8 lg:space-x-10 lg:items-center">
          @foreach ($nav as $item)
            <a class="nav-link tracking-wide leading-5 text-white uppercase group text-sm focus:outline-none transition duration-150 ease-in-out hover:text-c-red-100 lg:text-xs {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}" href="{{ $item->url }}">
              <div class="text-center">{{ $item->label }}</div>
            </a>
          @endforeach
        </div>
      </div>


    </div>
  </div>
</footer>
