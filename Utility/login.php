<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login </title>
</head>

<body>
    <link rel="stylesheet" href="../css/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body>
        <div class="wrapper">
            <form action="login.php" method="POST">
                <!-- <img src="image/logologin.png" alt="Login Image" class="login-image"> -->
                <h1>Login</h1>
                <!-- <i><?= htmlspecialchars($login_message) ?></i> -->
                <div class="input-box">
                    <input type="text" placeholder="Username" name="username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" name="password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit" class="button" name="login">Login</button>
                <div class="register-link">
                    <p>Don't have an account? <a href="register.php">Register</a></p>
                </div>
        </div>
        <?php
        include "Utility.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            if (Utility::login($username, $password)) {
                // Jika registrasi berhasil, arahkan ke halaman home
                echo "berhasil";
                header("Location: index.html");

                exit; // Penting untuk menghentikan eksekusi skrip setelah mengarahkan pengguna
            } else {
                echo "tidak berhasil";
                // Jika registrasi gagal, arahkan kembali ke halaman register
                header("Location: login.php");
                exit; // Penting untuk menghentikan eksekusi skrip setelah mengarahkan pengguna
            }
        }
        ?>


    </body>

</html>