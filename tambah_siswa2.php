<?php
	include("koneksi.php");
		$nama=$_POST['nama'];
		$tanggal=$_POST['tanggal_lahir'];
		$jurusan=$_POST['jurusan'];
		$kelas=$_POST['kelas'];
		$alamat=$_POST['alamat'];
		$input="insert into siswa(nama, tanggal_lahir, jurusan, kelas, alamat) values ('$nama', '$tanggal', '$jurusan', '$kelas', '$alamat')";
if ($nama=="" or $tanggal=="" or $jurusan=="" or $kelas=="" or $alamat==""){
 	echo '<script type="text/javascript"> var answer = alert("Data masih belum lengkap") window.location = "data_siswa.php"; </script>';
}else{
 	$hasil=mysqli_query($conn,$input); 
if ($hasil){
	header('location:data_siswa.php?update=2');
}else{
 	echo '<script type="text/javascript"> var answer = alert("Sudah ada user dengan username tersebut") window.location = "data_siswa.php";
</script>';
 }
}
?>
