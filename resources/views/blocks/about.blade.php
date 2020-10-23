<div id="about" class="{{ $block->classes }} bg-c-blue-50 section">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="py-16 md:py-20 lg:py-20 xl:py-28 2xl:py-32">
      <h2 class="mb-4 text-4xl font-bold font-poppins md:mb-12 lg:text-5xl xl:text-6xl">{!! $title !!}</h2>
      <div class="md:max-w-xl md:ml-auto lg:max-w-3xl xl:max-w-4xl 2xl:max-w-6xl">
        <div class="relative flex outline-none about-slider swiper-container">
          <div class="swiper-wrapper">
            @foreach($items as $item)
              <div class="swiper-slide" data-subtitle="{!! $item['subtitle'] !!}">
                <div class="pb-8 prose max-w-none text-c-blue-500 lg:prose-lg lg:max-w-xl lg:pb-12 xl:max-w-2xl 2xl:max-w-3xl xl:pb-16">
                  {!! $item['content'] !!}
                </div>
              </div>
            @endforeach
          </div>

        </div>

        <div class="flex items-center justify-between">
          <div class="flex items-center space-x-4">
            <div class="p-2 -ml-px transition duration-150 border rounded-full cursor-pointer border-c-gray-600 swiper-prev hover:bg-opacity-50">
              <svg class="w-4 h-4 stroke-current text-c-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
            </div>
            <div class="swiper-pagination"></div>
            <div class="p-2 -mr-px transition duration-150 border rounded-full cursor-pointer border-c-gray-600 swiper-next hover:bg-opacity-50">
              <svg class="w-4 h-4 stroke-current text-c-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </div>
          </div>
          <div class="font-bold tracking-widest uppercase subtitle-container text-c-gray-500 xl:text-lg">
            <span class="slide-subtitle">{!! $items[0]['subtitle'] !!}</span><span class="italic"> //</span>
          </div>
        </div>

      </div>

    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
