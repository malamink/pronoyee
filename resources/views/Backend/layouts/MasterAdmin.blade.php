<!DOCTYPE html>
<html lang="en"> 
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>@yield('title') </title>
        @include('Backend.layouts.Partial.adminStyle')
    </head>
    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
        @include('Backend.layouts.Partial.AdminLeft')
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    @include('Backend.layouts.Partial.Navbar')
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
                <!-- Footer -->
                @include('Backend.layouts.Partial.footer')
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- @include('Backend.layouts.Partial.LogOutModal') -->
        @include('Backend.layouts.Partial.adminScript')
    </body>
</html>