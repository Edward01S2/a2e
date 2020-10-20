<div id="clients" class="{{ $block->classes }} relative z-20 section">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="relative flex flex-col px-12 py-16 logo-grid md:py-20 lg:py-24 xl:py-32">
      <div class="client-slider">
        <div class="swiper-wrapper">
          @php
            $counter = 0; 
            $row = 1;
          @endphp
          @foreach($companies as $item)
            @if($loop->index % 3 == 0 )
              <div class="grid grid-cols-1 swiper-slide gap-y-12 logo-row logo-row-{!! $row !!} md:grid-cols-3 md:gap-y-0 md:gap-x-12">
                @php
                  $row++;
                @endphp
            @endif
            <a class="" href="{!! $item['url'] !!}" target="_blank">
              <div class="w-full h-full md:flex md:items-center">
                <img class="object-contain object-center w-40 mx-auto xl:w-48" src="{!! $item['logo']['url'] !!}" alt="">
              </div>
            </a>
            @php $counter++ @endphp
            @if($loop->iteration % 3 == 0 )
            </div>
            @endif
          @endforeach
          @if($counter % 3 != 0)
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
