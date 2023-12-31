<?php include 'cek_login.php'; ?>
<?php include 'aksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include('koneksi.php'); ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VANTA | Admin</title>

    <!-- Head -->
    <?php include 'head.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed dark-mode">
    <div class="wrapper">

        <!-- Preloader -->
        <?php include 'preloader.php'; ?>

        <!-- Navbar -->
        <?php include 'navbar.php'; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include 'sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Admin</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Admin</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <section class="content">

                <!-- Tabel Users -->
                <!-- <?php include 't_users.php'; ?> -->
                <!-- <?php include 'e_users.php'; ?> -->
                <!-- <?php include 'add_users.php'; ?> -->

                <!-- Tabel Admin -->
                <?php include 't_admin.php'; ?>
                <?php include 'e_admin.php'; ?>
                <?php include 'add_admin.php'; ?>

            </section>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="https://vantatranslation.site">VANTA Translation</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- Scripts -->
    <?php include 'script.php'; ?>
</body>

</html>