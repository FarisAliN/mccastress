<?php $halaman = "wisata"; ?>
<?php include 'header.php'; ?>
<?php
include("koneksi.php");
$id = $_GET["id"];
$sql = "SELECT * FROM tbwisata WHERE kdwisata=$id";
$rpelanggan = mysqli_query($con,$sql);
$df = mysqli_fetch_array($rpelanggan);                                     
$wisata = $df["wisata"];
$lokasi = $df["lokasi"];
$konten = $df["konten"];
$waktu = $df["waktu"];
$detail = $df["detail"];
$foto = $df["foto"];
echo '';
?>

<!--main-container-part-->
<div id="content">
	<!--breadcrumbs-->
<div id="content-header">
	<div id="breadcrumb">
		<a href="index.php" title="Back to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
		<a href="wisata.php" title="Back to Wisata" class="tip-bottom"><i class="icon-group"></i> Wisata</a>
		<a class="current">Edit</a>
	</div>
    <h1>Wisata - Edit!</h1>
</div>

<div class="container-fluid">
<hr>
  <div class="widget-box">
    <div class="widget-content nopadding">
	<form action="edit-wisata-act.php" method="post" class="form-horizontal">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="control-group">
          <label class="control-label">Judul  :</label>
          <div class="controls">
            <input type="text" class="span5" name="wisata" value="<?php echo $wisata;?>" />
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
          		<label class="control-label">Jam Operasioanal  :</label>
          			<div class="controls">
            		<input type="text" class="span5" name="waktu" value="<?php echo $waktu;?>" />
          			</div>
        		</div>
				<div class="control-group">
          		<label class="control-label">Foto  :</label>
          			<div class="controls">
            		<input type="file" class="span5" name="foto" />
          			</div>
        		</div>
				<div class="control-group">
          		<label class="control-label">Link Web Detail  :</label>
          			<div class="controls">
					<textarea class="span7 ckeditor" id="ckeditor" name="detail"><?php echo $detail;?></textarea>
          			</div>
        		</div>
				<div class="control-group">
          		<label class="control-label">Galeri Gambar 1 :</label>
          			<div class="controls">
            		<input type="file" class="span5" name="g1" />
          			</div>
        		</div>
				<div class="control-group">
          		<label class="control-label">Galeri Gambar 2 :</label>
          			<div class="controls">
            		<input type="file" class="span5" name="g2" />
          			</div>
        		</div>
				<div class="control-group">
          		<label class="control-label">Galeri Gambar 3 :</label>
          			<div class="controls">
            		<input type="file" class="span5" name="g3" />
          			</div>
        		</div>
				<div class="control-group">
          		<label class="control-label">Galeri Gambar 4 :</label>
          			<div class="controls">
            		<input type="file" class="span5" name="g4" />
          			</div>
        		</div>
        <div class="form-actions">
        	<div class="controls">
	          <a href="wisata.php" class="btn btn-danger col-md-2"> Kembali</a>
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