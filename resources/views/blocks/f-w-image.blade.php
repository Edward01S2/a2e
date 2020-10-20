<div class="{{ $block->classes }}">
  <div class="relative w-full h-64 bg-fixed bg-top bg-cover md:h-84 xl:h-104 2xl:h-124" style="background-image: url({!! $image !!});">
    {{-- <img class="w-full h-auto 2xl:object-cover 2xl:object-top 2xl:bg-fixed" src="{!! $image !!}" alt=""> --}}
  </div>
  <div>
    <InnerBlocks />
  </div>
</div>
