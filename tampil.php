<?php
//memasukkan file config.php
include('config.php');
?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Data Kunjungan Tamu</font></center>
		<hr>
		<a href="index.php?page=tambah_data"><button class="btn btn-dark right">Tambah Data</button></a>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action"  id="tabel_tampil">
			<thead>
				<tr>
					<th>NO.</th>
					<th>Nama Tamu</th>
					<th>Keperluan</th>
					<th>Pejabat</th>
					<th>Mulai</th>
					<th>Selesai</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel data tamu urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM jadwal ORDER BY id DESC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['nama_tamu'].'</td>
							<td>'.$data['keperluan'].'</td>
							<td>'.$data['pejabat'].'</td>
							<td>'.$data['jadwal_mulai'].'</td>
							<td>'.$data['jadwal_selesai'].'</td>
							<td>
								<a href="index.php?page=edit_jdw&id='.$data['id'].'" class="btn btn-secondary btn-sm">Edit</a>
								<a href="delete.php?id='.$data['id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
	</div>
	</div>
	
	
