<!DOCTYPE html>
<html lang="fr">
  @include('layouts.head')

    <body id="app-layout">
      @include('layouts.navbar')
      <div style="height: 100vh;">
      <div data-drop-target="true"></div>
        @yield('content')
      </div>
      


    <!-- JavaScripts -->
    @include('layouts.footer')
  </body>
  
</html>
