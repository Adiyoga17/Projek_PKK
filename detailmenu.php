<?php
require('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-Detailed</title>
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Navbar -->
<header>
    <a href="#" class="logo"><img src="images/Peach and Brown Spoon and Fork Soft Organic Food Logo.png" alt="" width="110" height="100">
    <div class="bx bx-menu" id="menu-icon"></div>

    <ul class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php#about">About</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="index.php#services">Service</a></li>
        <li><a href="index.php#contact">Contact</a></li>
    </ul>
</header>

    <!---- single products detail ----->

  	<div class="small-container single-products">
        <div class="row">
            <?php
                
                $ambilmenu=mysqli_query($conn, "SELECT * FROM menu where id_menu='".$_GET['id']."' ");
                
                while($data=mysqli_fetch_array($ambilmenu)){

            ?>
            <div class="col-2">
                <img src="images/<?=$data['gambar'];?>" width="100%" id="product-img">
            </div>
            
            <div class="col-2">
                <p>Detail Menu</p>
                <h1 name="namamenu"><?=$data['nama_menu'];?></h1>
                <h4 name="harga">Rp. <?=$data['harga_menu'];?></h4>
                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>Give your summer wardobe a style upgrade with the HRX Men's
                Basic shirt. Team it with a pair of shorts for your morning
                workout or denims for an evening out with the guys.</p>
                <br>
                <input type="number" name="jumlah" style="height: 32px;" value="1">
                <button type="submit" class="border-none" name="mesen" style="background-color:#9b7a50;">
                <a href="" class="btn">Pesen Sekarang!</a>
                </button>
            </div>
            <?php
                }
            ?>
        </div>
    </div>

    <!---- footer----->
    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="contact-box">
            <h3>Food Taste</h3>
            <span>Connect With Us</span>
            <div class="social">
                <a href="#"><i class='bx bxl-facebook' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-instagram' ></i></a>
            </div>
        </div>
        <div class="contact-box">
            <h3>Menu Links</h3>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#services">Service</a></li>
            <li><a href="#contact">Contact</a></li>
        </div>
        <div class="contact-box">
            <h3>Quick Links</h3>
            <li><a href="#Contact">Contact</a></li>
            <li><a href="#Privacy Policy">Privacy Policy</a></li>
            <li><a href="#Disclaimer">Disclaimer</a></li>
            <li><a href="#Terms Of Use">Terms Of Use</a></li>
        </div>
        <div class="contact-box address">
            <h3>Contact</h3>
            <i class='bx bxs-map' ><span>JL. Gunung Andakasa no. 11, Denpasar Barat, Bali</span></i>
            <i class='bx bxs-phone' ><span>+62 87761490509</span></i>
            <i class='bx bxs-envelope' ><span>ayulia1030@email.com</span></i>
        </div>
    </section>

    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; All Right Reserved.</p>
    </div>


</body>
</html>