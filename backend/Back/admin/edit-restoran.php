<?php $halaman = "restoran"; ?>
<?php include 'header.php'; ?>
<?php
include("koneksi.php");
$id = $_GET["id"];
$sql = "SELECT * FROM tbrestoran WHERE kdrestoran=$id";
$rpelanggan = mysqli_query($con,$sql);
$df = mysqli_fetch_array($rpelanggan);                                     
$restoran = $df["restoran"];
$lokasi = $df["lokasi"];
$konten = $df["konten"];
$waktu = $df["waktu"];
$foto = $df["foto"];
$detail = $df["detail"];
echo '';
?>

<!--main-container-part-->
<div id="content">
	<!--breadcrumbs-->
<div id="content-header">
	<div id="breadcrumb">
		<a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
		<a href="restoran.php" title="Back to Restoran" class="tip-bottom"><i class="icon-group"></i> Restoran</a>
		<a class="current">Edit</a>
	</div>
    <h1>Restoran - Edit!</h1>
</div>

<div class="container-fluid">
<hr>
  <div class="widget-box">
    <div class="widget-content nopadding">
	<form action="edit-restoran-act.php" method="post" class="form-horizontal">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="control-group">
          <label class="control-label">Judul  :</label>
          <div class="controls">
            <input type="text" class="span5" name="restoran" value="<?php echo $restoran;?>" />
          </div>
        </div>
        <div class="control-group">
          		<label class="control-label">Lokasi  :</label>
          			<div class="controls">
            		<textarea class="span5" name="lokasi"><?php echo $lokasi;?></textarea>
          			</div>
        		</div>
        		<div class="control-group">
          		<label class="control-label">Konten :</label>
          			<div class="controls">
					  <textarea class="span7 ckeditor" id="ckeditor" name="konten"><?php echo $konten;?></textarea>
          			</div>
        		</div>
        		<div class="control-group">
          		<label class="control-label">Waktu  :</label>
          			<div class="controls">
            		<input type="text" class="span5" name="waktu" value="<?php echo $waktu;?>" />
          			</div>
        		</div>
            	<div class="control-group">
          		<label class="control-label">Foto  :</label>
          			<div class="controls">
            		<input type="file" class="span5" name="foto";?>" />
          			</div>
        		</div>
				<div class="control-group">
          		<label class="control-label">Link Web Detail  :</label>
          			<div class="controls">
					<textarea class="span7 ckeditor" id="ckeditor" name="detail"><?php echo $detail;?></textarea>
          			</div>
        		</div>
        <div class="form-actions">
        	<div class="controls">
	          <a href="restoran.php" class="btn btn-danger col-md-2"> Kembali</a>
            <input type="submit" class="btn btn-primary" value="Simpan Edit">
      		</div>
        </div>
	</form>
</div>
</div>
</div>
<!--End-breadcrumbs-->
</div>
<!--end-main-container-part-->
<?php include 'footer.php'; ?>