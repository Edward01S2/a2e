<div id="contact" class="{{ $block->classes }} relative section parallax">
  <div class="container relative z-20 px-4 mx-auto sm:px-6 lg:px-8">
    <div class="py-20 md:py-12 md:flex md:items-center md:space-x-12 md:space-x-reverse md:justify-center lg:space-x-16 lg:space-x-reverse lg:py-20 xl:space-x-20 xl:space-x-reverse xl:py-16 2xl:py-24">
      <div class="text-center md:order-2 md:text-left">
        <h2 class="mb-8 text-4xl font-bold text-white font-poppins lg:text-5xl xl:text-6xl">{!! $title !!}</h2>
        <div class="md:text-center">
          <a class="inline-block px-8 py-2 text-white border border-white rounded-full hover:bg-white hover:text-c-blue-300" href="{!! $link['url'] !!}">{!! $link['title'] !!}</a>
        </div>
      </div>
      <div class="absolute top-0 bottom-0 left-0 flex items-center mt-2 ml-4 md:relative md:order-1 md:m-0">
        <div class="font-bold text-white opacity-50 font-poppins slashes md:opacity-100">//</div>
      </div>
    </div>
  </div>

  <div class="absolute inset-0 z-10 w-full h-full opacity-75 bg-c-blue-300"></div>
  <div class="absolute inset-0 z-0 w-full h-full bg-fixed bg-center bg-no-repeat bg-cover bg-c-blue-300" style="background-image: url('{!! $bg['url'] !!}');"></div>

  <div>
    <InnerBlocks />
  </div>
</div>

