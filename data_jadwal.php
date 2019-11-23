<!DOCTYPE html>
<html lang="en">
  <head>
  

    <title>Plataforma - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/plataforma/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/plataforma/css/animate.css">
    
    <link rel="stylesheet" href="assets/plataforma/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plataforma/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/plataforma/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/plataforma/css/aos.css">

    <link rel="stylesheet" href="assets/plataforma/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/plataforma/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/plataforma/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="assets/plataforma/css/flaticon.css">
    <link rel="stylesheet" href="assets/plataforma/css/icomoon.css">
    <link rel="stylesheet" href="assets/plataforma/css/style.css">
  </head>
  <body>
    <div class="hero-wrap" style="background-image: url('assets/plataforma/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html"><img src="jibas.png" style="width: 100px; height: 100px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="beranda.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="data_siswa.php" class="nav-link">Data Siswa</a></li>
            <li class="nav-item"><a href="jadwal.php" class="nav-link">Jadwal</a></li>
            <li class="nav-item"><a href="data_pribadi.php" class="nav-link">Info Siswa</a></li>
            <li class="nav-item "><a href="galery.php" class="nav-link">Galery</a></li>
            <li class="nav-item cta mr-md2"><a href="logout.php" class="nav-link">Logout</a></li>
          

          </ul>
        </div>
      </div>
    </nav>
    <br><br><br><br><br><br>

<?php
  include("koneksi.php");
?>

<center><h3>Jadwal Kelas 11 RPL</h3></center>
<a href="jadwal.php" button class="btn btn-success"
  type="button">Tambah Jadwal</a></button>

<?php
$no=1;
$sqlCount = "select count(senin) from jadwal";
$query = mysqli_query($conn,$sqlCount) or die(mysqli_error($conn));
$rsCount = mysqli_fetch_array($query);
$banyakData = $rsCount[0];
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 40;
$mulai_dari = $limit * ($page - 1);
$sql_limit = "select * from jadwal order by senin limit
$mulai_dari, $limit";
$hasil = mysqli_query($conn,$sql_limit) or die(mysqli_error($conn));
if(mysqli_num_rows($hasil)==0){
echo "<p class='message'>Data tidak ditemukan!</p>";
  }
?>
<table class="table table-striped table-success">
  <thead>
    <tr class="success">
          <td><h5>No</h5></td>
          <td><h5>Kode</h5></td>
          <td><h5>Senin</h5></td>
          <td><h5>Selasa</h5></td>
          <td><h5>Rabu</h5></td>
          <td><h5>Kamis</h5></td>
          <td><h5>Sabtu</h5></td>
          <td><h5>Minggu</h5></td>
          <td><h5>Action</h5></td>
          </tr>
</thead>
<tbody>
<?php 
$no=$no+(($page-1)*$limit);

//Buang field ke dalam array
while ($data=mysqli_fetch_array($hasil)){
?>
<tr class="success">
  <td><?php echo $no;?></td>
  <td><?php echo $data[0]; ?></td>
  <td><?php echo $data[1]; ?></td>
  <td><?php echo $data[2]; ?></td>
  <td><?php echo $data[3]; ?></td>
  <td><?php echo $data[4]; ?></td>
  <td><?php echo $data[5]; ?></td>
  <td><?php echo $data[6]; ?></td>
<td>

<a href= "update_jadwal.php?id=<?php echo
    $data[0];?>" class="btn btn-success" type="button">Update</a>
<a href= "hapus_jadwal.php?id=<?php echo
    $data[0];?>" class="btn btn-success" type="button" onclick= "return confirm('Anda yakin menghapus data <?php
      echo $data[1];?>?')">Hapus</a>
</td>
</tr>

<?php
 $no++;
}

?>
</tbody>
</table>
<?php 

{}
?>
<ul class="pagination justify-content-end">

<?php
  $banyakHalaman = ceil($banyakData / $limit);
  
    for($i = 1; $i <= $banyakHalaman; $i++){
      if($page != $i){
        echo '<li class="page-item"><a class="page-link" href="data_siswa.php?page='.$i.'">Page '.$i.'</a></li> ';
      }else{
        echo '<li class="page-item"><a class="page-link" href="#">Page '.$i.'</a></li> ';
      }
    }
?>
</ul>

</div>

</div>
</div>

  <script src="assets/plataforma/js/jquery.min.js"></script>
  <script src="assets/plataforma/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/plataforma/js/popper.min.js"></script>
  <script src="assets/plataforma/js/bootstrap.min.js"></script>
  <script src="assets/plataforma/js/jquery.easing.1.3.js"></script>
  <script src="assets/plataforma/js/jquery.waypoints.min.js"></script>
  <script src="assets/plataforma/js/jquery.stellar.min.js"></script>
  <script src="assets/plataforma/js/owl.carousel.min.js"></script>
  <script src="assets/plataforma/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/plataforma/js/aos.js"></script>
  <script src="assets/plataforma/js/jquery.animateNumber.min.js"></script>
  <script src="assets/plataforma/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets/plataforma/js/google-map.js"></script>
  <script src="assets/plataforma/js/main.js"></script>
</body>
</html>