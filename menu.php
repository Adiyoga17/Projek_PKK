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
            <div class="card mb-3 border border-dark" style="height: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/<?=$gambar;?>" class="img-fluid rounded-start" width="290" height="100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <strong class="d-inline-block pb-1 text-success" style="font-family:poppins; margin-left: -120px;"><?=$nama;?></strong>
                            <h4 class="card-title" style="font-family: poppins; font-weight:semi-bold; font-size: 35px; margin-left: -120px;"><b><?=$harga;?></b></h4>
                            <hr style="margin-left: -98px;">
                            <button type="button mt-1" class="btn btn-sm ml-2" style="background:#1dd1a1; margin-left: -120px;">
                                <a class="text-decoration-none text-dark" href="detailmenu.php?id=<?=$id?>">Pinjam Buku</a>   
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
	<!---- footer----->


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











