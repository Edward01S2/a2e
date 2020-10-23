<div id="services" class="{{ $block->classes }} section">
  <div class="pt-16 md:pt-20 lg:pt-24">
    <div class="text-center">
      <h2 class="text-4xl font-bold font-poppins lg:text-5xl xl:text-6xl">{!! $title !!}</h2>
    </div>

    <div class="service-items">
      @foreach($items as $item)
        <div class="py-16 border-b service-item service-item-{!! $loop->iteration !!} border-c-gray-400 md:py-20 lg:py-24 xl:py-24">
          <div class="container px-4 mx-auto sm:px-6 lg:px-8 xl:max-w-6xl" x-data="{open: false}">
            <div class="flex flex-col md:flex-row">
              <div class="mb-12 image md:mb-0 md:w-2/5 lg:w-1/3">
                <div class="relative">
                  @if($item['image']['url'])
                    @svg($item['image']['url'], 'svg-number stroke-current text-c-blue-500 h-36 w-auto mx-auto relative md:ml-0 lg:h-40 xl:h-48')
                  @endif
                </div>
              </div>
              <div class="content md:w-3/5 lg:w-2/3">
                <div class="prose text-c-gray-600 max-w-none lg:prose-lg">
                  {!! $item['content'] !!}
                </div>
                @if($item['hidden'])
                  <div class="mt-8 text-center md:text-left" x-cloak>
                    <button @click="open = !open" x-show="!open" class="inline-block px-6 py-3 tracking-wider rounded-full bg-c-yellow-100 text-c-blue-500 focus:outline-none">{!! $link !!}</button>
                  </div>
                  <div x-show="open" class="overflow-hidden prose text-c-gray-600 max-w-none lg:prose-lg">
                    {!! $item['hidden'] !!}
                  </div>
                @endif
              </div>
            </div>

            <div class="mt-8 text-center open" x-show="open" x-cloak>
              <button @click="open = !open" class="p-2 rounded-full bg-c-yellow-100 focus:outline-none">
                <svg class="w-6 h-6 stroke-current text-c-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                </svg>
              </button>
            </div>

          </div>
        </div>
      @endforeach
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
