<center><br><br><br><br><br><br><br><br>
<img src="assets/images/diskominfo.png" width="200px height="200px" /> <br>
<font Size="6">DISKOMINFO PATI</font>
</center>
<?php include('config.php'); ?>
		<?php
		if(isset($_POST['submit'])){
			$nama_tamu		= $_POST['nama_tamu'];
			$keperluan		= $_POST['keperluan'];
			$pejabat		= $_POST['pejabat'];
			$jadwal_mulai	= $_POST['jadwal_mulai'];
			$jadwal_selesai	= $_POST['jadwal_selesai'];

			$cek = mysqli_query($koneksi, "SELECT * FROM jadwal WHERE id='$id'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO jadwal(nama_tamu, keperluan, pejabat, jadwal_mulai, jadwal_selesai) 
				VALUES('$nama_tamu', '$keperluan', '$pejabat', '$jadwal_mulai', '$jadwal_selesai')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_jdw";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			} //else{
			// 	echo '<div class="alert alert-warning">Gagal, nIK sudah terdaftar.</div>';
			// }
		}
		?>

		<form action="index.php?page=tambah_jdw" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Tamu</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nama_tamu" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Keperluan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="keperluan" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Pejabat</label>
				<div class="col-md-6 col-sm-6">
					<div class="btn-group" data-toggle="buttons">
					<select name="pejabat" class="form-control" required>
						<option value="">Pilih Pejabat yang ditemui</option>
						<option value="Indriyanto, SH., M.Si">Indriyanto, SH., M.Si</option>
						<option value="Endah Murwaningrum, SS, MM">Endah Murwaningrum, SS, MM</option>
						<option value="Putut Kuncoro, S.Kom">Putut Kuncoro, S.Kom</option>
					</select>
					</div>
				</div>
			</div>
			<!------  ------->
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jadwal Mulai</label>
				<div class="col-md-6 col-sm-6">
					<input type="datetime-local" name="jadwal_mulai" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jadwal Selesai</label>
				<div class="col-md-6 col-sm-6">
					<input type="datetime-local" name="jadwal_selesai" class="form-control" required>
				</div>
			</div>
			<!--------- ----->
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>