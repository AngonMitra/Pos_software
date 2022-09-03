
<!DOCTYPE html>
<html lang="en">
  <head>
   @extends('backend.layouts_include.head')
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    @extends('backend.layouts_include.leftbar')
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @extends('backend.layouts_include.header')
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
  @extends('backend.layouts_include.rightbar')
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
   
    @yield('content')
   
    <!-- ########## END: MAIN PANEL ########## -->

    @extends('backend.layouts_include.script')
  </body>
</html>
