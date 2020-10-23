<footer class="bg-c-blue-500">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="flex flex-col px-4 py-12 md:py-16">

      <div class="mb-12 md:mb-8">
        <div class="flex items-center justify-center md:justify-start">
          <a href="{{ home_url('/') }}" class="hover:opacity-50">
            <img class="w-auto h-12" src="{!! $logo['url'] !!}" alt="{{ $siteName }}" />
          </a>
        </div>
      </div>

      <div class="text-center text-white">
        <div class="mb-4">{!! $title !!}</div>
        <div class="footer-form text-c-blue-500 md:max-w-lg md:mx-auto xl:max-w-xl">
          @include('partials.form', ['form' => $form])
        </div>
      </div>

      <div class="hidden md:block md:mt-12">
        <div class="flex items-center justify-center space-x-8 footer-nav lg:space-x-10 lg:items-center xl:space-x-12">
          @foreach ($nav as $item)
            <a class="nav-link tracking-wide leading-5 text-white group text-sm focus:outline-none transition duration-150 ease-in-out hover:text-c-yellow-100 {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}" href="{{ $item->url }}">
              <div class="text-center">{{ $item->label }}</div>
            </a>
          @endforeach
        </div>
      </div>

    </div>
  </div>

  <div class="border-t border-c-gray-200">
    <div class="container px-4 py-12 mx-auto sm:px-6 lg:px-8 lg:max-w-3xl">
      <div class="flex flex-col space-y-4 text-xs font-bold tracking-widest text-center uppercase text-c-gray-300 md:flex-row md:justify-between md:space-y-0">
        <div class="copyright">
          <span>&copy; <?php echo esc_attr( date( 'Y' ) ); ?></span>
          {{ $siteName }}
        </div>
        @foreach($items as $item)
          <div>
            {!! $item['item'] !!}
          </div>
        @endforeach
      </div>
    </div>
  </div>
</footer>
