<?php
    include "koneksi.php";
    session_start();

    $judul_foto=$_POST['judul_foto'];
    $deskripsi_foto=$_POST['deskripsi_foto'];
    $album_id=$_POST['album_id'];

    //Jika Upload gambar baru
    if($_FILES['lokasi_file']['name']!=""){
        $rand = rand();
        $ekstensi =  array('png','jpg','jpeg','gif');
        $filename = $_FILES['lokas_ifile']['name'];
        $ukuran = $_FILES['lokasi_file']['size'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        
        if(!in_array($ext,$ekstensi) ) {
            header("location:foto.php");
        }else{
            if($ukuran < 1044070){		
                $xx = $rand.'_'.$filename;
                move_uploaded_file($_FILES['lokasi_file']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
                mysqli_query($conn, "update foto set judulfoto='$judul_foto',deskripsi_foto='$deskripsi_foto',lokasi_file='$xx',album_id='$album_id'");
                header("location:foto.php");
            }else{
                header("location:foto.php");
            }
        }
    }else{
        mysqli_query($conn, "update foto set judul_foto='$judul_foto',deskripsi_foto='$deskripsi_foto',album_id='$album_id'");
        header("location:foto.php");
    }
?>