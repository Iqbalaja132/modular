<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Selamat Datang <?= $_SESSION['data']['nama_user'] ?>, dan rolenya sebagai <?= $_SESSION['data']['role']?>
    </h1>
</body>
</html>