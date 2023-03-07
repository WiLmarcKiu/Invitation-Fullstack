<?php require 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IC-Invitation</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- lihtbox css -->
    <link rel="stylesheet" href="css/lightbox.min.css">
    <!-- lihtbox jquery -->
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" />
</head>

<body>
    <!-- MUSIC -->
    <audio id="music">
        <source src="music/music.mp3" type="audio/mpeg">
    </audio>
    <!-- END MUSIC -->


    <!-- PLAY MUSIC BUTTON -->
    <div class="play-btn">
        <center><i class="fa-solid fa-play"></i></center>
    </div>
    <!-- END PLAY MUSIC BUTTON -->


    <!-- PAUSE MUSIC BUTTON -->
    <div class="pause-btn">
        <center><i class="fa-solid fa-pause"></i></center>
    </div>
    <!-- END PAUSE MUSIC BUTTON -->


    <!-- SCROLL TOP BUTTON -->
    <div class="scrollToTop-btn">
        <center><i class="fas fa-arrow-up align-middle"></i></center>
    </div>
    <!-- END SCROLL TOP BUTTON -->



    <!-- NAVBAR -->
    <header>
        <div class="navbar">
            <a href="" class="logo"><img src="img/logo.png" alt=""></a>
            <div class="navigation">
                <div class="nav-items">
                    <i class="uil uil-times nav-close-btn"></i>
                    <a href="#home"><i class="uil uil-home"></i>Home</a>
                    <a href="#kataMutiara"><i class="uil uil-paperclip"></i>Kutipan</a>
                    <a href="#undangan"><i class="uil uil-envelope-heart"></i>Invitation</a>
                    <a href="#gallery"><i class="uil uil-scenery"></i>Gallery</a>
                </div>
            </div>
            <i class="uil uil-apps nav-menu-btn"></i>
        </div>
    </header>
    <!-- END NAVBAR -->



    <!-- HOME -->
    <section id="home" class="home">
        <div class="contentHome">
            <img src="imgHome/home1.jpg" alt="">
            <h5>The Wedding Of</h5>
            <h1>Putra & Putri</h1>
            <h6>26 September 2022</h6>
        </div>
    </section>
    <!-- END HOME -->



    <!-- KATA MUTIARA -->
    <section id="kataMutiara" class="kataMutiara section">
        <p data-aos="fade-right" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom"><em>“Hai manusia, bertakwalah kepada Tuhan-mu Yang menciptakan kamu dari satu jiwa dan darinya Dia menciptakan jodohnya, dan mengembang-biakan dari keduanya banyak laki-laki dan perempuan; dan bertakwalah kepada Allah SWT yang dengan nama-Nya kamu saling bertanya, terutama mengenai hubungan tali kekerabatan. Sesungguhnya Allah SWT adalah pengawas atas kamu."</em></p>
        <p data-aos="fade-left" data-aos-duration="2000" class="sumber">QS An-Nisa: 1</p>
    </section>
    <!-- END KATA MUTIARA -->



    <!-- UNDANGAN -->
    <section id="undangan" class="undangan section">
        <h1 data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom" data-aos-delay="500">Join Us & Celebrate</h1>
        <h5 data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom" data-aos-delay="500">Akad Nikah</h5>
        <p data-aos="fade-right" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom" data-aos-delay="500">Dilaksanakan &nbsp;<i class="fa-solid fa-calendar-days"></i> 25 September 2022 &nbsp;|&nbsp; <i class="fa-solid fa-clock"></i> 20:00 WITA <br> Bertempat di Milenium Ballroom <br> Jl. Timor Raya</p>

        <h5 data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom" data-aos-delay="500">Resepsi</h5>
        <p data-aos="fade-right" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom" data-aos-delay="500">Dilaksanakan &nbsp;<i class="fa-solid fa-calendar-days"></i> 25 September 2022 &nbsp;|&nbsp; <i class="fa-solid fa-clock"></i> 20:00 WITA <br> Bertempat di Milenium Ballroom <br> Jl. Timor Raya</p>
    </section>
    <!-- END UNDANGAN -->



    <!-- GALLERY -->
    <section id="gallery" class="gallery section">
        <h1 data-aos="zoom-in-up" data-aos-duration="2000" data-aos-delay="200">Gallery Prewedding</h1>
        <div data-aos="zoom-in-right" data-aos-duration="2000" data-aos-delay="200" data-aos-anchor-placement="top-center" class="main">
            <a href="gallery/g4.jpg" data-lightbox="mygallery" data-title="Gallery 1">
                <img src="gallery/g4.jpg" alt="">
            </a>
            <a href="gallery/g2.jpg" data-lightbox="mygallery" data-title="Gallery 2">
                <img src="gallery/g2.jpg" alt="">
            </a>
            <a href="gallery/g3.jpg" data-lightbox="mygallery" data-title="Gallery 3">
                <img src="gallery/g3.jpg" alt="">
            </a>
        </div>
    </section>
    <!-- END GALLERY -->



    <script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/70cd04957d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.3.2.1.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        //? PLAY MUSIC BUTTON
        $(document).ready(function() {
            $(".play-btn").on("click", function() {
                $(".play-btn").fadeOut(500);
                $(".pause-btn").fadeIn(1000);
                $("#music")[0].play();
            });
        });
        $(document).ready(function() {
            $(".pause-btn").on("click", function() {
                $(".play-btn").fadeIn(1000);
                $(".pause-btn").fadeOut(500);
                $("#music")[0].pause();
            });
        });
    </script>

</body>

</html>