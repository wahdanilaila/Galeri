<?php
  include "koneksi.php";
  session_start();

  $nama_album=$_POST['nama_album'];
  $deskripsi=$_POST['deskripsi'];
  $tanggal_buat=date("Y-m-d");
  $user_id=$_SESSION['user_id'];

  $sql=mysqli_query($conn,"insert into album values('','$nama_album','$deskripsi','$tanggal_buat','$user_id')");

  header("location:album.php");
?>