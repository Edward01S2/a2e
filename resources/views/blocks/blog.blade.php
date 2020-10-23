<div id="blog" class="{{ $block->classes }} section">
  <div class="container px-4 py-16 mx-auto sm:px-6 lg:px-8 lg:py-24 xl:py-28">
    <div class="mb-16 md:mb-20 lg:mb-24 xl:mb-28">
      <a class="inline-flex items-center mb-8 text-lg font-bold tracking-widest uppercase font-proxima text-c-gray-600 lg:text-xl xl:text-2xl xl:mb-12 hover:text-c-yellow-100" href="{!! $blog['url'] !!}">
        <span class="mr-2">{!! $blog['title'] !!}</span>
        <svg class="w-5 h-5 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
        </svg>
      </a>
      <div class="grid grid-rows-3 blog-grid gap-y-4 md:grid-cols-2 md:gap-y-0 md:grid-rows-3">
        @foreach($posts as $post)
          <a class="relative w-full overflow-hidden item pb-1/2 md:pb-0 group" href="{!! $post['link'] !!}">
            <div class="relative z-20 p-6 text-white title lg:p-8 xl:p-12">
              <div class="mb-6 text-xl xl:text-2xl">{!! $post['title'] !!}</div>
              <div class="inline-block text-sm font-bold xl:text-base group-hover:text-c-yellow-100 group-hover:border-c-yellow-100">Read More</div>
            </div>
            <div class="w-full h-full overflow-hidden">
              <div class="absolute inset-0 z-10 w-full h-full bg-black opacity-50"></div>
              <img class="absolute inset-0 z-0 object-cover object-center w-full h-full transition duration-700 transform group-hover:scale-110" src="{!! $post['image'] !!}" alt="">
            </div>
          </a>
        @endforeach
      </div>
    </div>

    <div class="">
      <a class="inline-flex items-center mb-8 text-lg font-bold tracking-widest uppercase font-proxima text-c-gray-600 lg:text-xl xl:text-2xl xl:mb-12 hover:text-c-yellow-100" href="{!! $studies['url'] !!}">
        <span class="mr-2">{!! $studies['title'] !!}</span>
        <svg class="w-5 h-5 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
        </svg>
      </a>
      <div class="grid grid-rows-3 gap-y-4 md:gap-y-0 md:grid-rows-none md:grid-cols-3 md:gap-x-6 lg:gap-x-8">
        @foreach($study as $post)
          <a class="relative w-full overflow-hidden pb-1/2 group" href="{!! $post['link'] !!}">
            <div class="relative z-20 p-6 text-white lg:p-8 xl:p-12">
              <div class="mb-6 text-xl xl:text-2xl">{!! $post['title'] !!}</div>
              <div class="inline-block text-sm font-bold xl:text-base group-hover:text-c-yellow-100 group-hover:border-c-yellow-100">Read More</div>
            </div>
            <div class="w-full h-full">
              <div class="absolute inset-0 z-10 w-full h-full bg-black opacity-50"></div>
              <img class="absolute inset-0 z-0 object-cover object-center w-full h-full transition duration-700 transform group-hover:scale-110" src="{!! $post['image'] !!}" alt="">
            </div>
          </a>
        @endforeach
      </div>
    </div>

  </div>
  <div>
    <InnerBlocks />
  </div>
</div>
