<?php include('config.php'); 

function hari_ini($day){
	$hari = $day;
 
	switch($hari){
		case 'Sun':
			$hari_ini = "Minggu";
		break;
 
		case 'Mon':			
			$hari_ini = "Senin";
		break;
 
		case 'Tue':
			$hari_ini = "Selasa";
		break;
 
		case 'Wed':
			$hari_ini = "Rabu";
		break;
 
		case 'Thu':
			$hari_ini = "Kamis";
		break;
 
		case 'Fri':
			$hari_ini = "Jumat";
		break;
 
		case 'Sat':
			$hari_ini = "Sabtu";
		break;
		
		default:
			$hari_ini = "Tidak di ketahui";		
		break;
	}
 
	return $hari_ini;
 
}

?>

<button id="button_unhide_1" type="button" class="btn btn-primary btn-lg btn-block ">Tampilkan Jadwal Indriyanto, SH., M.Si</button>
<div id="pejabat1">
    <h3>Indriyanto, SH., M.Si</h3>
    <table class="table" id="tabel_tampil1">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Pukul</th>
                <th>Keperluan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //query ke database SELECT tabel data tamu urut berdasarkan id yang paling besar
            $sql = mysqli_query($koneksi, "SELECT * FROM jadwal where pejabat='Indriyanto, SH., M.Si' ORDER BY id DESC") or die(mysqli_error($koneksi));
            //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
            if(mysqli_num_rows($sql) > 0){
                //membuat variabel $no untuk menyimpan nomor urut
                $no = 1;
                //melakukan perulangan while dengan dari dari query $sql
                while($data = mysqli_fetch_assoc($sql)){
                    $hari = hari_ini(date("D",strtotime($data['jadwal_mulai'])));
                    $date =  date(", d-m-Y",strtotime($data['jadwal_mulai']));
                    $time = date("H:i",strtotime($data['jadwal_mulai']));

                    //menampilkan data perulangan
                    echo '
                    <tr>
                        <td>'.$hari.$date.'</td>
                        <td>'.$time.'</td>
                        <td>'.$data['keperluan'].'</td>							
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

<button id="button_unhide_2" type="button" class="btn btn-primary btn-lg btn-block ">Tampilkan Jadwal Endah Murwaningrum, SS, MM</button>
<div id="pejabat2">
    <h3>Indriyanto, SH., M.Si</h3>
    <table class="table" id="tabel_tampil2">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Pukul</th>
                <th>Keperluan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //query ke database SELECT tabel data tamu urut berdasarkan id yang paling besar
            $sql = mysqli_query($koneksi, "SELECT * FROM jadwal where pejabat='Endah Murwaningrum, SS, MM' ORDER BY id DESC") or die(mysqli_error($koneksi));
            //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
            if(mysqli_num_rows($sql) > 0){
                //membuat variabel $no untuk menyimpan nomor urut
                $no = 1;
                //melakukan perulangan while dengan dari dari query $sql
                while($data = mysqli_fetch_assoc($sql)){
                    $hari = hari_ini(date("D",strtotime($data['jadwal_mulai'])));
                    $date =  date(", d-m-Y",strtotime($data['jadwal_mulai']));
                    $time = date("H:i",strtotime($data['jadwal_mulai']));

                    //menampilkan data perulangan
                    echo '
                    <tr>
                        <td>'.$hari.$date.'</td>
                        <td>'.$time.'</td>
                        <td>'.$data['keperluan'].'</td>							
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

<button id="button_unhide_3" type="button" class="btn btn-primary btn-lg btn-block ">Tampilkan Jadwal Putut Kuncoro, S.Kom</button>
<div id="pejabat3">
    <h3>Indriyanto, SH., M.Si</h3>
    <table class="table" id="tabel_tampil3">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Pukul</th>
                <th>Keperluan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //query ke database SELECT tabel data tamu urut berdasarkan id yang paling besar
            $sql = mysqli_query($koneksi, "SELECT * FROM jadwal where pejabat='Putut Kuncoro, S.Kom' ORDER BY id DESC") or die(mysqli_error($koneksi));
            //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
            if(mysqli_num_rows($sql) > 0){
                //membuat variabel $no untuk menyimpan nomor urut
                $no = 1;
                //melakukan perulangan while dengan dari dari query $sql
                while($data = mysqli_fetch_assoc($sql)){
                    $hari = hari_ini(date("D",strtotime($data['jadwal_mulai'])));
                    $date =  date(", d-m-Y",strtotime($data['jadwal_mulai']));
                    $time = date("H:i",strtotime($data['jadwal_mulai']));

                    //menampilkan data perulangan
                    echo '
                    <tr>
                        <td>'.$hari.$date.'</td>
                        <td>'.$time.'</td>
                        <td>'.$data['keperluan'].'</td>							
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

<script>
     $('#pejabat1,#pejabat2,#pejabat3').hide();
    
    function unhide(pejabat,button,nama){
        $(document).on('click', button, function(){
            if($(pejabat).is(":hidden")){
                $(button).text(`Sembunyikan Jadwal ${nama}`);
                $(pejabat).show("slow","linear");
            }else{
                $(button).text(`Tampilkan Jadwal ${nama}`);
                $(pejabat).hide("slow","linear");
            }     
        })
    };

    unhide("#pejabat1","#button_unhide_1","Indriyanto, SH., M.Si");
    unhide("#pejabat2","#button_unhide_2","Endah Murwaningrum, SS, MM");
    unhide("#pejabat3","#button_unhide_3","Putut Kuncoro, S.Kom");
    
</script>



