@if($show)
<div class="{{ $block->classes }} bg-c-blue-50">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="py-16 md:py-20 lg:py-24 xl:py-24">
      <h2 class="mb-4 text-4xl font-bold text-center font-poppins md:mb-12 lg:text-5xl xl:text-6xl lg:mb-16 xl:mb-20">{!! $title !!}</h2>

      <div class="2xl:max-w-7xl 2xl:mx-auto">
        <div class="relative flex mb-8 outline-none director-slider swiper-container lg:mb-16 xl:mb-20">
          <div class="swiper-wrapper">
            @foreach($directors as $item)
              <div class="flex flex-col director-item swiper-slide md:mr-8">
                <div class="flex-grow p-8 pb-0 mb-4 md:p-0">
                  <img src="{!! $item['image']['url'] !!}" alt="">
                </div>
                <div class="flex items-end justify-center text-center">
                  <div>
                    <div class="text-lg font-bold font-poppins">{!! $item['name'] !!}</div>
                    <div>{!! $item['title'] !!}</div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>

        <div class="flex items-center justify-center">
          <div class="flex items-center space-x-4">
            <div class="p-2 -ml-px transition duration-150 border rounded-full cursor-pointer border-c-gray-600 director-swiper-prev hover:bg-opacity-50">
              <svg class="w-4 h-4 stroke-current text-c-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
            </div>
            <div class="director-swiper-pagination"></div>
            <div class="p-2 -mr-px transition duration-150 border rounded-full cursor-pointer border-c-gray-600 director-swiper-next hover:bg-opacity-50">
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
@endif
