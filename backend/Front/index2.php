<!DOCTYPE html>
<html lang="en">

<?php 
    if(isset($_POST["login"])){

        $tujuan = $_POST["login"];
        
        if($tujuan == "LOGIN"){
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            /* logika sederhana admin */
            if($username == "admin" && $password == "admin"){
                echo "<h1>Selamat Datang, ".$username."!</h1>";
            }else{
                echo "<h2>Username atau Password Salah!</h2>";
            }
    
        }else{
            $username = $_POST["username"];
            $password = $_POST["password"];
            $email = $_POST["email"];
    
            echo "<h1>Anda sudah terdaftar sebagai ".$username."!</h1>";
            
        }
    }   
?>

<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>

<html lang="en">
<head>
  <title>WISAKID</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="images/logo_gk.png" rel="icon">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">WISAKID</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Beranda</a></li>
          <li class="nav-item"><a href="destinasi2.php" class="nav-link">Destinasi</a></li>
          <li class="nav-item"><a href="hotel2.php" class="nav-link">Hotel</a></li>
          <li class="nav-item"><a href="restoran.php" class="nav-link">Restoran</a></li>
          <li class="nav-item"><a href="oleholeh.php" class="nav-link">Oleh-oleh</a></li>
          <li class="nav-item"><a href="login.php" class="nav-link"><span>Welcome <?php echo $_SESSION['username']?></span></a></li>
          <li class="nav-item cta"><a href="logout.php" class="nav-link"><span> Logout</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <div id="lp" class="hero-wrap d-block w-100" style="background-image: url('images/img-20170314-wa0120-largejpg.jpg');">
    <div class="overlay"></div>
    <div class="container pb-5">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
        data-scrollax-parent="true">
        <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-4" data-scrollax="properties: { translateY: '50%', opacity: 1.6 }"><strong>Jelajahi
              <br></strong>Daerah Gunung Kidul</h1>
          <p data-scrollax="properties: { translateY: '50%', opacity: 1.6 }">Temukan tempat bagus untuk
            berwisata, menginap,
            makan, dan belanja</p>
          <p class="browse d-md-flex height">
            <span class="d-flex justify-content-md-center align-items-md-center"><a href="restoran.php"><i
                  class="flaticon-fork"></i>Restoran</a></span>
            <span class="d-flex justify-content-md-center align-items-md-center"><a href="hotel2.php"><i
                  class="flaticon-hotel"></i>Hotel</a></span>
            <span class="d-flex justify-content-md-center align-items-md-center"><a href="destinasi.php"><i
                  class="flaticon-meeting-point"></i>Wisata</a></span>
            <span class="d-flex justify-content-md-center align-items-md- center"><a href="oleholeh.php"><i
                  class="flaticon-shopping-bag"></i>Oleh-Oleh</a></span>
          </p>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-destination">
    <div class="container">
      <div class="row justify-content-start mb-3 pb-2">
        <div class="col-md-7 heading-section ftco-animate">
          <h2 class="mb-4"><strong>Destinasi </strong>Wisata</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="destination-slider owl-carousel ftco-animate">
            <div class="item">
              <div class="destination">
                <a href="#" class="img d-flex justify-content-center align-items-center"
                  style="background-image: url(images/des_1.jpg);">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search2"></span>
                  </div>
                </a>
                <div class="text p-3">
                  <h3><a href="#">Pantai Indrayanti</a></h3>
                  <p>Pantai berpasir putih dengan air laut jernih. Menawarkan sensasi dinner 
                    romantis bertabur bintang di restoran yang terletak di tepi pantai.</p>
                  <hr>
                  <p class="bottom-area d-flex">
                    <span><i class="icon-map-o"></i> Tanjungsari</span>
                    <span class="ml-auto"><a href="ptindrayanti.php">Detail</a></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="destination">
                <a href="#" class="img d-flex justify-content-center align-items-center"
                  style="background-image: url(images/des_2.jpg);">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search2"></span>
                  </div>
                </a>
                <div class="text p-3">
                  <h3><a href="#">Puncak Kosakora</a></h3>
                  <p>Tanjung pesisir & tempat matahari terbenam populer yang menawarkan kemah pedesaan, 
                    jalan setapak & panorama.</p>
                  <hr>
                  <p class="bottom-area d-flex">
                    <span><i class="icon-map-o"></i> Tanjungsari</span>
                    <span class="ml-auto"><a href="#">Detail</a></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="destination">
                <a href="#" class="img d-flex justify-content-center align-items-center"
                  style="background-image: url(images/des_3.jpg);">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search2"></span>
                  </div>
                </a>
                <div class="text p-3">
                  <h3><a href="#">Pantai Pok Tunggal</a></h3>
                  <p>Pantai pasir putih yang dikelilingi tebing & pepohonan, dengan pohon 
                    ikonis yang populer untuk tempat foto.</p>
                  <hr>
                  <p class="bottom-area d-flex">
                    <span><i class="icon-map-o"></i> Tepus</span>
                    <span class="ml-auto"><a href="#">Detail</a></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="destination">
                <a href="#" class="img d-flex justify-content-center align-items-center"
                  style="background-image: url(images/des_4.jpg);">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search2"></span>
                  </div>
                </a>
                <div class="text p-3">
                  <h3><a href="#">Goa Jomblang</a></h3>
                  <p>Gua vertikal yang bertipe collapse doline. Terbentuk akibat 
                    proses geologi amblasnya tanah beserta vegetasi yang terjadi ribuan tahun lalu. </p>
                  <hr>
                  <p class="bottom-area d-flex">
                    <span><i class="icon-map-o"></i> Semanu</span>
                    <span class="ml-auto"><a href="#">Detail</a></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="destination">
                <a href="#" class="img d-flex justify-content-center align-items-center"
                  style="background-image: url(images/des_5.jpg);">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search2"></span>
                  </div>
                </a>
                <div class="text p-3">
                  <h3><a href="#">Pantai Siung</a></h3>
                  <p>Pantai berpasir yang tertutup pepohonan & tebing yang populer dengan 
                    pemanjat tebing & perahu nelayan cadik.</p>
                  <hr>
                  <p class="bottom-area d-flex">
                    <span><i class="icon-map-o"></i> Tepus</span>
                    <span class="ml-auto"><a href="#">Detail</a></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="destination">
                <a href="#" class="img d-flex justify-content-center align-items-center"
                  style="background-image: url(images/des_6.jpeg);">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search2"></span>
                  </div>
                </a>
                <div class="text p-3">
                  <h3><a href="#">Goa Pindul</a></h3>
                  <p>Gua eksotik dengan aliran sungai bawah tanah di Gunungkidul. 
                    Bermain di kolam dengan "cahaya surga".</p>
                  <hr>
                  <p class="bottom-area d-flex">
                    <span><i class="icon-map-o"></i> Karangmojo</span>
                    <span class="ml-auto"><a href="#">Detail</a></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-start mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate">
          <span class="subheading">Special Offers</span>
          <h2 class="mb-4"><strong>Hotel</strong> & Penginapan</h2>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm col-md-6 col-lg ftco-animate">
          <div class="destination">
            <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
              style="background-image: url(images/ht_1.jpg);">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search2"></span>
              </div>
            </a>
            <div class="text p-3">
              <div class="d-flex">
                <div class="one">
                  <h3><a href="htkukupindah.php">Hotel Kukup Indah</a></h3>
                  <p class="rate">
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star-o"></i>
                  </p>
                </div>
                <div class="two">
                  <span class="price per-price">Rp138.625<br><small>/malam</small></span>
                </div>
              </div>
              <p>Kawasan Pantai Kukup, Jl. Pantai Sel. Jawa, Ngepung, Kemadang, Kec. Tanjungsari, 
                Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55881</p>
              <hr>
              <p class="bottom-area d-flex">
                <span><i class="icon-map-o"></i></span>
                <span class="ml-auto"><a href="#">Detail</a></span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm col-md-6 col-lg ftco-animate">
          <div class="destination">
            <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
              style="background-image: url(images/ht_2.jpg);">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search2"></span>
              </div>
            </a>
            <div class="text p-3">
              <div class="d-flex">
                <div class="one">
                  <h3><a href="#">Hotel Dea Lokha</a></h3>
                  <p class="rate">
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star-o"></i>
                  </p>
                </div>
                <div class="two">
                  <span class="price per-price">Rp368.458<br><small>/malam</small></span>
                </div>
              </div>
              <p>Jl. KH Agus Salim, Ledoksari, Kepek, Kec. Wonosari, Kabupaten Gunung Kidul, 
                Daerah Istimewa Yogyakarta 55813</p>
              <hr>
              <p class="bottom-area d-flex">
                <span><i class="icon-map-o"></i></span>
                <span class="ml-auto"><a href="#">Detail</a></span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm col-md-6 col-lg ftco-animate">
          <div class="destination">
            <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
              style="background-image: url(images/ht_3.jpg);">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search2"></span>
              </div>
            </a>
            <div class="text p-3">
              <div class="d-flex">
                <div class="one">
                  <h3><a href="#">Bamboo Lengkung Cottages</a></h3>
                  <p class="rate">
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star-o"></i>
                  </p>
                </div>
                <div class="two">
                  <span class="price per-price">Rp300.000<br><small>/malam</small></span>
                </div>
              </div>
              <p>VJ27+79J, Pantai Indrayanti, Jalan Pantai Selatan Jawa, Tepus, Pantai, Tepus, 
                Gunung Kidul, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta</p>
              <hr>
              <p class="bottom-area d-flex">
                <span><i class="icon-map-o"></i></span>
                <span class="ml-auto"><a href="#">Detail</a></span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm col-md-6 col-lg ftco-animate">
          <div class="destination">
            <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
              style="background-image: url(images/ht_4.jpg);">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search2"></span>
              </div>
            </a>
            <div class="text p-3">
              <div class="d-flex">
                <div class="one">
                  <h3><a href="#">Rock Garden Homestay</a></h3>
                  <p class="rate">
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star-o"></i>
                  </p>
                </div>
                <div class="two">
                  <span class="price per-price">Rp186.259<br><small>/malam</small></span>
                </div>
              </div>
              <p>Pantai Sundak Timur, Jl. Pantai Sel. Jawa, Pantai, Tepus, Kec. Tepus, 
                Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55881</p>
              <hr>
              <p class="bottom-area d-flex">
                <span><i class="icon-map-o"></i></span>
                <span class="ml-auto"><a href="#">Detail</a></span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm col-md-6 col-lg ftco-animate">
          <div class="destination">
            <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
              style="background-image: url(images/ht_5.jpg);">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search2"></span>
              </div>
            </a>
            <div class="text p-3">
              <div class="d-flex">
                <div class="one">
                  <h3><a href="#">Baron Lighthouse Cottage</a></h3>
                  <p class="rate">
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star-o"></i>
                  </p>
                </div>
                <div class="two">
                  <span class="price per-price">Rp1.300.000<br><small>/malam</small></span>
                </div>
              </div>
              <p>VG9X+M9H, Rejosari, Kemadang, Kec. Tanjungsari, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta</p>
              <hr>
              <p class="bottom-area d-flex">
                <span><i class="icon-map-o"></i></span>
                <span class="ml-auto"><a href="#">Detail</a></span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-start mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate">
          <span class="subheading">Special Offers</span>
          <h2 class="mb-4"><strong>Restoran</strong> Restoran</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="destination">
            <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
              style="background-image: url(images/rt_1.jpg);">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search2"></span>
              </div>
            </a>
            <div class="text p-3">
              <h3><a href="rtteraspetruk.php">Teras Petruk</a></h3>
              <p class="rate">
                <i class="icon-star"></i>
                <i class="icon-star"></i>
                <i class="icon-star"></i>
                <i class="icon-star"></i>
                <i class="icon-star-o"></i>
              </p>
              <p>Ngopi dengan suasana yang syahdu dan asik, ditemani rimbun pepohonan </p>
              <hr>
              <p class="bottom-area d-flex">
                <span><i class="icon-map-o"></i> Wonosari</span>
                <span class="ml-auto"><a href="#">Detail</a></span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="destination">
            <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
              style="background-image: url(images/rt_2.jpg);">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search2"></span>
              </div>
            </a>
            <div class="text p-3">
              <h3><a href="#">The Manglung</a></h3>
              <p class="rate">
                <i class="icon-star"></i>
                <i class="icon-star"></i>
                <i class="icon-star"></i>
                <i class="icon-star"></i>
                <i class="icon-star-o"></i>
              </p>
              <p>Tempat simpel di puncak bukit dengan tempat duduk outdoor, panorama kota, 
                hidangan klasik & minuman kreatif.</p>
              <hr>
              <p class="bottom-area d-flex">
                <span><i class="icon-map-o"></i> Patuk</span>
                <span class="ml-auto"><a href="#">Detail</a></span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="destination">
            <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
              style="background-image: url(images/rt_3.jpg);">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search2"></span>
              </div>
            </a>
            <div class="text p-3">
              <h3><a href="#">Warung Simbok</a></h3>
              <p class="rate">
                <i class="icon-star"></i>
                <i class="icon-star"></i>
                <i class="icon-star"></i>
                <i class="icon-star"></i>
                <i class="icon-star-o"></i>
              </p>
              <p>Kuliner dgn menu masakan tradisional jawa & aneka olahan daging ayam & bebek</p>
              <hr>
              <p class="bottom-area d-flex">
                <span><i class="icon-map-o"></i> Wonosari</span>
                <span class="ml-auto"><a href="#">Detail</a></span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="destination">
            <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
              style="background-image: url(images/rt_4.jpg);">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search2"></span>
              </div>
            </a>
            <div class="text p-3">
              <h3><a href="#">SalSari Resto & Coffee</a></h3>
              <p class="rate">
                <i class="icon-star"></i>
                <i class="icon-star"></i>
                <i class="icon-star"></i>
                <i class="icon-star"></i>
                <i class="icon-star-o"></i>
              </p>
              <p>Restoran dan kafe yang menyajikan aneka menu makanan 
                halal yang lezat serta minuman sehat harga terjangkau dengan suasana asri.</p>
              <hr>
              <p class="bottom-area d-flex">
                <span><i class="icon-map-o"></i> Playen</span>
                <span class="ml-auto"><a href="#">Detail</a></span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container-fluid">
      <div class="row justify-content-start mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate">
          <span class="subheading">Special Offers</span>
          <h2><strong>Pusat</strong> Oleh-oleh</h2>
        </div>
      </div>
      <div class="row d-flex">
        <div class="col-sm col-md-6 col-lg d-flex ftco-animate"> 
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20"
              style="background-image: url('images/oo_1.jpg');">
            </a>
            <div class="text p-3">
              <h3 class="heading mt-3"><a href="oogtyutum.php">Gathot Thiwul Yu Tum</a></h3>
              <p>Kios yang menyediakan aneka oleh-oleh khas Gunung Kidul, seperti gatot, thiwul, 
                rengginang, dan pathilo.</p>
              <hr>
              <p class="bottom-area d-flex">
                <span><i class="icon-map-o"></i> Wonosari</span>
                <span class="ml-auto"><a href="#">Detail</a></span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm col-md-6 col-lg d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20"
              style="background-image: url('images/oo_2.jpg');">
            </a>
            <div class="text p-3">
              <h3 class="heading mt-3"><a href="#">Walang Goreng Pak Gareng</a></h3>
              <p>Terkenal akan produk olahan jangkrik gorengnya, Toko oleh-oleh Pak Gareng 
                juga memiliki jenis camilan Jogja lain seperti bakpia, dodol, geplak, hingga olahan singkong.</p>
              <hr>
              <p class="bottom-area d-flex">
                <span><i class="icon-map-o"></i> Wonosari</span>
                <span class="ml-auto"><a href="#">Detail</a></span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm col-md-6 col-lg d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20"
              style="background-image: url('images/oo_3.jfif');">
            </a>
            <div class="text p-3">
              <h3 class="heading mt-3"><a href="#">IKASARI Oleh-Oleh</a></h3>
              <p>Memiliki produk unggulan bakpia. 
                Juga tersedia oleh-oleh Jogja lainnya mulai dari geplak hingga tiwul.</p>
              <hr>
              <p class="bottom-area d-flex">
                <span><i class="icon-map-o"></i> Wonosari</span>
                <span class="ml-auto"><a href="#">Detail</a></span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm col-md-6 col-lg d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20"
              style="background-image: url('images/oo_4.jpg');">
            </a>
            <div class="text p-3">
              <h3 class="heading mt-3"><a href="#">Griya Cokelat Nglanggeran</a></h3>
              <p>Griya Cokelat Nglanggeran langsung dikelola masyarakat setempat. 
                Di sini ada produk olahan asli seperti bubuk minuman cokelat yang diberi nama chocomix.</p>
              <hr>
              <p class="bottom-area d-flex">
                <span><i class="icon-map-o"></i> Patuk</span>
                <span class="ml-auto"><a href="#">Detail</a></span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm col-md-6 col-lg d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20"
              style="background-image: url('images/oo_5.jpg');">
            </a>
            <div class="text p-3">
              <h3 class="heading mt-3"><a href="#">Pusat Oleh-oleh Mbak Tiwiek</a></h3>
              <p>Makanannya lengkap ada bakpia pathuk, geplak, dodol, dan oleh oleh khas Gunung Kidul lainnya. </p>
              <hr>
              <p class="bottom-area d-flex">
                <span><i class="icon-map-o"></i> Wonosari</span>
                <span class="ml-auto"><a href="#">Detail</a></span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p>
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved 
            <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
              target="_blank">WISAKID</a>
          </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>