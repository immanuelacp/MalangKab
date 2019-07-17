<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Malang Marketplace</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="{{asset('css/fontawesome-all.min.css')}}" rel="stylesheet">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"--}}
          {{--rel="stylesheet">--}}

    <!-- Custom styles for this template-->
    <link href="{{asset('css/admin/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/admin/style.css')}}" rel="stylesheet">

</head>

<body id="page-top">


<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content" href="#">
            <div class="sidebar-brand-text mx-2 text-left mt-3"> <h6>Panel Marketplace Malang</h6></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="/admin">
                <i class="fas fa-tachometer-alt "></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-table"></i>
                <span>Data User</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="/adminTempatUsaha">Tempat Usaha</a>
                    <a class="collapse-item" href="#">Kecamatan</a>
                    <a class="collapse-item" href="#">Desa</a>
                    <a class="collapse-item" href="#">Kategori Usaha</a>
                    <a class="collapse-item" href="#">Sub Kategori Usaha</a>
                    <a class="collapse-item" href="#">Kegiatan Usaha</a>
                    <a class="collapse-item" href="#">Status Kepemilikan</a>
                    <a class="collapse-item" href="#">Jenis Investasi</a>
                    <a class="collapse-item" href="#">Jenis Produk</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">


            </nav>
            <!-- End of Topbar -->
            <main class="py-0">
                @yield('content')
            </main>


        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Marketplace Malang 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="js/admin/jquery.min.js"></script>
<script src="js/admin/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="js/admin/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/admin/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="js/admin/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/admin/chart-area-demo.js"></script>
<script src="js/admin/chart-pie-demo.js"></script>

</body>

</html>
