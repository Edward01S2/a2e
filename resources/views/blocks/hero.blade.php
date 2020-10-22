<div id="hero" class="{{ $block->classes }} overflow-hidden">
  <div class="flex flex-col md:flex-row">
    <div class="relative h-48 overflow-hidden md:w-1/2 md:h-auto md:order-2">
      <img class="absolute object-cover object-center w-full h-full" src="{!! $image !!}" alt="">
      <div class="absolute right-0 w-16 h-full -mr-12 transform -skew-x-12 triangle-left bg-c-yellow-100 lg:-mr-16 lg:w-24"></div>
    </div>
    <div class="relative md:w-1/2 md:order-1">
      <div class="container px-4 mx-auto md:ml-auto md:mr-0 md:max-w-384 sm:px-6 lg:px-8 lg:max-w-512 xl:max-w-screen-sm 2xl:max-w-screen-md">
        <div class="relative z-30 py-8 md:py-12 lg:py-24 xl:py-28 2xl:py-40">
          <h1 class="mb-4 text-4xl font-bold font-poppins lg:text-5xl lg:mb-8 xl:text-6xl">{!! $title !!}</h1>
          <div class="prose content max-w-none text-c-gray-600 lg:prose-lg 2xl:max-w-2xl">{!! $content !!}</div>
        </div>
      </div>
      <div class="absolute top-0 bottom-0 right-0 z-20 hidden w-24 h-full -mr-12 transform -skew-x-12 bg-white diagonal md:block lg:w-32 lg:-mr-16"></div>
    </div>
    
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
