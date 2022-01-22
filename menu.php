<?php 
include("koneksi.php");
require("server.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>All Menu Products Ayulia</title>
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
        <li><a href="index.php#services">Service</a></li>
        <li><a href="index.php#contact">Contact</a></li>
    </ul>
</header>

 	<div class="small-container">
 		
 		<div class="row row-2">
 			<h2>All Menu Products</h2>
 		</div>

		<div class="row">
            <?php
                $ambilmenu=mysqli_query($conn, "SELECT * FROM menu");

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

                <div class="col-4">
                    <img src="images/<?=$gambar;?>">
                        <h4><a href="detailmenu.php"><?=$nama;?></a></h4>
                        <p><?=$harga;?></p>
                    </div>
                    
                </div>
            <?php
            }
            ?>
             <div class="page-btn">
                    <span>1</span>
                    <span>2</span>
                    <span>3</span>
                    <span>4</span>
                    <span>&#8594;</span>
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

	<!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link To JavaScript -->
    <script src="main.js"></script>


</body>
</html>











