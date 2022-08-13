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

                <div id="name">    
                        <p class="name-text">Portofolio</p>
                </div>

                <!-- content halaman portofolio -->
                <div id="main">
                    <br>
                    <p class="biodata"><?php echo $_SESSION["user"]["portofolio"] ?></p>
                    <br> <!-- memberikan jarak pada baris paragraf -->

                    <!-- content slide gambar -->
                    <div id="slideshow">
                        <div class="gambar">
                            <div class="mySlides fade">
                                <div class="number" style="margin-left: 350px;">1 / 3</div>
                                <img src="../img/takes.jpeg" style="width: 300px; height: 200px; margin-left: 100px;">
                                <div class="caption">Takes Hotel Jakarta</div>
                            </div>
                        <div class="mySlides fade">
                            <div class="number" style="margin-left: 350px;">2 / 3</div>
                            <img src="../img/sahid.jpeg" style="width: 300px; height: 200px; margin-left: 100px;">
                            <div class="caption">Hotel Sahid Mutiara Karawaci</div>
                        </div>
                        <div class="mySlides fade">
                            <div class="number" style="margin-left: 350px;">3 / 3</div>
                            <img src="../img/dafam.jpeg" style="width: 300px; height: 200px; margin-left: 100px;">
                            <div class="caption">Hotel Dafam Teraskita Jakarta</div>
                        </div>
                          <a class="prev" style="margin-left: 60px;" onclick="plusSlides(-1)"></a>
                          <a class="next" style="margin-right: 70px;" onclick="plusSlides(1)"></a>
                        </div>
                        <div class="button" style="width: 100px; height: 100px; margin-left: 200px;"><!-- mengambil css untuk tombol slide -->
                          <span class="dot" onclick="currentSlide(1)"></span><!-- memanggil fungsi javascript untuk melihat slide pertama -->
                          <span class="dot" onclick="currentSlide(2)"></span><!-- memanggil fungsi javascript untuk melihat slide kedua -->
                          <span class="dot" onclick="currentSlide(3)"></span><!-- memanggil fungsi javascript untuk melihat slide ketiga -->
                        </div>
                        </div>

                        <!-- javascript untuk slide gambar -->
                        <script>
                            var slideIndex = 1;
                            showSlides(slideIndex);
                            
                            function plusSlides(n) { 
                              showSlides(slideIndex += n);
                            }
                            
                            function currentSlide(n) {
                              showSlides(slideIndex = n);
                            }
                            
                            function showSlides(n) {
                              var i;
                              var slides = document.getElementsByClassName("mySlides");
                              var dots = document.getElementsByClassName("dot");
                              if (n > slides.length) {slideIndex = 1}
                              if (n < 1) {slideIndex = slides.length}
                              for (i = 0; i < slides.length; i++) {
                                  slides[i].style.display = "none";
                              }
                              for (i = 0; i < dots.length; i++) {
                                  dots[i].className = dots[i].className.replace(" active", "");
                              }
                              slides[slideIndex-1].style.display = "block";
                              dots[slideIndex-1].className += " active";
                            }
                            </script>

                        
                </div>

                <form action="../logout.php">
                    <input id="logout-btn" type="submit" value="LOGOUT"/>
                </form>

            </div>
        </div>

    </body>
</html>