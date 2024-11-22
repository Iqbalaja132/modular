<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
</head>
<body>
  <center>
    <h2>Tambah User</h2>
  <form action="hasil_form.php" method="post">

        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        
        <label for="alamat_user">Alamat:</label>
        <input type="alamat_user" name="alamat_user" id="alamat_user" required><br><br>

        <button type="submit" name="kirim">Kirim</button>
  </form>
  </center>
</body>
</html>