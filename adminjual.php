<?php 
require('koneksi.php');
require('server.php');
?>
<!DOCTYPE html
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>HALAMAN ADMIN</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <h5 class="navbar-brand">Hello admin</h5>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="admin.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            User
                        </a>
                        <a class="nav-link" href="adminmenu.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                            Menu
                        </a>
                        <a class="nav-link" href="adminjual.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                            Penjualan
                        </a>
                        <a class="nav-link" href="login.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Pesanan</h1>
                    <div class="card mb-4">
                        <div class="card-header">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">
                                Tambah Pesanan
                            </button>
                            <form class="d-flex" method="post" action="">
                                <input class="form-control float-end" name="keyword" type="search" placeholder="Search" autocomplete="off" style="width:300px; margin-top:-37px;margin-left:800px;">
                                <button class="btn btn-outline-dark" type="submit" name="cari" style="margin-left:5px; margin-top:-37px;">Search</button>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Nama Menu</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $ambilmenu=mysqli_query($conn, "SELECT * FROM pesanan INNER JOIN user ON pesanan.id_user=user.id_user INNER JOIN menu ON pesanan.id_menu=menu.id_menu");

                                    $i=1;
                                    while($data=mysqli_fetch_array($ambilmenu)){

                                        $namamenu=$data['nama_menu'];
                                        $harga=$data['harga_menu'];
                                        $jumlah=$data['jumlah'];
                                        $idmenu=$data['id_menu'];
                                        $iduser=$data['user'];
                                        $status=$data['status'];
                                        $idpesanan=$data['id'];

                                    ?>

                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td><?=$namauser;?></td>
                                            <td><?=$namamenu;?></td>
                                            <td>Rp. <?=$harga;?></td>
                                            <td><?=$jumlah;?></td>
                                            <td>Rp. <?=$harga*$jumlah;?></td>
                                            <td><?=$status;?></td>
                                            <td><img src="images/<?=$gambar;?>" style="width:160px; height:160px;"></td>
                                            <td>
                                                <button type="button" class="btn btn-info" data-toggle="modal"
                                                    data-target="#edit<?=$id?>">
                                                    Edit
                                                </button>
                                                <input type="hidden" name="idbarangdihapus" value="<?=$id?>">
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#delete<?=$id?>">
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- EDIT Modal -->
                                        <div class="modal fade" id="edit<?=$id?>" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Menu</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" enctype="multipart/form-data">
                                                            <div class="form-group">

                                                                <p style="margin-bottom:5px; margin-top:-15px;"><b>Nama Menu</b></p>
                                                                <input type="text" class="form-control"
                                                                    name="namamenu" value="<?=$nama;?>" required>

                                                                <p style="margin-bottom:5px; margin-top:15px;"><b>Harga Menu</b></p>
                                                                <input type="text" class="form-control"
                                                                    name="hargamenu" value="<?=$harga;?>" required> 

                                                                <p style="margin-bottom:5px; margin-top:15px;"><b>Gambar</b></p>
                                                                <img src="img/<?=$gambar;?>" style="width:100px; height:100px;"> 
                                                                <input type="file" name="gambar"><br> <br>
                                                                <input type="hidden" name="id" value=<?=$id;?>>
                                                                <input type="hidden" name="gambarlama" value=<?=$gambar;?>>
                                                                <button type="submit" class="btn btn-primary"
                                                                    name="editmenu">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- DELETE Modal -->
                                        <div class="modal fade" id="delete<?=$id?>" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Menu?
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post">
                                                            <div class="form-group">
                                                                Apakah Anda Yakin Ingin Menghapus <b><?=$nama?>?</b>
                                                                <br><br>
                                                                <input type="hidden" name="id" value=<?=$id;?>>
                                                                <button type="submit" class="btn btn-danger"
                                                                    name="hapusmenu">Hapus</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2020</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <p style="margin-bottom:5px;"><b>Nama Menu</b></p>
                                    <input type="text" class="form-control" name="nama" required autocomplete="off">

                                    <p style="margin-bottom:5px; margin-top:15px;"><b>Harga Menu</b></p>
                                    <input type="text" class="form-control" name="harga" required autocomplete="off">

                                    <p style="margin-bottom:5px; margin-top:15px;"><b>Gambar</b></p>
                                    <input type="file" name="gambar"> <br> <br>
                                    <button type="submit" class="btn btn-primary" name="addmenu">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous">
    </script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous">
    </script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>