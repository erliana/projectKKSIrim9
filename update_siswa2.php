<?php
include("koneksi.php");
//ambil nilai variabel no yang diambil dari form POST
$nama=$_POST['nama'];
$nama2=$_POST['nama2'];
$tanggal=$_POST['tanggal_lahir'];
$kelas=$_POST['kelas'];
$jurusan=$_POST['jurusan'];
$alamat=$_POST['alamat'];
$sql="UPDATE siswa SET nama='$nama', tanggal_lahir='$tanggal', kelas='$kelas', jurusan='$jurusan', alamat='$alamat' WHERE nama='$nama'";
//lakukan query update
if(empty($nama)){
		echo "<p class='message'>Gagal : Nama tidak boleh kosong</p>";?>
	<a href="update_siswa.php?id=<?php echo $no;?>" class="btn btn-success" type="button"class='back'>Batal</a>
	<?php
}else{
	$update = mysqli_query($conn,$sql);
	if($update){
		header('location:data_siswa.php?update=1');
		//echo $sql;
	}else{
		echo "<p class='message'>Gagal: sudah ada data ".$nama."</p>";?>
		<br />
		<a href="update_siswa.php?id=<?php echo $no;?>" class="btn btn-success" type="button" class="back">Batal</a>
	<?php 
	}
}
	?>