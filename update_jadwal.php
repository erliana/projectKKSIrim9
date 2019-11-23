<!DOCTYPE html>
<html>
<head>
<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body background="bg.jpg">
	
<?php
	include("koneksi.php");
?>
<div class="container">
	<div class="row">
		<div class="span2"></div>
			<div class="span8">
 				<center><h3>UPDATE DATA JADWAL</h3>
					<form action="update_jadwal2.php" method="post">

<?php
$no = $_GET['id'];?>
<td width="138"><input name="no" type="hidden" id="num" value="<?php echo $no; ?>" size="20" /></td>

<?php
//lakukan query SELECT
$data = mysqli_query($conn,"SELECT * from jadwal where kode='$no'");
		while($d = mysqli_fetch_array($data))
{?>

<table width="419" border="0" class="table table-striped table-success">
	<tr>
		<td>kode</td>
		<td><input type="text" name="kode" value="<?php echo $d['kode']; ?>">
	</tr>
<tr>
	<td>Senin</td>
	<td><select name='senin' value="<?php echo $d['senin']; ?>"><?php echo $d['senin']; ?>
		<option value="<?php echo $d['senin']; ?>"><?php echo $d['senin']; ?></option>
		<option value='MTK'>MTK</option>
		<option value='INGGRIS'>INGGRIS</option>
		<option value='INDONESIA'>INDONESIA</option>
		<option value='PWPB'>PWPB</option>
		<option value='PBO'>PBO</option>
		<option value='BASIS DATA'>BASIS DATA</option>
	</select></td>
	</tr>

<tr>
	<td>Selasa</td>
	<td><select name='selasa' value="<?php echo $d['selasa']; ?>"><?php echo $d['selasa']; ?>
		<option value="<?php echo $d['selasa']; ?>"><?php echo $d['selasa']; ?></option>
		<option value='MTK'>MTK</option>
		<option value='INGGRIS'>INGGRIS</option>
		<option value='INDONESIA'>INDONESIA</option>
		<option value='PWPB'>PWPB</option>
		<option value='PBO'>PBO</option>
		<option value='BASIS DATA'>BASIS DATA</option>
	</select></td>
	
</tr>
<tr>
	<td>Rabu</td>
	<td><select name='rabu' value="<?php echo $d['rabu']; ?>"><?php echo $d['rabu']; ?>
		<option value="<?php echo $d['rabu']; ?>"><?php echo $d['rabu']; ?></option>
		<option value='MTK'>MTK</option>
		<option value='INGGRIS'>INGGRIS</option>
		<option value='INDONESIA'>INDONESIA</option>
		<option value='PWPB'>PWPB</option>
		<option value='PBO'>PBO</option>
		<option value='BASIS DATA'>BASIS DATA</option>
	</select></td>
	
</tr>
<tr>
	<td>Kamis</td>
	<td><select name='kamis' value="<?php echo $d['kamis']; ?>"><?php echo $d['kamis']; ?>
		<option value="<?php echo $d['kamis']; ?>"><?php echo $d['kamis']; ?></option>
		<option value='MTK'>MTK</option>
		<option value='INGGRIS'>INGGRIS</option>
		<option value='INDONESIA'>INDONESIA</option>
		<option value='PWPB'>PWPB</option>
		<option value='PBO'>PBO</option>
		<option value='BASIS DATA'>BASIS DATA</option>
	</select></td>
	
</tr>
<tr>
	<td>Sabtu</td>
	<td><select name='sabtu' value="<?php echo $d['sabtu']; ?>"><?php echo $d['sabtu']; ?>
		<option value="<?php echo $d['sabtu']; ?>"><?php echo $d['sabtu']; ?></option>
		<option value='MTK'>MTK</option>
		<option value='INGGRIS'>INGGRIS</option>
		<option value='INDONESIA'>INDONESIA</option>
		<option value='PWPB'>PWPB</option>
		<option value='PBO'>PBO</option>
		<option value='BASIS DATA'>BASIS DATA</option>
	</select></td>
	
</tr>
<tr>
	<td width="152">Minggu</td>
	<td><select name='minggu' value="<?php echo $d['minggu']; ?>"><?php echo $d['minggu']; ?>
		<option value="<?php echo $d['minggu']; ?>"><?php echo $d['minggu']; ?></option>
		<option value='MTK'>MTK</option>
		<option value='INGGRIS'>INGGRIS</option>
		<option value='INDONESIA'>INDONESIA</option>
		<option value='PWPB'>PWPB</option>
		<option value='PBO'>PBO</option>
		<option value='BASIS DATA'>BASIS DATA</option>
	</select></td>
	
</tr>


</table>
<br/>

 <table width border="0">
<tr>
	<td width="92"><button class="btn btn-success" type="submit">Simpan</a></button></td>
	<td width="92"><a href="data_jadwal.php" button class="btn btn-success" type="button" >Batal</a></button></td>
</tr>
</table>
</center>
 </form>
<?php 
}?>
 </div>
 </div>
</div>
</body>
</html>
