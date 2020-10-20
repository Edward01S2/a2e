<div class="{{ $block->classes }} bg-c-blue-50">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="py-12 md:py-16 lg:py-20 xl:py-24 xl:pt-20">
      <h2 class="text-4xl font-bold font-poppins lg:text-5xl xl:text-6xl">{!! $title !!}</h2>
      <div class="xl:max-w-6xl xl:mx-auto xl:px-8">
        <div class="relative flex outline-none process-slider swiper-container">
          <div class="swiper-wrapper">
            @foreach($items as $item)
              <div class="py-12 pb-8 md:py-16 md:pb-12 swiper-slide lg:py-20 lg:pb-16">
                <div class="flex flex-col md:flex-row">
                  <div class="mb-12 image md:mb-0 md:w-2/5 lg:w-1/3">
                    @svg($item['image']['url'], 'h-24 w-auto mx-auto md:mr-16 lg:h-28 xl:h-32')
                  </div>
                  <div class="content md:w-3/5 lg:w-2/3">
                    <div class="prose text-c-gray-600 max-w-none lg:prose-lg">
                      {!! $item['content'] !!}
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>

        <div class="flex items-center justify-center md:justify-start md:w-3/5 md:ml-auto lg:w-2/3">
          <div class="flex items-center space-x-4">
            <div class="p-2 -ml-px transition duration-150 border rounded-full cursor-pointer border-c-gray-600 process-swiper-prev hover:bg-opacity-50">
              <svg class="w-4 h-4 stroke-current text-c-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
            </div>
            <div class="process-swiper-pagination"></div>
            <div class="p-2 -mr-px transition duration-150 border rounded-full cursor-pointer border-c-gray-600 process-swiper-next hover:bg-opacity-50">
              <svg class="w-4 h-4 stroke-current text-c-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
