<div class="{{ $block->classes }}">
  <div class="relative w-full h-auto md:bg-center md:bg-no-repeat md:bg-cover md:h-84 lg:h-104 xl:h-120 2xl:h-124 2xl:bg-fixed" style="background-image: url({!! $image !!});">
    <img class="w-full h-auto md:hidden" src="{!! $image !!}" alt="">
  </div>
  <div>
    <InnerBlocks />
  </div>
</div>
