<!DOCTYPE html>
<html lang="en">
  @include('layouts.head')

    <body id="app-layout">
      @include('layouts.navbar')

      <div class="container" style="height: 100vh;">
        @yield('content')
      </div>


    <!-- JavaScripts -->
    @include('layouts.footer')
  </body>
</html>
