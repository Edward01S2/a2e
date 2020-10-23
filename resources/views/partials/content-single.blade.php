<article @php(post_class())>
  <div class="container px-4 pt-8 mx-auto sm:px-6 lg:px-8 lg:pt-12">
    <div>
      <a href="/blog" class="inline-flex items-center mb-4 text-sm font-bold tracking-widest uppercase font-proxima text-c-gray-600 md:mb-8 lg:mb-12 xl:text-base xl:mb-16">
        <svg class="w-5 h-5 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
        </svg>
        <span class="ml-2">Back to Main</span>
      </a>  
    </div>
    <header class="md:pl-10 lg:pl-16 xl:pl-24">
      <h1 class="mb-8 text-3xl font-bold entry-title font-poppins text-c-blue-500 lg:mb-12 lg:text-4xl xl:text-5xl xl:mb-16">
        /{!! $title !!}
      </h1>
    </header>
  </div>

  <div class="mb-8 blog-image lg:mb-12">
      <img class="w-full h-auto" src="{!! get_the_post_thumbnail_url() !!}" alt="">
  </div>

  <div class="container px-4 pb-16 mx-auto entry-content sm:px-6 lg:px-8 lg:pb-32 xl:pb-40">
    <div class="prose max-w-none lg:prose-lg md:pl-10 lg:pl-16 xl:pl-24">
      @php(the_content())
    </div>
  </div>


  <div class="posts-bg-gradient">
    <div class="container px-4 pb-16 mx-auto sm:px-6 lg:px-8">
      <h3 class="mb-8 text-2xl font-medium font-poppins text-c-blue-500">Next Up</h3>

      <div>

        <div class="relative flex posts-slider swiper-container">
          <div class="swiper-wrapper">
            @foreach($posts as $post)
              <div class="swiper-slide">
                <a class="relative block w-full h-full mb-4" href="{!! $post['link'] !!}">
                  <img class="relative z-0 object-cover object-center w-full" src="{!! $post['image'] !!}" alt="">
                  <div class="absolute inset-0 z-10 w-full h-full bg-black opacity-25"></div>
                </a>
                <a href="{!! $post['link'] !!}">
                  <div class="text-xl font-medium font-poppins md:w-3/4 lg:w-4/5">{!! $post['title'] !!}</div>  
                </a>
              </div>
            @endforeach
          </div>
        </div>
        
        <div class="flex items-center justify-center mt-4">
          <div class="flex items-center space-x-4">
            <div class="p-2 -ml-px transition duration-150 border rounded-full cursor-pointer border-c-gray-600 posts-swiper-prev hover:bg-opacity-50">
              <svg class="w-4 h-4 stroke-current text-c-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
            </div>
            <div class="posts-swiper-pagination"></div>
            <div class="p-2 -mr-px transition duration-150 border rounded-full cursor-pointer border-c-gray-600 posts-swiper-next hover:bg-opacity-50">
              <svg class="w-4 h-4 stroke-current text-c-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </div>
          </div>
        </div>
        
      </div>
      
    </div>
  </div>

</article>
