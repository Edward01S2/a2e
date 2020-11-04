<div class="{{ $block->classes }}">
  {{-- @dump($blog)
  @dump($studies) --}}
  <div class="container px-4 mx-auto my-12 sm:px-6 lg:px-8 md:my-16 lg:my-24">
    <div class="md:flex md:items-center md:space-x-12 lg:space-x-16 xl:max-w-5xl xl:mx-auto 2xl:max-w-7xl">
      <h2 class="mb-4 text-4xl font-bold font-poppins md:mb-0 lg:text-5xl xl:text-6xl">{!! $b_title !!}</h2>
      <div class="prose text-black lg:prose-lg max-w-none">
        {!! $b_content !!}
      </div>
    </div>
  </div>
  <div class="blog-container">
    <div class="relative blog-slider swiper-container">
      <div class="swiper-wrapper">
        @php($counter = 0) @endphp
        @foreach($blog as $post)
          @if($loop->index % 5 == 0 )
            <div class="grid md:bg-black md:bg-opacity-50 grid-col-1 swiper-slide blog-grid gap-y-4 md:grid-cols-8 md:gap-y-0 md:grid-rows-5">
          @endif
            <a class="relative w-full overflow-hidden item group" href="{!! $post['link'] !!}">
              <div class="relative z-20 p-6 text-white title lg:p-8 xl:p-16">
                <div class="mb-6 text-xl md:text-2xl lg:text-3xl xl:text-4xl md:w-56 lg:w-64 xl:w-80">{!! $post['title'] !!}</div>
                <div class="inline-block text-sm font-bold tracking-wide xl:text-base group-hover:text-c-yellow-100 group-hover:border-c-yellow-100">Read More</div>
              </div>
              <div class="">
                <div class="absolute inset-0 z-10 w-full h-full bg-black opacity-50"></div>
                <img class="absolute inset-0 z-0 object-cover object-center w-full h-full transition duration-700 transform group-hover:scale-110" src="{!! $post['image'] !!}" alt="">
              </div>
            </a>
            @php($counter++) @endphp
          @if($loop->iteration % 5 == 0 )
            </div>
          @endif
        @endforeach
        @if($counter % 5 != 0)
          </div>
        @endif
      </div>
      
    </div>

    <div class="flex items-center justify-center py-12 border-b md:py-12 lg:py-16 border-c-gray-600 2xl:py-24">
      <div class="flex items-center space-x-4">
        <div class="p-2 -ml-px transition duration-150 border rounded-full cursor-pointer border-c-gray-600 blog-swiper-prev hover:bg-opacity-50">
          <svg class="w-4 h-4 stroke-current text-c-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </div>
        <div class="blog-swiper-pagination"></div>
        <div class="p-2 -mr-px transition duration-150 border rounded-full cursor-pointer border-c-gray-600 blog-swiper-next hover:bg-opacity-50">
          <svg class="w-4 h-4 stroke-current text-c-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </div>
      </div>
    </div>

  </div>

  @if($studies)
  <div class="container px-4 mx-auto my-12 study-title sm:px-6 lg:px-8 md:my-16 lg:my-24">
    <div class="md:flex md:items-center md:space-x-12 lg:space-x-16 xl:max-w-5xl xl:mx-auto 2xl:max-w-7xl">
      <h2 class="mb-4 text-4xl font-bold font-poppins md:mb-0 lg:text-5xl xl:text-6xl">{!! $s_title !!}</h2>
      <div class="prose text-black lg:prose-lg max-w-none">
        {!! $s_content !!}
      </div>
    </div>
  </div>

  <div class="study-container">
    <div class="relative study-slider swiper-container">
      <div class="swiper-wrapper">
        @php
          $counter = 0;
          $row = 1;
        @endphp
        @foreach($studies as $post)
          @if($loop->index % 6 == 0 )
            <div class="grid grid-col-1 swiper-slide study-grid gap-y-4 md:flex md:flex-col md:gap-y-0 md:space-y-6 lg:space-y-8 2xl:space-y-12">
          @endif
          @if($loop->index % 3 == 0 )
            <div class="grid study-row study-row-{!! $row !!} grid-col-1 gap-y-4 md:grid-cols-3 md:gap-6 lg:gap-8 2xl:gap-12">
              @php 
                $row++;
              @endphp
          @endif
            <a class="relative block w-full overflow-hidden item md:pb-full group" href="{!! $post['link'] !!}">
              <div class="relative z-20 h-full p-6 text-white text-container lg:p-8 xl:p-16 md:absolute md:w-full md:h-full">
                <div class="relative z-20">
                  <div class="w-48 mb-6 text-xl break-words title lg:text-3xl lg:w-44 xl:text-4xl xl:w-64 2xl:w-72">{!! $post['title'] !!}</div>
                  <div class="inline-block text-sm font-bold tracking-wide xl:text-base group-hover:text-c-yellow-100 group-hover:border-c-yellow-100">Read More</div>
                </div>
              </div>
              
              <div class="absolute inset-0 z-10 w-full h-full bg-black opacity-50"></div>
              <img class="absolute inset-0 z-0 object-cover object-center w-full h-full transition duration-700 transform group-hover:scale-110" src="{!! $post['image'] !!}" alt="">


            </a>
            @php($counter++) @endphp
          @if($loop->iteration % 3 == 0 )
            </div>
          @endif
          @if($loop->iteration % 6 == 0 )
            </div>
          @endif
        @endforeach
        @if($counter % 3 != 0)
          </div>
        @endif
        @if($counter % 6 != 0)
          </div>
        @endif
      </div>
      
    </div>

  </div>

  <div class="flex items-center justify-center py-12 border-b md:py-12 lg:py-16 border-c-gray-600 2xl:py-24">
    <div class="flex items-center space-x-4">
      <div class="p-2 -ml-px transition duration-150 border rounded-full cursor-pointer border-c-gray-600 study-swiper-prev hover:bg-opacity-50">
        <svg class="w-4 h-4 stroke-current text-c-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </div>
      <div class="study-swiper-pagination"></div>
      <div class="p-2 -mr-px transition duration-150 border rounded-full cursor-pointer border-c-gray-600 study-swiper-next hover:bg-opacity-50">
        <svg class="w-4 h-4 stroke-current text-c-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </div>
    </div>
  </div>

  @endif

  <div>
    <InnerBlocks />
  </div>
</div>
