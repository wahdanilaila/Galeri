<?php
  include "koneksi.php";
  session_start();

  if(!isset($_SESSION['user_id'])){
    header("location:index.php");
  }else{
    $foto_id=$_GET['foto_id'];
    $user_id=$_SESSION['user_id'];

    $sql=mysqli_query($conn,"select * from like_foto where foto_id='$foto_id' and user_id='$user_id'");

    if(mysqli_num_rows($sql)==1){
      header("location:index.php");
    }else{
      $tanggal_like=date("Y-m-d");
      mysqli_query($conn,"insert into like_foto values('','$foto_id','$user_id','$tanggal_like')");
      header("location:index.php");
    }
  }
?>