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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Navbar -->
    <header>
        <a href="#" class="logo"><img src="images/Peach and Brown Spoon and Fork Soft Organic Food Logo.png" alt=""
                width="110" height="100">
            <div class="bx bx-menu" id="menu-icon"></div>

            <ul class="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#about">About</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="index.php#services">Service</a></li>
                <li><a href="index.php#contact">Contact</a></li>
            </ul>
    </header>

    <div class="container" style="margin-top: 110px; margin-bottom:20px;">

         <?php
                
                $ambilmenu=mysqli_query($conn, "SELECT * FROM pesanan INNER JOIN user On user.id_user=pesanan.id_user INNER JOIN menu ON menu.id_menu=pesanan.id_menu ");
                
                while($data=mysqli_fetch_array($ambilmenu)){

            ?>

        <form method="post">
            <div class="mb-3">
                <label for="Nama Pembei" class="form-label">Nama Pembeli</label>
                <input type="text" class="form-control" name="namauser" value="<?=$data['nama_user']?>" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?=$data['alamat']?>" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">No Telepon</label>
                <input type="number" class="form-control" name="telp" value="<?=$data['telp']?>" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama Menu</label>
                <input type="text" class="form-control" name="namamenu" value="<?=$data['nama_menu']?>" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Harga</label>
                <input type="text" class="form-control" name="hargamenu" value="Rp." id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jumlah Beli </label>
                <input type="number" class="form-control" name="jumlah" value="1" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" name="total" class="form-label">Total Pembayaran : Rp.s </label>
            </div>
            <div class="mb-3">
                <input type="hidden" class="form-control" name="status" id="exampleInputPassword1">   
            </div>

            <button type="submit" class="btn" name="mesen">Submit</button>
        </form>

        <?php
            }
        ?>

    </div>


    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; All Right Reserved.</p>
    </div>


</body>

</html>