<div id="quotes" class="{{ $block->classes }} overflow-hidden">
  <div class="flex flex-col md:flex-row">
    <div class="relative h-64 overflow-hidden md:w-1/2 md:h-auto md:order-1">
      <img class="absolute object-cover object-top w-full h-full" src="{!! $image['url'] !!}" alt="">
      <div class="absolute left-0 w-16 h-full -ml-12 transform skew-x-12 bg-black triangle lg:-ml-16 lg:w-24"></div>
    </div>
    <div class="relative z-30 md:w-1/2 md:order-2 bg-c-blue-50">
      <div class="container relative z-40 px-4 pb-16 mx-auto md:mr-auto md:ml-0 md:max-w-384 sm:px-6 lg:px-8 lg:pb-24 lg:max-w-512 xl:max-w-screen-sm 2xl:max-w-screen-md">
        <div class="relative z-40 quote-slider swiper-container">
          <div class="swiper-wrapper">
            @foreach($quotes as $item)
              <div class="relative z-30 pt-16 pb-8 swiper-slide md:pt-20 lg:py-24 lg:pb-16 xl:py-28 xl:pb-20">
                <h1 class="mb-4 text-2xl font-bold font-poppins xl:text-3xl">{!! $item['company'] !!}</h1>
                <div class="mb-4 prose text-black max-w-none lg:prose-lg 2xl:max-w-2xl">{!! $item['content'] !!}</div>
                <div class="text-sm font-bold font-poppins xl:text-base">{!! $item['name'] !!}</div>
              </div>
            @endforeach
            </div>
        </div>

        <div class="flex items-center justify-center slider-controls md:justify-start md:w-3/5 md:ml-auto lg:w-2/3">
          <div class="flex items-center space-x-4">
            <div class="p-2 -ml-px transition duration-150 border rounded-full cursor-pointer border-c-gray-600 quote-swiper-prev hover:bg-opacity-50">
              <svg class="w-4 h-4 stroke-current text-c-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
            </div>
            <div class="quote-swiper-pagination"></div>
            <div class="p-2 -mr-px transition duration-150 border rounded-full cursor-pointer border-c-gray-600 quote-swiper-next hover:bg-opacity-50">
              <svg class="w-4 h-4 stroke-current text-c-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </div>
          </div>
        </div>

      </div>
      @svg('images.quotes', 'quote-svg h-16 w-16 absolute opacity-50 top-0 mt-6 -ml-2 left-0 z-30 md:mt-20 md:-ml-10 md:h-12 md:w-12 md:opacity-100 lg:mt-32 xl:h-12 xl:w-12 xl:mt-36 2xl:mt-40')
      <div class="absolute top-0 bottom-0 left-0 z-20 hidden w-24 h-full -ml-12 transform skew-x-12 diagonal bg-c-blue-50 md:block lg:w-32 lg:-ml-16"></div>
    </div>
    
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
