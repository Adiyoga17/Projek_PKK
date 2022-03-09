<?php
require('koneksi.php');
require('server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detailed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">

            <a class="navbar-brand">
                <img src="images/Peach and Brown Spoon and Fork Soft Organic Food Logo.png" width="45" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-bold" aria-current="page" href="index.php#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="index.php#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="index.php#service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="index.php#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!---- single products detail ----->
    <div class="container">
            <?php
                
                $ambilmenu=mysqli_query($conn, "SELECT * FROM menu where id_menu='".$_GET['id']."' ");
                
                while($data=mysqli_fetch_array($ambilmenu)){

            ?>
        <div class="card-header mx-auto  mb-3" style="max-width: 86%; margin-top:70px; border: 1px solid #9b7a50;">
           <h1>Detail Menu</h1>
        </div>
        <div class="card mx-auto" style="max-width: 86%; margin-bottom:70px; background-color: #fff4e8;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="images/<?=$data['gambar'];?>" width="100%">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 40px;"><?=$data['nama_menu']?></h5>
                        <p class="card-text" style="font-size: 25px;">Ukuran: <?=$data['ukuran']?></p>
                        <p class="card-text" style="font-size: 2em;">Harga: <?=tambahrp($data['harga_menu'])?></p>
                        <h4 class="mb-3">Details </h4>
                        <p><?=$data['deskripsi']?></p>
                        <a href="https://api.whatsapp.com/send?phone=+6287761490509 &text= Hello Kak, saya ingin pesan <?=$data['nama_menu'];?> yang berukuran  <?=$data['ukuran']?>." class="btn" target="_black">Pesen Sekarang!</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
    
    <!---- footer----->
   <!-- Contact -->
   <section class="contact" id="contact">
        <div class="contact-box">
            <h3>Sosmed</h3>
            <div class="social">
                <a class="text-dark" href="https://instagram.com/dapur_ibuayulia?utm_medium=copy_link"><i class="fab fa-instagram"> Instagram</i></a>
            </div>
        </div>
        <div class="contact-box">
            <h3>Menu Links</h3>
            <li><a class="text-decoration-none" href="index.php#home">Home</a></li>
            <li><a class="text-decoration-none" href="index.php#about">About</a></li>
            <li><a class="text-decoration-none" href="menu.php">Menu</a></li>
            <li><a class="text-decoration-none" href="index.php#services">Service</a></li>
            <li><a class="text-decoration-none" href="index.php#contact">Contact</a></li>
        </div>
        <div class="contact-box address">
            <h3>Contact</h3>
            <i class="fas fa-map-marker-alt"><span style="font-style:normal;">JL. Gunung Andakasa no. 11, Denpasar Barat, Bali</span></i>
            <i class="fas fa-phone-alt"><span class="fw-normal">+62 877 6149 0509</span></i>
            <i class="fas fa-envelope"><span class="fw-normal">ayulia1030@email.com</span></i>
        </div>
    </section>

    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; All Right Reserved.</p>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link To JavaScript -->
    <script src="main.js"></script>

</body>
</html>