<?php

require_once("config.php");

if(isset($_POST['register'])) {

    //filter input data
    $nim = filter_input(INPUT_POST, 'nim', FILTER_SANITIZE_STRING);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $tanggal_lahir = filter_input(INPUT_POST, 'tanggal_lahir', FILTER_SANITIZE_STRING);
    $jenis_kelamin = filter_input(INPUT_POST, 'jenis_kelamin', FILTER_SANITIZE_STRING);
    $prodi = filter_input(INPUT_POST, 'prodi', FILTER_SANITIZE_STRING);
    $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
    $agama = filter_input(INPUT_POST, 'agama', FILTER_SANITIZE_STRING);
    $kebangsaan = filter_input(INPUT_POST, 'kebangsaan', FILTER_SANITIZE_STRING);
    $harapan = filter_input(INPUT_POST, 'harapan', FILTER_SANITIZE_STRING);
    $portofolio = filter_input(INPUT_POST, 'portofolio', FILTER_SANITIZE_STRING);
    $riwayat_pend = filter_input(INPUT_POST, 'riwayat_pend', FILTER_SANITIZE_STRING);
    $sertifikasi = filter_input(INPUT_POST, 'sertifikasi', FILTER_SANITIZE_STRING);
    $skill = filter_input(INPUT_POST, 'skill', FILTER_SANITIZE_STRING);

    //enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    //menyiapkan query sql
    $sql = "INSERT INTO mahasiswa (nim, password, email, name, tanggal_lahir, jenis_kelamin, prodi, alamat, agama, kebangsaan, harapan, portofolio, riwayat_pend, sertifikasi, skill)
            VALUES (:nim, :password, :email, :name, :tanggal_lahir, :jenis_kelamin, :prodi, :alamat, :agama, :kebangsaan, :harapan, :portofolio, :riwayat_pend, :sertifikasi, :skill)";
    $stmt = $db->prepare($sql);

    //bind parameter ke query
    $params = array(
        ":nim" => $nim,
        ":password" => $password,
        ":email" => $email,
        ":name" => $name,
        ":tanggal_lahir" => $tanggal_lahir,
        ":jenis_kelamin" => $jenis_kelamin,
        ":prodi" => $prodi,
        ":alamat" => $alamat,
        ":agama" => $agama,
        ":kebangsaan" => $kebangsaan,
        ":harapan" => $harapan,
        ":portofolio" => $portofolio,
        ":riwayat_pend" => $riwayat_pend,
        ":sertifikasi" => $sertifikasi,
        ":skill" => $skill,
    );


    //eksekusi query untuk meyimpan ke database
    $saved = $stmt->execute($params);



    //query create user sudah terdaftar, redirect ke index utama
    if($saved) header("Location: index.php");
}

?>


<html>
    <head>
        <link rel="shortcut icon" href="img/icon.ico">
        <title>CP-0 Register</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="css/style.css" type="text/css" rel="stylesheet"/>
    </head>

    <body>

        <div id="register-left">
            <div id="register-left-content">
                <div id="register-left-tittle">FORM REGISTER
                    <div class="register-underline-tittle"></div>
                </div>
            
                <form action="" method="post" enctype="multipart/form-data" class="form-reg" style="margin-top: 30px; color: white;">
                    <label for="nim">NIM :</label>
                    <input class="form-reg-content" type="text" name="nim"/>
                    <div class="form-reg-border"></div>
        
                    <label for="password">Password :</label>
                    <input class="form-reg-content" type="password" name="password"/>
                    <div class="form-reg-border"></div>
        
                    <label for="email">Email :</label>
                    <input class="form-reg-content" type="email" name="email"/>
                    <div class="form-reg-border"></div>
        
                    <label for="name">Full Name :</label>
                    <input class="form-reg-content" type="text" name="name"/>
                    <div class="form-reg-border"></div>
        
                    <label for="tanggal_lahir">Tanggal Lahir : (yyyy-mm-dd)</label>
                    <input class="form-reg-content" type="text" name="tanggal_lahir"/>
                    <div class="form-reg-border"></div>

                    <label for="name">Jenis Kelamin :
                    <input type="radio" name="jenis_kelamin" value="Laki-Laki"/> Laki-laki <input type="radio" name="jenis_kelamin" value="Perempuan"/> Perempuan
                    </label>
                    <br></br>

                    <label for="prodi">Program Studi :</label>
                    <input class="form-reg-content" type="text" name="prodi"/>
                    <div class="form-reg-border"></div>

                    <label for="alamat">Alamat :</label>
                    <input class="form-reg-content" type="text" name="alamat"/>
                    <div class="form-reg-border"></div>

                    <label for="agama">Agama :</label>
                    <input class="form-reg-content" type="text" name="agama"/>
                    <div class="form-reg-border"></div>

                    <label for="kebangsaan">Kebangsaan :</label>
                    <input class="form-reg-content" type="text" name="kebangsaan"/>
                    <div class="form-reg-border"></div>
                    
                    
                    
                    <div id="register-right">
                        <div id="register-right-content">

                        <label for="harapan">Harapan :</label>
                        <textarea class="register-textarea" type="text" name="harapan"></textarea>
                        <div class="form-reg-border"></div>

                        <label for="portofolio">Portofolio :</label>
                        <textarea class="register-textarea" type="text" name="portofolio"></textarea>
                        <div class="form-reg-border"></div>
                        
                        <label for="riwayat_pend">Riwayat Pendidikan :</label>
                        <textarea class="register-textarea" type="text" name="riwayat_pend"></textarea>
                        <div class="form-reg-border"></div>

                        <label for="sertifikasi">Sertifikasi :</label>
                        <textarea class="register-textarea" type="text" name="sertifikasi"></textarea>
                        <div class="form-reg-border"></div>

                        <label for="skill">Skill :</label>
                        <textarea class="register-textarea" type="text" name="skill"></textarea>
                        <div class="form-reg-border"></div>

                        </div>
                    </div>

                    <input id="reg-submit-btn" type="submit" name="register" value="REGISTER"/>

                    <a href="index.php" id="reg-login">Already have account? Login here!</a>
                </form>
            </div>
        </div>


        
    </body>
</html>