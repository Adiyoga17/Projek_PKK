<?php 
include("koneksi.php");
require("server.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Menu</title>
     <!-- Link To CSS -->
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
    </script>
   
</head>
<body style="background-color: #fff4e8;">
    <!-- Navbar -->
    <header>
        <a href="#" class="logo"><img src="images/Peach and Brown Spoon and Fork Soft Organic Food Logo.png" alt="" width="110" height="100">
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="index.php#home">Home</a></li>
            <li><a href="index.php#about">About</a></li>
            <li><a href="index.php#services">Service</a></li>
            <li><a href="index.php#contact">Contact</a></li>
        </ul>
    </header>
    
    <div class="container mt-4 shadow-lg">
            <div class="card mb-4">
                <div class="card-header" style="background-color:#fff4e8;">
                    <a class="btn btn-outline-secondary" href="menu.php" role="button">Makanan</a>
                    <a class="btn btn-outline-secondary" href="menumin.php" role="button">Minumana</a>
                    <a class="btn btn-outline-secondary" href="menupak.php" role="button">Paket</a>

                    <nav class="navbar float-end" style="margin-top: -7px; background-color:#fff4e8;">
                        <div class="container-fluid">
                            <form class="d-flex" method="post" action="">
                                <input class="form-control me-2 float-end" name="keyword" type="search"
                                    placeholder="Search" autocomplete="off">
                                <button class="btn btn-outline-secondary" type="submit" name="cari">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>
                <div class="card-body" style="background-color:#fff4e8;">
                    <div class="table-responsive ">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                <?php
                                    $ambilmenu=mysqli_query($conn, "SELECT * FROM menu where kategori='Paket'");

                                    //caru data
                                    if(isset($_POST['cari'])){
                                        $ambilmenu=cari($_POST['keyword']);
                                    }

                                    while($data=mysqli_fetch_array($ambilmenu)){
                                    $nama=$data['nama_menu'];
                                    $harga=$data['harga_menu'];
                                    $gambar=$data['gambar'];
                                    $id=$data['id_menu'];
                                    ?>

                                <div class="card mb-3 border border-dark" style="height: 100%;">
                                    <div class="row g-0" style="background-color:#fff4e8;">
                                        <div class="col-md-4">
                                            <img src="images/<?=$gambar;?>" class="img-fluid rounded-start" width="290"
                                                height="100%">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h4 class="card-title"
                                                    style="font-family: poppins; font-weight:semi-bold; font-size: 35px; margin-left: -120px;">
                                                    <b><?=$nama;?></b></h4>
                                                <hr style="margin-left: -98px;">
                                                <h5 class="card-text"><b
                                                        style="font-family: poppins; font-weight:semi-bold; font-size: 25px; margin-left: -120px;">Harga:
                                                    </b>Rp. <?=$harga;?></h5>
                                                <button type="button mt-1" class="btn btn-sm ml-2"
                                                    style="background:#1dd1a1; margin-left: -120px;">
                                                    <a class="text-decoration-none text-dark" href="detailmenu.php?id= <?=$id?>">Lihat Menu</a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                    </div>
                </div>
                </tbody>
                </table>
            </div>
        </div>


    <!-- Copyright -->
    <div class="copyright" style="background-color:#fff4e8;">
        <p>&#169; CarpoolVenom All Right Reserved.</p>
    </div>


    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link To JavaScript -->
    <script src="main.js"></script>
</body>
</html>

