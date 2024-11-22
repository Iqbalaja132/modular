<?php
        // menangkap data

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $alamat = $_POST['alamat_user'];

        echo "Username : " . $username;
        echo "<br>";
        echo "Email : " . $email;
        echo "<br>";
        echo "Password : " . $password;
        echo "<br>";
        echo "Alamat : " . $alamat;

        ?>