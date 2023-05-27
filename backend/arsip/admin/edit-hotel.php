<?php $halaman = "hotel"; ?>
<?php include 'header.php'; ?>
<?php
include("koneksi.php");
$id = $_GET["id"];
$sql = "SELECT * FROM tbhotel WHERE kdhotel=$id";
$rpelanggan = mysqli_query($con,$sql);
$df = mysqli_fetch_array($rpelanggan);                                     
$hotel = $df["hotel"];
$lokasi = $df["lokasi"];
$konten = $df["konten"];
$harga = $df["harga"];
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
		<a href="hotel.php" title="Back to Hotel" class="tip-bottom"><i class="icon-group"></i> Hotel</a>
		<a class="current">Edit</a>
	</div>
    <h1>Hotel - Edit!</h1>
</div>

<div class="container-fluid">
<hr>
  <div class="widget-box">
    <div class="widget-content nopadding">
	<form action="edit-hotel-act.php" method="post" class="form-horizontal">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="control-group">
          <label class="control-label">Nama Hotel  :</label>
          <div class="controls">
            <input type="text" class="span5" name="hotel" value="<?php echo $hotel;?>" />
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
          		<label class="control-label">Harga  :</label>
          			<div class="controls">
            		<input type="text" class="span5" name="harga" value="<?php echo $harga;?>" />
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
	          <a href="hotel.php" class="btn btn-danger col-md-2"> Kembali</a>
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