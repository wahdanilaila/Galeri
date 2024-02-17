<?php
  include "koneksi.php";
  session_start();

  $album_id=$_POST['album_id'];
  $nama_album=$_POST['nama_album'];
  $deskripsi=$_POST['deskripsi'];

  $sql=mysqli_query($conn,"update album set nama_album='$nama_album',deskripsi='$deskripsi' where album_id='$album_id'");

  header("location:album.php");
?>