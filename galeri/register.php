<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/register.css">
  <title>Halaman Registrasi</title>
</head>
<body>
  <div class="background">
  </div>
  <form action="proses_register.php" method="post">
    <h3>Register Here</h3>
    <table>
      <tr>
        <td></td>
        <td><input type="text" name="username" placeholder="Username"></td> 
      </tr>
      <tr>
        <td></td>
        <td><input type="password" name="password" placeholder="Password"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="email" name="email" placeholder="Email"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="text" name="nama_lengkap" placeholder="Nama Lengkap"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="text" name="alamat" placeholder="Alamat"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Register" id="button"></td>
      </tr>
	  <tr>
            <td></td>
            <td id="login">
                Already have an account? <a href="login.php" id="login"><br>Login</a>
            </td>
        </tr>
    </table>
  </form>
</body>
</html>