<div class="{{ $block->classes }} border-b border-c-gray-400">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="flex flex-col py-12 space-y-4 text-center md:space-y-6 md:py-16 headlines lg:space-y-8 lg:py-20 xl:py-24 xl:space-y-12">
      @foreach($headlines as $item)
        <div class="text-4xl headline lg:text-5xl xl:text-6xl">
          {!! $item['headline'] !!}
        </div>
      @endforeach
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
