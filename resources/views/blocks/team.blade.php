<div id="team" class="{{ $block->classes }} bg-c-blue-500 section">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="py-16 text-white md:py-20 lg:py-24 lg:pb-32">
      <div class="mb-12 text-center md:mb-16 lg:mb-24">
        <h2 class="mb-4 text-4xl font-bold text-white font-poppins lg:text-5xl xl:text-6xl lg:mb-8">{!! $title !!}</h2>
        <div class="text-lg xl:max-w-6xl xl:mx-auto">{!! $subtext !!}</div>
      </div>
      <div class="flex flex-col space-y-12 md:space-y-20 lg:space-y-24 2xl:max-w-7xl xl:mx-auto xl:space-y-40">
        @foreach($items as $item)
          <div class="flex flex-col team-item md:flex-row md:space-x-12 xl:space-x-32">
            <div class="mb-8 team-image md:mb-0 md:w-1/3 xl:w-2/5">
              <img class="w-full h-auto" src="{!! $item['image']['url'] !!}" alt="">
            </div>
            <div class="team-content md:w-2/3 lg:flex lg:items-center xl:w-3/5">
              <div>
                <h4 class="mb-2 text-2xl font-bold font-poppins lg:text-3xl lg:mb-4">{!! $item['name'] !!}</h4>
                <div class="mb-4 prose text-white lg:prose-lg max-w-none xl:mb-8">{!! $item['content'] !!}</div>
                <div class="flex items-center space-x-4">
                  <a href="{!! $item['linkedin'] !!}" class="transform hover:scale-110">
                    <svg class="w-6 h-6 fill-current text-c-yellow-100 xl:w-8 xl:h-8" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn icon</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                  </a>
                  <a href="{!! $item['twitter'] !!}" class="transform hover:scale-110">
                    <svg class="w-6 h-6 fill-current text-c-yellow-100 xl:w-8 xl:h-8" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter icon</title><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
