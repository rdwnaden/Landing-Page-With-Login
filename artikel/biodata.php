<?php
require_once("../auth.php");
?>

<html>
    <head>
        <title>CV Ridwan Aden</title><!-- title website -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/style.css"><!-- link ke external file css -->
    </head>
    <body>
        <!-- content utama -->
        <div id="card"><!-- div id untuk mengambil css card yang sudah kita buat -->
            <div id="card-content"> <!-- div id untuk mengambil css card-content yang sudah kita buat -->
                <!-- content sidebar -->
                <div id="sidebar"><!-- css sidebar-->
                    <!-- untuk membuat toombol link ke halaman lain -->
                    <nav class="vertikal"> <!-- membuat navbar -->
                        <ul>
                            <li><a href="../artikel/home.php">Home</a></li>
                            <li><a href="../artikel/biodata.php">Biodata</a></li>
                            <li><a href="../artikel/riwayat.php">Riwayat Pendidikan</a></li>
                            <li><a href="../artikel/skill.php">Skill</a></li>
                            <li><a href="../artikel/sertifikasi.php">Sertifikasi</a></li>
                            <li><a href="../artikel/portofolio.php">Portofolio</a></li>
                            <li><a href="../artikel/harapan.php">Harapan</a></li>
                        </ul>
                    </nav>
                    <br> <!-- untuk memberi jarak antar -->
                    <br> <!-- untuk memberi jarak antar -->
                    <br> <!-- untuk memberi jarak antar -->
                    <!-- content foto -->
                    <img src="../img/ava.png" class="ava" alt="avatar"/><!-- mengambil source gambar pada file img-->
                    <p class="sidebar-email">Contact:</p>
                    <p class="sidebar-email"><?php echo $_SESSION["user"]["email"] ?></p>
                    <div class="line"></div>
                </div>

                <div id="name">    
                        <p class="name-text">Biodata</p>
                </div>
                <!-- content halaman biodata -->
                <div id="main">
                    <br>
                    <p class="biodata">Full Name :</p>
                    <p class="biodata"><?php echo $_SESSION["user"]["name"] ?></p>
                    <div class="biodata-line"></div>

                    <p class="biodata">NIM :</p>
                    <p class="biodata"><?php echo $_SESSION["user"]["nim"] ?></p>
                    <div class="biodata-line"></div>

                    <p class="biodata">Place Date of Birth :</p>
                    <p class="biodata"><?php echo $_SESSION["user"]["tanggal_lahir"] ?></p>
                    <div class="biodata-line"></div>

                    <p class="biodata">Gender :</p>
                    <p class="biodata"><?php echo $_SESSION["user"]["jenis_kelamin"] ?></p>
                    <div class="biodata-line"></div>

                    <p class="biodata">Progam Studi :</p>
                    <p class="biodata"><?php echo $_SESSION["user"]["prodi"] ?></p>
                    <div class="biodata-line"></div>

                    <p class="biodata">Address :</p>
                    <p class="biodata"><?php echo $_SESSION["user"]["alamat"] ?></p>
                    <div class="biodata-line"></div>

                    <p class="biodata">Religion :</p>
                    <p class="biodata"><?php echo $_SESSION["user"]["agama"] ?></p>
                    <div class="biodata-line"></div>

                    <p class="biodata">Nationalty :</p>
                    <p class="biodata"><?php echo $_SESSION["user"]["kebangsaan"] ?></p>
                    <div class="biodata-line"></div>
                </div>

                <form action="../logout.php">
                    <input id="logout-btn" type="submit" value="LOGOUT"/>
                </form>

            </div>
        </div>

    </body>
</html>