<!DOCTYPE html>
<html lang="en">
  <head>
   @include('layout.cssglobal')
  </head>
  <body>
    
    <!-- ======== sidebar-nav start =========== -->
        @include('layout.sidebar')
       
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
       @include('layout.header')
      <!-- ========== header end ========== -->

      <!-- ========== section start ========== -->
      <section class="section">
      
          @yield('content')
         
      </section>
      <!-- ========== section end ========== -->

      <!-- ========== footer start =========== -->
      @include('layout.footer')
      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
     @include('layout.jsglobal')
  </body>
</html>
