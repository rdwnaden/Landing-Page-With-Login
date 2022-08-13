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
                    <img src="../img/ava.png" class="ava" alt="avatar"/>
                    <p class="sidebar-email">Contact:</p>
                    <p class="sidebar-email"><?php echo $_SESSION["user"]["email"] ?></p>
                    <div class="line"></div>
                </div>

                <!-- content halaman Skill -->
                <div id="name">    
                        <p class="name-text">Skill</p>
                </div>

                <div id="main">
                    <br>
                    <p class="biodata"><?php echo $_SESSION["user"]["skill"] ?></p>
                </div>

                <form action="../logout.php">
                    <input id="logout-btn" type="submit" value="LOGOUT"/>
                </form>

            </div>
        </div>

    </body>
</html>