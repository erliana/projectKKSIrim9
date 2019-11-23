<?php
include("koneksi.php");
//ambil nilai variabel no yang diambil dari form POST
$kode=$_POST['kode'];
$senin=$_POST['senin'];
$selasa=$_POST['selasa'];
$rabu=$_POST['rabu'];
$kamis=$_POST['kamis'];
$sabtu=$_POST['sabtu'];
$minggu=$_POST['minggu'];
$sql="UPDATE jadwal SET kode='$kode', senin='$senin', selasa='$selasa', rabu='$rabu', kamis='$kamis', sabtu='$sabtu', minggu='$minggu' WHERE kode='$kode'";
//lakukan query update
if(empty($senin)){
		echo "<p class='message'>Gagal : Nama tidak boleh kosong</p>";?>
	<a href='update_jadwal.php?id=<?php echo $no;?>' class="btn btn-success" type="button"class='back'>Batal</a>
	<?php
}else{
	$update = mysqli_query($conn,$sql);
	if($update){
		header('location:data_jadwal.php?update=1');
		//echo $sql;
	}else{
		echo "<p class='message'>Gagal: sudah ada data ".$senin."</p>";?>
		<br />
		<a href='update_jadwal.php?id=<?php echo $no;?>' class="btn btn-success" type="button" class="back">Batal</a>
	<?php 
	}
}
	?>