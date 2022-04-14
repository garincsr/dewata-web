<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DewataWeb</title>
    <link rel="icon" href="img/dewataicon.jpg">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- magnific CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <!-- niceselect CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- slick CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Oleo+Script:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="sub_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="sub_menu_right_content">
                            <span>Pulau Dewata Bali</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="sub_menu_social_icon">
                            <a href="https://www.facebook.com/"><i class="flaticon-facebook"></i></a>
                            <a href="https://twitter.com/"><i class="flaticon-twitter"></i></a>
                            <a href="https://www.instagram.com/"><i class="flaticon-instagram"></i></a>
                            <span><i class="flaticon-phone-call"></i>+628xxxxxxxx</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu_iner">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="about.php"> <img src="img/dewatalogo.png" width="150" alt="logo"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item justify-content-left" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.php">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pariwisata.php">Pariwisata</a>
                                    </li>
                                </ul>
                            </div>
                            <?php if(isset($_SESSION['status_login'])){?>
                                <a href="../Admin/dashboard.php" class="btn_1 d-none d-lg-block">Dash.. Admin</a>
                            <?php } else{ ?>
                            <a href="../Admin/login.php" class="btn_1 d-none d-lg-block">Admin</a>
                            <?php } ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Pulau Dewata Bali</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- Sejarah Bali-->
    <section class="about_us section_padding">
        <div class="container">
            <h1 class="text-center mb-5" style="font-size:4em;font-weight:800;">Sejarah Pulau Bali</h1>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_img">
                        <img src="img/sejarahbali3.jpg" alt="#"> 
                        <br> <br>
                        <img src="img/sejarahbali4.jpg" alt="#">
                        <h6><i>( Sumber Gambar : https://web.facebook.com/SejarahBali/ )</i></h6>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_text text-justify">
                        <p>Pulau Bali kuno telah dihuni oleh bangsa Austronesian sekitar 2000 tahun sebelum masehi. Yang bermigrasi dan berasal dari Taiwan melalui Maritime Asia Tenggara. Budaya dan bahasa dari orang Bali demikian erat kaitannya dengan orang-orang dari kepulauan Indonesia, Malaysia, Filipina, dan Oseania. Penemuan purbakala seperti Alat-alat batu yang berasal zaman Austronesia telah ditemukan di dekat desa Cekik di sebelah barat pulau Bali.</p><br>
                        <p>Masa Bali kuno terdapat sembilan sekte Hindu yaitu Pasupata, Bhairawa, Siwa Shidanta, Waisnawa, Bodha, Brahma, Resi, Sora dan Ganapatya. Setiap sekte menghormati dewa tertentu sebagai Ketuhanan pribadinya. Budaya Bali sangat dipengaruhi oleh budaya India, Cina, dan khususnya Hindu. Budaya tersebut dimulai sekitar abad 1 Masehi.</p><br>
                        <p>Nama Bali Dwipa (“Pulau Bali”) telah ditemukan dari berbagai prasasti, termasuk pilar prasasti Blanjong yang ditulis oleh Sri Kesari Warmadewa pada tahun 914 masehi yang menyebutkan “Walidwipa”.</p><br>
                        <p>Pada masa itu sistem irigasi Subak yang kompleks sudah dikembangkan untuk menanam padi. Beberapa tradisi keagamaan dan budaya masih ada sampai saat ini dan dapat ditelusuri kembali saat anda ke bali (Informasi Umum Tentang Bali).</p><br>
                        <p>Kerajaan Hindu Majapahit (1293-1520 Masehi) di Jawa Timur mendirikan sebuah koloni di Bali pada tahun 1343. Pada abad ke-15 Masehi ketika kerajaan Majapahit dikalahkan oleh kekuatan kerajaan Islam Demak, ada eksodus besar-besaran orang Jawa-Hindu dari intelektual, seniman, pendeta, dan musisi dari pulau Jawa ke pulau Bali.</p><br>
                        <h6 class="text-justify">( Sumber : https://tarubali.baliprov.go.id/sejarah-pulau-bali/ )</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sejarah Bali end-->

    <!-- Tentang Bali -->

    <section class="about_us" style="background-color: #0c3e72;">
        <div class="container pt-5 pb-5">
            <h1 class="text-center mb-5" style="font-size:4em;font-weight:800;color:#eeeeee;padding-top:100px; padding-bottom:20px">Tentang Pulau Bali</h1>
            <p class="text-justify" style="color:#eeeeee;">Selain dataran utama Pulau dewata Bali, juga terdiri dari pulau-pulau kecil diantaranya pulau Nusa Lembongan, Ceningan, Nusa Penida dan Menjangan. Pulau-pulau tersebut merupakan wilayah dari Provinsi Bali.
            Mayoritas penduduknya beragama Hindu, identik dengan bangunan-bangunan pura sebagai stana Tuhan, sehingga Bali dikenal juga sebagai pulau Seribu Pura dan Pulau Dewata,  Bali juga memiliki banyak keunikan, budaya seni, tradisi dan alam cantik sehingga menjadi destinasi wisata dunia</p><br>
            <div class="row" style="margin-bottom: 70px;">
                <div class="col-lg-6">
                    <div class="about_text text-justify">
                        <h5 class="text-justify">( Sumber : https://www.balitoursclub.net/pulau-bali/ )</h5>
                        <p style="color: #eeeeee;">Pulau Dewata Bali, sebagai tujuan dan destinasi wisata dunia karena memiliki keunikan budaya dan tradisi, beragam hasil karya seni dan tentunya berbagai objek wisata yang mengelilinginya. Sehingga ketika anda liburan ke pulau Dewata Bali, anda bisa menemukan banyak jenis keindahan alam, seperti destinasi wisata pantai, sawah berundak, air terjun, danau pegunungan, sehingga anda bisa memilih tujuan tour dengan mudah.</p>
                        <p style="color: #eeeeee;">Dikenal sebagai pulau Dewata, karena keyakinan umat hindu akan manifestasi Tuhan dalam wujud Dewa yang disthanakan di sejumlah pura-pura besar di pulau Dewata Bali, beberapa diantaranya Pura Besakih, Pura Lempuyang, Pura Andakasa, Uluwatu, Tanah lot, Danau Beratan Bedugul, Batukaru, Silayukti, sejumlah pura tersebut juga menjadi destinasi wisata, melengkapi tujuan tour saat wisatawan liburan di pulau Dewata Bali.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_img">
                        <img src="img/tentangbali2.jpg" alt="#"> 
                        <h6 style="color:darkorange"><i>( Sumber Gambar: https://wallpaperaccess.com/bali-indonesia-hd#google_vignette)</i></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tentang Bali end-->


    <!--::gallery part start::-->
    <section class="our_gallery section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>Galeri Pulai Dewata</h2>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-12">
                    <div class="card-columns">
                        <div class="card">
                            <a href="img/gallery/galeri1.png" class="gallery_img">
                                <img src="img/gallery/galeri1.png" class="card-img-top" alt="">
                            </a>
                        </div>
                        <div class="card">
                            <a href="img/gallery/galeri2.jpg" class="gallery_img">
                                <img src="img/gallery/galeri2.jpg" class="card-img-top" alt="">
                            </a>
                        </div>
                        <div class="card">
                            <a href="img/gallery/galeri3.jpg" class="gallery_img">
                                <img src="img/gallery/galeri3.jpg" class="card-img-top" alt="">
                            </a>
                        </div>
                        <div class="card">
                            <a href="img/gallery/galeri4.jpg" class="gallery_img">
                                <img src="img/gallery/galeri4.jpg" class="card-img-top" alt="">
                            </a>
                        </div>
                        <div class="card">
                            <a href="img/gallery/galeri5.jpg" class="gallery_img">
                                <img src="img/gallery/galeri5.jpg" class="card-img-top" alt="">
                            </a>
                        </div>
                        <div class="card">
                            <a href="img/gallery/galeri6.jpg" class="gallery_img">
                                <img src="img/gallery/galeri6.jpg" class="card-img-top" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::gallery part end::-->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="single-footer-widget">
                        <h4>Menu DewataWeb</h4>
                        <ul>
                            <li><a href="about.php">About Bali</a></li>
                            <li><a href="pariwisata.php">Pariwisata</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-footer-widget footer_icon">
                        <h4>Hubungi Kami</h4>
                        <p>Jl Canggu, Bali Selatan, Bali , +628xxxxxxxx</p>
                        <span>dewataweb@gmail.com</span>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/"><i class="ti-facebook"></i></a>
                            <a href="https://twitter.com/"><i class="ti-twitter-alt"></i></a>
                            <a href="https://www.instagram.com/"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <p class="footer-text m-0">
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> DewataWeb
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- magnific js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- masonry js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- masonry js -->
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>