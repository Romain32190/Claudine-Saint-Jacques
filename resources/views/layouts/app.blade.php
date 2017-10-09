<!DOCTYPE html>
<html lang="fr">
  @include('layouts.head')

    <body id="app-layout">
      @include('layouts.navbar')
      <div style="height: 85vh;">
      <div data-drop-target="true"></div>
        @yield('content')
        @yield('luggage')
      </div>
      


    <!-- JavaScripts -->
    @include('layouts.footer')
  </body>
  
</html>
