@include('partials.header')

<div class="pt-16 lg:pt-20">
  <main class="main">
    @yield('content')
  </main>

  {{-- @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif --}}
</div>

@include('partials.footer')
