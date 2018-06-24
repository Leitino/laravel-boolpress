<header>
  <div class="header_container">
    @yield('header')
    <div class="amministrazione">
      <a href="{{route('add')}}"><h4>Amministrazione</h4></a>
      <a href="{{route('home')}}"><h4>Home</h4></a>
    </div>
  </div>
</header>
