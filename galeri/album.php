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
  <link rel="stylesheet" href="css/album.css">
  <title>Halaman Album</title>
</head>
<body>
  <h1>Halaman Album</h1>
  
  <ul>
	<li><a href="index.php">Home</a></li>
    <li><a href="album.php">Album</a></li>
    <li><a href="foto.php">Foto</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>

  <form action="tambah_album.php" method="post">
    <table>
      <tr>
        <td>Nama Album</td>
        <td><input type="text" name="nama_album"></td>
      </tr>
      <tr>
        <td>Deskripsi</td>
        <td><input type="text" name="deskripsi"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Tambah"></td>
      </tr>
    </table>
  </form>

  <table border="1" cellpadding=5 cellspacing=0>
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Deskripsi</th>
      <th>Tanggal Dibuat</th>
      <th>Aksi</th>
    </tr>
    <?php
      include "koneksi.php";
      $user_id=$_SESSION['user_id'];
      $sql=mysqli_query($conn,"select * from album where user_id='$user_id'");
      while($data=mysqli_fetch_array($sql)){
    ?>
      <tr>
        <td><?=$data['album_id']?></td>
        <td><?=$data['nama_album']?></td>
        <td><?=$data['deskripsi']?></td>
        <td><?=$data['tanggal_buat']?></td>
        <td>
          <a href="hapus_album.php?album_id=<?=$data['album_id']?>">Hapus</a>
          <a href="edit_album.php?album_id=<?=$data['album_id']?>">Edit</a>
        </td>
      </tr>
    <?php
    }
    ?>
  </table>
</body>
</html>