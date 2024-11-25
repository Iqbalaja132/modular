<?php
        // menangkap data

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nama = $_POST['nama_user'];
        $alamat = $_POST['alamat_user'];
        $jk = $_POST['jenis_kelamin'];
        $tempatlahir = $_POST['tempatlahir_user'];
        $tanggallahir = $_POST['tanggallahir_user'];


        echo "Username : " . $username;
        echo "<br>";
        echo "Email : " . $email;
        echo "<br>";
        echo "Password : " . $password;
        echo "<br>";
        echo "Nama : " . $nama;
        echo "<br>";
        echo "Alamat : " . $alamat;
        echo "<br>";
        echo "Jenis kelamin : " . $jk;
        echo "<br>";
        echo "Tempat Lahir : " . $tempatlahir;
        echo "<br>";
        echo "Tanggal Lahir : " . $tanggallahir;
        ?>