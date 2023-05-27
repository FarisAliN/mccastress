<?php $halaman = "restoran"; ?>
<?php include 'header.php'; ?>

<!--main-container-part-->
<div id="content">

<!--breadcrumbs-->
<div id="content-header">
	<div id="breadcrumb">
		<a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
		<a class="current"><i class="icon-coffee"></i>Restoran</a> 
	</div> 
    <h1>Data Restoran</h1>
    <a style="margin-left:25px" data-toggle="modal" data-target="#myModal" class="btn btn-info"><i class="icon-plus"></i>&nbsp Tambah Data Baru</a>

</div>

<div class="container-fluid">
<hr>
	<div class="widget-box">
		<div class="widget-content nopadding">
      <table class="table table-bordered data-table" width="100%">
        <thead>
          <tr>
		  		<th width="5%">No.</th>
				<th width="20%">Restoran</th>
				<th width="30%">Lokasi</th>
				<th width="15%">Jam Operasional</th>
				<th width="20%">Opsi</th>
          </tr>
        </thead>
        <tbody>
<?php
$sql = "SELECT * FROM tbrestoran ORDER BY kdrestoran DESC";
$hsl = mysqli_query($con, $sql);
$nomor = 1;
while ($data=mysqli_fetch_array($hsl)) {
echo "<tr>";
echo "<td>$nomor</td>";
$id = $data["kdrestoran"];
$restoran = $data["restoran"];
$lokasi = $data["lokasi"];
$waktu = $data["waktu"];
echo "<td>$restoran</td>";
echo "<td>$lokasi</td>";
echo "<td>$waktu</td>";
echo "<td><a class='btn btn-warning' href='detail-restoran.php?id=$id'>Detail</a> "; 
echo "<a class='btn btn-success' href='edit-restoran.php?id=$id'>Edit</a> ";
echo "<a class='btn btn-danger' href='hapus-restoran.php?id=$id' onclick=\"return confirm('Yakin Mau Dihapus?');\">Hapus</a></td>";
echo "</tr>";
	$nomor++;
}
?>
            </tbody>
          	</table>
      	</div>
	</div>
</div>
<!--End-breadcrumbs-->

</div>
<!--end-main-container-part-->

<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Restoran Baru</h4>
			</div>
			<div class="modal-body">
				<form action="tambah-restoran-act.php" method="post">
					<div class="control-group">
			          <label class="control-label">Nama Restoran :</label>
			          <div class="controls">
			            <input type="text" class="span" name="restoran" placeholder="Restoran Baru">
			          </div>
			        </div>
			        <div class="control-group">
			          <label class="control-label">Lokasi :</label>
			          <div class="controls">
			            <textarea class="span5" name="lokasi" placeholder="Lokasi Restoran" ></textarea>
			          </div>
			        </div>
			        <div class="control-group">
			          <label class="control-label">Konten :</label>
			          <div class="controls">
			            <textarea class="span5" name="konten" placeholder="konten" ></textarea>
			          </div>
			        </div>
					<div class="control-group">
			          <label class="control-label">Jam Operasional :</label>
			          <div class="controls">
			            <input type="text" class="span5" name="waktu" placeholder="Jam Buka dan Jam Tutup" />
			          </div>
			        </div>
					<div class="control-group">
			          <label class="control-label">Detail :</label>
			          <div class="controls">
			            <textarea class="span5" name="detail" placeholder="Link web detail" ></textarea>
			        </div>
			        <div class="control-group">
			          <label class="control-label">Unggah Foto :</label>
			          <div class="controls">
			            <input type="file" class="span5" name="foto" />
			          </div>
			        </div>
			</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>