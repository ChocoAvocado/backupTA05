<?php 
	require_once __DIR__.('/../../function.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?= BASEURL; ?>/plugins/datetimepicker/jquery.datetimepicker.min.css" rel="stylesheet" />

    <title>Pinjam Alat - Barang</title>

    <!-- Custom fonts for this template -->
    <link href="<?= BASEURL; ?>/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= BASEURL; ?>/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= BASEURL; ?>/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!--include css js datatable-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="<?= BASEURL; ?>/plugins/DataTables/DataTables-1.11.5/js/jquery.dataTables.min.js"></script>

    <!--tampilan datatable-->
    <link rel="stylesheet" type="text/css"
        href="<?= BASEURL; ?>/plugins/DataTables/DataTables-1.11.5/css/dataTables.bootstrap4.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include __DIR__.('/../templates/topbar.php'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row ">
                        <div class="col-lg-6">
                            <h3 class="text-gray-800">Data Pinjaman</h3>
                        </div>

                    </div>
                    <!-- end of page heading -->


                    <br>

                    <form action="" method="post" enctype="multipart/form-data">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Tabel Peminjaman Barang</h6>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="dataTable" class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>

                                                <th>Check</th>
                                                <th>No-Koin</th>
                                                <th>Jumlah Koin</th>
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th>Barang Pinjam</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <?php
                                            
                                            $ambildatamahasiswa= mysqli_query($conn, "SELECT DISTINCT User_id,User_nama,User_nokoin,User_koin,Pinjam_user_tag FROM user 
                                            LEFT JOIN pinjam ON user.User_tag=pinjam.Pinjam_user_tag 
                                            WHERE User_level_id='3' ORDER BY User_nokoin");                                            

                                            while ($data = mysqli_fetch_array($ambildatamahasiswa)) {

                                                $idmahasiswa    = $data['User_id'];
                                                $namamahasiswa  = $data['User_nama'];
                                                $nokoin         = $data['User_nokoin'];
                                                $jumlahkoin     = $data['User_koin'];

                                                $tagmahasiswa   = $data['Pinjam_user_tag'];
//checkbox diberi value 1 atau 0 dengan name (koin_$idmahasiswa) masih belum bisa kalau dicek uncheck secara manual
                                                if($jumlahkoin == '10'){ 
                                                    $status = 
                                                "<div class='form-check'>
                                                <input class='form-check-input' type='checkbox' value='1' 
                                                    id='flexCheckChecked' name='koin_$idmahasiswa'checked>
                                                <label class='form-check-label' for='flexCheckChecked'>
                                                </label>
                                                </div>";
                                                }else{
                                                    $status = 
                                                "<div class='form-check'>
                                                <input class='form-check-input' type='checkbox' value='0'
                                                    id='flexCheckChecked' name='koin_$idmahasiswa'>
                                                <label class='form-check-label' for='flexCheckChecked'>
                                                </label>
                                                </div>";
                                                }
                                                                                                 
                                            ?>


                                                <td><?= $status; ?></td>
                                                <td><?= $nokoin; ?></td>
                                                <td><?= $jumlahkoin; ?></td>
                                                <td><?= $idmahasiswa; ?></td>
                                                <td><?= $namamahasiswa; ?></td>
                                                <td style="width: 5%;">
                                                    <span>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-toggle="modal" data-target="#view<?= $tagmahasiswa; ?>"
                                                            style="">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-eye"></i>
                                                            </span>
                                                        </button>

                                                    </span>


                                                    <!-- The Modal Table-->

                                                    <div class="modal fade" id="view<?= $tagmahasiswa; ?>">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Data Barang Pinjaman</h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal">&times;</button>
                                                                </div>

                                                                <!-- Modal body -->
                                                                <form method="post">
                                                                    <div class="modal-body">

                                                                        <!-- DataTales Example -->
                                                                        <div class="card shadow mb-4">

                                                                            <div class="card-body">

                                                                                <div class="table-responsive">
                                                                                    <table id="dataTable_0"
                                                                                        class="table table-bordered dataTables_wrapper"
                                                                                        width="100%" cellspacing="0">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>ID Barang</th>
                                                                                                <th>Nama Barang</th>
                                                                                                <th>Nama Lab</th>
                                                                                            </tr>
                                                                                        </thead>

                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <?php
                                                                                                

                                                                                                $ambildatabarang = mysqli_query($conn, "SELECT Barang_id,Barang_nama,Lab_nama FROM pinjam 
                                                                                                JOIN barang ON pinjam.Pinjam_barang_id=barang.Barang_id
                                                                                                JOIN lab ON barang.Barang_lab_id=lab.Lab_id
                                                                                                WHERE Pinjam_user_tag='$tagmahasiswa' && Pinjam_tgl_kembalireal IS NULL");

                                                                                                $i = 1;
                                                                                                while ($data = mysqli_fetch_array($ambildatabarang)) {
                                                                                                    $IDBarang = $data['Barang_id'];
                                                                                                    $NamaBarang = $data['Barang_nama'];
                                                                                                    $Namalab = $data['Lab_nama'];
                                                                                                    
                                                                                                ?>


                                                                                                <td><?= $IDBarang; ?>
                                                                                                </td>
                                                                                                <td><?= $NamaBarang; ?>
                                                                                                </td>
                                                                                                <td><?= $Namalab; ?>
                                                                                                </td>

                                                                                            </tr>
                                                                                            <?php
                                                                                                }
                                                                                        ?>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </td>

                                            </tr>
                                            <?php
                                                }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row-reverse">
                            <button type="submit" class="btn btn-success" name="pengecekan_submit">Submit</button>
                        </div>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>TA05 Politeknik ATMI Surakarta 2022</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Anda ingin Logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" untuk keluar dari akun.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= BASEURL; ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= BASEURL; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= BASEURL; ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= BASEURL; ?>/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= BASEURL; ?>/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?= BASEURL; ?>/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= BASEURL; ?>/js/demo/datatables-demo.js"></script>

    <script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
    </script>

    <script>
    $('#dataTable').dataTable({
        "lengthMenu": [5, 10, 20],
        "columnDefs": [{
            className: "dt-nowrap",
            "targets": [1, 3, 4],
        }],
    });
    </script>


</body>


</html>