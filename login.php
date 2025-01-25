<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sign.css">
    <title>Sign UPt</title>
    <style>
            .header {
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px 0;
            background-color:rgb(91, 76, 175); /* UNGU*/
            text-align: center;
            color: white;
            font-size: 28px; /* Ukuran font lebih besar */
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan untuk efek depth */
            z-index: 1000;
        }
        .form{
            width: 230px;
            height: 280px;
        }
    </style>
    </style>
</head>
<body>

<div class="header">Selamat Datang di Halaman Portfolio saya</div>

<?php
    if (isset($_POST['login_button'])) {
        // Tangkap input username dan password (bisa asal-asalan)
        $name = $_POST['name'];
        $password = $_POST['password'];

        // Redirect ke halaman lain setelah login berhasil
        header('Location: https://celesstaa.github.io/CV-Portfolio/');  // Ganti dengan URL tujuan
        exit();
    }
?>

<div class="form">
    <div class="title">
        <p>Login Form</p>
    </div>
    <form action="" method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="password" placeholder="Password">
            <input type="submit" value="Login" name="login_button" formaction="website.php">
        </form>
</div>

</body>
</html>
