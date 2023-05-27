<?php include 'koneksi2.php'; ?>
<!DOCTYPE html>
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
	  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link href="images/logo_gk.png" rel="icon">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">WISAKID</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Beranda</a></li>
          <li class="nav-item"><a href="destinasi2.php" class="nav-link">Destinasi</a></li>
          <li class="nav-item"><a href="hotel2.php" class="nav-link">Hotel</a></li>
          <li class="nav-item active"><a href="restoran.php" class="nav-link">Restoran</a></li>
          <li class="nav-item"><a href="oleholeh.php" class="nav-link">Oleh-Oleh</a></li>
          <li class="nav-item cta"><a href="login.php" class="nav-link"><span>Masuk</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/Background\ Heha\ Sky\ View.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 4 }"><span class="mr-3"></span> <span>Pesan</span></p>
            <p><h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Restoran</h1></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-start mb-3 pb-3">
        <div class="col-md-7 heading-section ftco-animate">
          <h2 class="mb-4"><strong>Rekomendasi</strong> Restoran</h2>
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
              <h3><a href="rtthemanglung.php">The Manglung</a></h3>
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
                <span class="ml-auto"><a href="rtthemanglung.php">Detail</a></span>
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

	<div class="container-fluid">
    <div class="card"></div>
        <div class="card-header">
        <h3 class="mb-1"><strong>Data </strong>Restoran</h3>
        </div>
        <div class="card-body">
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Restoran</th>
                <th>Lokasi</th>
                <th>Jam Operasioanl</th>
                <th>Foto</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = mysqli_query($con, "SELECT * FROM tbrestoran");
                while($r = mysqli_fetch_array($sql)) {
            ?>
            <tr>
                <td></td>
                <td><?php echo $r['restoran'] ?></td>
                <td><?php echo $r['lokasi'] ?></td>
                <td><?php echo $r['waktu'] ?></td>
                <td><img src="../Back/img/<?php echo $r['foto'] ?>" height="150" width="200"></td>
                <td><?php echo $r['detail'] ?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
        </table>
        </div>
  	</div>


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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function () {
        var t = $('#example').DataTable({
            columnDefs: [
                {
                    searchable: false,
                    orderable: false,
                    targets: 0,
                },
            ],
            order: [[1, 'asc']],
        });
    
        t.on('order.dt search.dt', function () {
            let i = 1;
    
            t.cells(null, 0, { search: 'applied', order: 'applied' }).every(function (cell) {
                this.data(i++);
            });
        }).draw();
    });
  </script>

</body>
</html>