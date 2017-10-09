<!DOCTYPE html>
<html lang="fr">
  @include('layouts.head')

    <body id="app-layout">
      @include('layouts.navbar')

      <div class="container" style="height: 100vh;">
        @yield('content')
        @yield('luggage')
      </div>


    <!-- JavaScripts -->
    @include('layouts.footer')
  </body>
</html>
