<div id="investment" class="{{ $block->classes }} relative section">
  <div class="absolute top-0 bottom-0 left-0 z-0 hidden w-1/2 bg-c-blue-100"></div>
  <div class="absolute top-0 bottom-0 right-0 z-0 hidden w-1/2 bg-c-blue-200"></div>
  <div class="slide-container">

    <div class="relative flex outline-none strategy-slider swiper-container bg-c-blue-100">
      <div class="swiper-wrapper">
        @foreach($items as $item)
          <div class="py-12 pb-20 sm:px-0 md:py-16 md:pb-24 swiper-slide lg:py-20 lg:pb-28 md:h-auto xl:py-24 xl:pb-32">
            <div class="container flex flex-col px-4 sm:px-6 lg:px-8 md:mx-auto md:flex-row">
              <div class="content md:w-3/5">
                <h3 class="text-4xl font-bold leading-9 text-white font-poppins md:text-5xl xl:text-6xl">{!! $item['title'] !!}</h3>
                @if($item['subtitle'])
                  <div class="mt-4 text-2xl font-bold text-white font-poppins md:text-3xl md:mt-8">{!! $item['subtitle'] !!}</div>
                @endif
                <div class="pb-8 mt-4 prose text-white max-w-none lg:prose-lg md:mt-8">
                  {!! $item['content'] !!}
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <div class="absolute bottom-0 left-0 right-0 flex items-center justify-center mb-12 md:justify-start md:mb-16 xl:mb-24">
        <div class="flex items-center space-x-4 md:container md:mx-auto sm:px-6 lg:px-8">
          <div class="z-30 p-2 -ml-px transition duration-150 border border-white rounded-full cursor-pointer strategy-swiper-prev hover:bg-opacity-50">
            <svg class="w-4 h-4 text-white stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
          </div>
          <div class="z-30 strategy-swiper-pagination"></div>
          <div class="z-30 p-2 -mr-px transition duration-150 border border-white rounded-full cursor-pointer strategy-swiper-next hover:bg-opacity-50">
            <svg class="w-4 h-4 text-white stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </div>
        </div>
      </div>

      <div class="absolute top-0 bottom-0 right-0 z-30 hidden w-1/3 grid-cols-3 md:grid stripe-container">
        <div class="h-full transition duration-200 stripe-1 bg-c-blue-200"></div>
        <div class="h-full transition duration-200 stripe-2 bg-c-blue-300"></div>
        <div class="h-full transition duration-200 stripe-3 bg-c-blue-400"></div>
      </div>

    </div>

  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
