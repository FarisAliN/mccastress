<?php $halaman = "hotel"; ?>
<?php include 'header.php'; ?>

<!--main-container-part-->
<div id="content">
<?php
include("koneksi.php");
$id = $_GET["id"];
$sql = "SELECT * FROM tbhotel  WHERE kdhotel=$id";
$rpaket = mysqli_query($con,$sql);
$df = mysqli_fetch_array($rpaket);                                     
$hotel = $df["hotel"];
$lokasi = $df["lokasi"];
$konten = $df["konten"];
$harga = $df["harga"];
$foto = $df["foto"];
$detail = $df["detail"];

echo '';
?>
<!--breadcrumbs-->
<div id="content-header">
	<div id="breadcrumb">
		<a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
		<a href="hotel.php" title="Go to Hotel" class="tip-bottom"><i class="icon icon-bi bi-building"></i> Hotel</a>
		<a class="current"><i class="icon-book"></i>Detail</a>
	</div>
    <h1> </h1>
    <a style="margin-left:25px" href="hotel.php" class="btn btn-success"><i class="icon-home"></i>&nbsp Kembali</a>
</div>

<!--Action boxes-->
<div class="container-fluid">
  <div class="row-fluid">
      <!--PERTAMA-->
      	<div class="widget-box">
      	  	<div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
            	<h5>Detail Hotel "<?php echo $hotel;?>"</h5>
          	</div>
       		<div class="widget-content nopadding">
			<form method="post" class="form-horizontal">
		    	<div class="control-group">
          		<label class="control-label">Hotel  :</label>
          			<div class="controls">
            		<input type="text" readonly class="span10" value="<?php echo $hotel;?>" />
          			</div>
        		</div>
        		<div class="control-group">
          		<label class="control-label">Lokasi  :</label>
          			<div class="controls">
            		<textarea class="span10" readonly=""><?php echo $lokasi;?></textarea>
          			</div>
        		</div>
        		<div class="control-group">
          		<label class="control-label">Gambar  :</label>
          			<div class="controls">
					  <?php echo "<img src='../img/$foto' />";?>
          			</div>
        		</div>
        		<div class="control-group">
          		<label class="control-label">Harga  :</label>
          			<div class="controls">
            		<input type="text" readonly class="span10" value="<?php echo $harga;?>" />
          			</div>
        		</div>
        		<div class="control-group">
          		<label class="control-label">Konten  :</label>
          			<div class="controls">
					  <textarea style="width:825px; height:500px" class="ckeditor" id="ckeditor" readonly=""><?php echo $konten;?></textarea>
          			</div>
        		</div>
				<div class="control-group">
          		<label class="control-label">Link Web Detail  :</label>
          			<div class="controls">
					  <textarea style="width:500px; height:100px" class="ckeditor" id="ckeditor" readonly=""><?php echo $detail;?></textarea>
          			</div>
        		</div>
			</form>
			</div>
      	</div>
      <!--END PERTAMA-->
  </div>
</div>
<!--End Action boxes-->

</div>
<!--end-main-container-part-->
<?php include 'footer.php'; ?>