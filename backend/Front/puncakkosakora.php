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
          <li class="nav-item active"><a href="destinasi2.php" class="nav-link">Destinasi</a></li>
          <li class="nav-item"><a href="hotel2.php" class="nav-link">Hotel</a></li>
          <li class="nav-item"><a href="restoran.php" class="nav-link">Restoran</a></li>
          <li class="nav-item"><a href="oleholeh.php" class="nav-link">Oleh-Oleh</a></li>
          <li class="nav-item cta"><a href="login.php" class="nav-link"><span>Masuk</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('../Back/img/kosakora4.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 4 }"><span class="mr-3"></span> <span>Wisata</span></p>
            <p><h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Puncak Kosakora</h1></p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
    <div class="card"></div>
        <div class="card-header"></div>
        <div class="card-body">
            <?php
                $sql = mysqli_query($con, "SELECT * FROM tbwisata INNER JOIN tbdetailwisata ON(tbwisata.kdwisata = tbdetailwisata.kdwisata) WHERE tbwisata.kdwisata=20");
                while($r = mysqli_fetch_array($sql)) {
            ?>
            <tr>
                <td></td>
                <td><?php echo $r['konten'] ?></td><br>
                <td><b>Jam Operasional:</b><br><?php echo $r['waktu'] ?></td><br><br>
                <td><b>Lokasi:</b><br><?php echo $r['lokasi'] ?><br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15798.440373115329!2d110.584068!3d-8.1411158!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd59af916e203a920!2sPuncak%20Kosakora!5e0!3m2!1sid!2sid!4v1672675825530!5m2!1sid!2sid" 
                  width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </td><br><br><br>
                <td><h5><b>Galeri Foto:</b></h5></td>
                <td><img src="../Back/img/<?php echo $r['g1'] ?>" height="250" width="330"></td>
                <td><img src="../Back/img/<?php echo $r['g2'] ?>" height="250" width="330"></td>
                <td><img src="../Back/img/<?php echo $r['g3'] ?>" height="250" width="330"></td>
                <td><img src="../Back/img/<?php echo $r['g4'] ?>" height="250" width="330"></td>
                
            </tr>
            <?php
                }
            ?>
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