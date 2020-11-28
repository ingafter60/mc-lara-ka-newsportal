<!DOCTYPE html>
<html>
   <head>
      @include('front.layouts.shared.head')
   </head>
   <body id="page-top" data-spy="scroll" data-target=".navbar">
      <div id="main-wrapper">
         <!-- Page Preloader -->
         <div id="preloader">
            <div id="status">
               <div class="status-mes"></div>
            </div>
         </div>
         <!-- preloader -->
         <!-- Uc-mobile-menu -->
         <div class="uc-mobile-menu-pusher">
            
            <!-- Content-wrapper -->
            <div class="content-wrapper">

               <!-- Header -->
               @include('front.layouts.shared.header')

               <!-- MAIN CONTENT -->
               @yield('content')

               <!-- Subscriber Section -->
               @include('front.layouts.shared.subscriber')

               <!-- Footer Section -->
               @include('front.layouts.shared.footer')

            </div>
            <!-- End Content-wrapper -->
         </div>
         <!-- End Uc-mobile-menu -->

         <!-- .uc-mobile-menu -->
         @include('front.layouts.shared.mobile-menu')
      </div>
      <!-- #main-wrapper -->
      <!-- Scripts-->
      @include('front.layouts.shared.scripts')
   </body>
</html>
