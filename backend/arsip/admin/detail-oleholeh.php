<?php $halaman = "oleholeh"; ?>
<?php include 'header.php'; ?>
<?php
include("koneksi.php");
$id = $_GET["id"];
$sql = "SELECT * FROM tboleholeh  WHERE kdoleholeh=$id";
$rpaket = mysqli_query($con,$sql);
$df = mysqli_fetch_array($rpaket);                                     
$oleholeh = $df["oleholeh"];
$lokasi = $df["lokasi"];
$konten = $df["konten"];
$waktu = $df["waktu"];
$foto = $df["foto"];
$detail = $df["detail"];
echo '';
?>
<div id="content">
<!--breadcrumbs-->
<div id="content-header">
	<div id="breadcrumb">
		<a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
		<a href="oleholeh.php" title="Go to Oleh-oleh" class="tip-bottom"><i class="icon-coffee"></i>Oleh-Oleh</a>
		<a class="current"><i class="icon-book"></i>Detail</a>
	</div>
    <h1> </h1>
    <a style="margin-left:25px" href="oleholeh.php" class="btn btn-success"><i class="icon-home"></i>&nbsp Kembali</a>
</div>

<!--Action boxes-->
<div class="container-fluid">
  <div class="row-fluid">
      <!--PERTAMA-->
      	<div class="widget-box">
      	  	<div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
            	<h5>Detail Oleh-Oleh "<?php echo $oleholeh;?>"</h5>
          	</div>
       		<div class="widget-content nopadding">
			<form method="post" class="form-horizontal">
		    	<div class="control-group">
          		<label class="control-label">Nama Tempat Oleh-Oleh  :</label>
          			<div class="controls">
            		<input type="text" readonly class="span10" value="<?php echo $oleholeh;?>" />
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
          		<label class="control-label">Jam Operasional  :</label>
          			<div class="controls">
            		<input type="text" readonly class="span10" value="<?php echo $waktu;?>" />
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