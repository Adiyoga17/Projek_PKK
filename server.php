<?php 

include("koneksi.php");

//============================================================MENU===============================================================================
//tambah menu
if(isset($_POST['addmenu'])){
    $nama=$_POST['nama'];
    $harga=$_POST['harga'];
    $gambar=$_POST['gambar'];

    //upload gambar dulu
    $gambar=upload();
    if(!$gambar){
        return false;
    }

    $addmenu=mysqli_query($conn,"INSERT INTO menu (nama_menu, harga_menu, gambar) 
                            VALUE ('$nama','$harga','$gambar')");

    if($addmenu){
        echo "<script>alert('Menu Berhasil Di Tambah');document.location='adminmenu.php'</script>";
    }else{
        echo "<script>alert('Maaf, Menu Tidak Berhasil Di Tambah');document.location='adminmenu.php'</script>";
    }
}

function upload(){
    $namafile=$_FILES['gambar']['name'];
    $ukuran=$_FILES['gambar']['size'];
    $error=$_FILES['gambar']['error'];
    $tmpname=$_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gamabr
    if($error==4){
        echo "<script>alert('Maaf Gambar Belum Di Upload');</script>";
        return false;
    }

    //yang boleh di upload hanya gambar
    $jenisgambarvalid=['jpg','jpeg','png'];
    $ekstensigambar=explode('.', $namafile);
    $ekstensigambar=strtolower(end($ekstensigambar));
    if(!in_array($ekstensigambar , $jenisgambarvalid)){
        echo "<script>alert('Maaf, Yang Anda Upload Bukan Gambar');</script>";
        return false;
    }

    //cek ukuran
    if($ukuran > 2000000){
        echo "<script>alert('Maaf, Gambra Yang Anda Upload Terlalu Besar');</script>";
        return false;
    }

    // lolos pengecekan
    //nama gambar baru jika ad yang sama
    $namafilebaru=uniqid();
    $namafilebaru.='.';
    $namafilebaru.=$ekstensigambar;

    move_uploaded_file($tmpname,'images/' . $namafilebaru);
    return $namafilebaru;
}

//update Menu
if(isset($_POST['editmenu'])){
    $id=$_POST['id'];
    $nama_menu=$_POST['namamenu'];
    $harga_menu=$_POST['hargamenu'];
    $gambarlama=$_POST['gambarlama'];

    //cek apakah user plih gambar baru apa tidak
    if($_FILES['gambar']['error']==4){
        $gambar=$gambarlama;
    }else{
        $gambar=upload();
    }

    $updatemenu=mysqli_query($conn,"UPDATE menu set nama_menu='$nama_menu', harga_menu='$harga_menu', gambar='$gambar' where id_menu='$id'");
    
    if($updatemenu){
        echo "<script>alert('Menu Berhasil Di Update');document.location='adminmenu.php'</script>";
    }else{
        echo "<script>alert('Maaf, Menu Tidak Berhasil Di Update');document.location='adminmenu.php'</script>";
    }
}

//delete Menu
if(isset($_POST['hapusmenu'])){
    $id=$_POST['id'];

    $deletemenu=mysqli_query($conn,"DELETE FROM menu where id_menu='$id'");
    
    if($deletemenu){
        echo "<script>alert('Menu Berhasil Dihapus');document.location='adminmenu.php'</script>";
    }else{
        echo "<script>alert('Maaf, Menu Tidak Berhasil Dihapus');document.location='adminmenu.php'</script>";
    }
}


?>