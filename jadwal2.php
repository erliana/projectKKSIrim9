<?php
	include("koneksi.php");
		$hari1=$_POST['senin'];
		$hari2=$_POST['selasa'];
		$hari3=$_POST['rabu'];
		$hari4=$_POST['kamis'];
		$hari5=$_POST['sabtu'];
		$hari6=$_POST['minggu'];
		$input="insert into jadwal(kode,senin, selasa, rabu, kamis, sabtu, minggu) values (null,'$hari1', '$hari2', '$hari3', '$hari4', '$hari5', '$hari6')";
if ($hari1=="" or $hari2=="" or $hari3=="" or $hari4=="" or $hari5=="" or $hari6==""){
 	echo '<script type="text/javascript"> var answer = alert("Data masih belum lengkap") window.location = "data_siswa.php"; </script>';
}else{
 	$hasil=mysqli_query($conn,$input); 
if ($hasil){
	header('location:data_jadwal.php?update=2');
}else{
 	echo '<script type="text/javascript"> var answer = alert("Sudah ada user dengan username tersebut") window.location = "data_jadwal.php";
</script>';
 }
}
?>
