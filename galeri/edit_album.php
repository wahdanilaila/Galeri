<?php
  session_start();
  if(!isset($_SESSION['user_id'])){
    header("location:login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/edita.css">
  <title>Halaman Edit Album</title>
</head>
<body>
  <h1>Halaman Edit Album</h1>
  
  <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="album.php">Album</a></li>
      <li><a href="foto.php">Foto</a></li>
      <li><a href="logout.php">Logout</a></li>
  </ul>

  <form action="update_album.php" method="post">
    <?php
      include "koneksi.php";
      $album_id=$_GET['album_id'];
      $sql=mysqli_query($conn,"select * from album where album_id='$album_id'");
      while($data=mysqli_fetch_array($sql)){
    ?>
    <input type="text" name="album_id" value="<?=$data['album_id']?>" hidden>
    <table>
      <tr>
        <td>Nama Album</td>
        <td><input type="text" name="nama_album" value="<?=$data['nama_album']?>"></td>
      </tr>
      <tr>
        <td>Deskripsi</td>
        <td><input type="text" name="deskripsi" value="<?=$data['deskripsi']?>"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Ubah"></td>
      </tr>
    </table>
    <?php
    }
    ?>
  </form>
</body>
</html>