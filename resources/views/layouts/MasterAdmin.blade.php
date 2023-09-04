<!DOCTYPE html>
<html lang="en"> 
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Pronoyee admin panel</title>
        @include('layouts._adminLink')
    </head>
    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
        @include('layouts.Partial.AdminLeft')
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    @include('layouts.Partial.Navbar')
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
                <!-- Footer -->
                @include('layouts.Partial.footer')
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        @include('layouts.Partial.LogOutModal')
        @include('layouts.Partial.adminScript')
    </body>
</html>