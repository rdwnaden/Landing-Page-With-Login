<?php

require_once("config.php");

if(isset($_POST['login'])) {

    $nim = filter_input(INPUT_POST, 'nim', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM mahasiswa WHERE nim=:nim OR email=:email";
    $stmt = $db->prepare($sql);

    //bind parameter ke query sql
    $params = array(
        ":nim" => $nim,
        ":email" => $email
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //jika user sudah terdaftar
    if($user) {

        //verifikasi password
        if(password_verify($password, $user["password"])) {
        
            //buat session
            session_start();
            $_SESSION["user"] = $user;

            //login berhasil, redirect ke index utama
            header("Location: artikel/home.php");
        }
    }
}

?>

<html>
    <head>
        <link rel="shortcut icon" href="img/icon.ico">
        <title>TB-2 Ridwan Aden</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="css/style.css" type="text/css" rel="stylesheet"/>
    </head>

    <body>

        <div id="login-card">
            <div id="login-card-content">
                <div id="login-card-title">
                    <h2>CP-0 Intranet</h2>
                </div>
            </div>

            <form action="" method="post" class="login-form" style="padding: 34px; margin-top: -60px; color: white;">
                <label for="nim">&nbsp;NIM :</label>
                <input class="login-form-content" type="text" name="nim" autocomplete="on" required />

                <label for="password" style="padding-top:12px">&nbsp;Password :</label>
                <input class="login-form-content" type="password" name="password" required />
                
                <a href="reset.php" id="login-forgot-pass">Reset Password?</a>
                <input id="login-submit-btn" type="submit" name="login" value="LOGIN"/>
                <a href="register.php" id="login-register">Don't have account yet? Register here!</a>

            </form>



        </div>
    </body>


</html>