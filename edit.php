<?php include('config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['id'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$id = $_GET['id'];

			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM jadwal WHERE id='$id'") or die(mysqli_error($koneksi));

			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>

		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$Nama_tamu	= $_POST['nama_tamu'];
			$Keperluan	= $_POST['keperluan'];
			$Pejabat	= $_POST['pejabat'];
			$jadwal_mulai = $_POST['jadwal_mulai'];
			$jadwal_selesai = $_POST['jadwal_selesai'];


			$sql = mysqli_query($koneksi, "UPDATE jadwal SET nama_tamu='$Nama_tamu', keperluan='$Keperluan', pejabat='$Pejabat', jadwal_mulai='$jadwal_mulai', jadwal_selesai='$jadwal_selesai' WHERE id='$id'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=tampil_jdw";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<form action="index.php?page=edit_jdw&id=<?php echo $id; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Tamu</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nama_tamu" class="form-control" value="<?php echo $data['nama_tamu']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Keperluan</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="keperluan" class="form-control" value="<?php echo $data['keperluan']; ?>" required>	
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Pejabat</label>
				<div class="col-md-6 col-sm-6">
					<select name="pejabat" class="form-control" required>
						<option value="">Pilih Pejabat yang ditemui</option>
						<option value="Indriyanto, SH., M.Si" <?php if($data['pejabat'] == 'Indriyanto, SH., M.Si'){ echo 'selected'; } ?>>Indriyanto, SH., M.Si</option>
						<option value="Endah Murwaningrum, SS, MM" <?php if($data['pejabat'] == 'Endah Murwaningrum, SS, MM'){ echo 'selected'; } ?>>Endah Murwaningrum, SS, MM</option>
						<option value="Putut Kuncoro, S.Kom" <?php if($data['pejabat'] == 'Putut Kuncoro, S.Kom'){ echo 'selected'; } ?>>Putut Kuncoro, S.Kom</option>
					</select>
				</div>
			</div>
			<!------  ------->
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jadwal Mulai</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="jadwal_mulai" class="form-control" value="<?php echo $data['jadwal_mulai']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jadwal Selesai</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="jadwal_selesai" class="form-control" value="<?php echo $data['jadwal_selesai']; ?>" required>
				</div>
			</div>
			<!--------- ----->
			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="index.php?page=tampil_jdw" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>
