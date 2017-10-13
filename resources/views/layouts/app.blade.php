<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  @include('layouts.head')

    <body id="app-layout">
      @include('layouts.navbar')
      <div style="height: 85vh;">
      <!-- <div data-drop-target="true"></div> -->
        @yield('content')
        @yield('luggage')
      </div>



    <!-- JavaScripts -->
    @include('layouts.footer')
    @yield('script')
  </body>

</html>
