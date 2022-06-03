<?php 
session_start();
if(!isset($_SESSION["email"])) header("Location: login.php");
require 'function-cetak.php';
$id = $_GET["id"];
$data = query("SELECT * FROM data_peserta WHERE id = $id")[0];




?>
<!DOCTYPE html>
<html>
<head>
	<title>CETAK SERTIFIKAT</title>
	<style>
		.outer-border{
    width:800px; height:450px; padding:20px; text-align:center; border: 10px solid #673AB7;    margin-left: 21%;
}

.inner-dotted-border{
    width:750px; height:400px; padding:20px; text-align:center; border: 5px solid #673AB7;border-style: dotted;
}

.certification{
    font-size:50px; font-weight:bold;    color: #663ab7;
}

.certify{
    font-size:25px;
}

.name{
    font-size:30px;    color: green;
}

.fs-30{
    font-size:30px;
}

.fs-20{
    font-size:20px;
}
		</style>
</head>
<body>

<div class="outer-border">
<div class="inner-dotted-border">
       <span class="certification">Sertifikat Pelatihan Desain</span>
       <br><br>
       <span class="certify"><i>Diberikan Kepada:</i></span>
       <br><br>
       <span class="name"><b><?= $data["nama"]; ?></b></span><br/><br/>
       <span class="certify"><i>Telah Mengikuti Kegiatan Pelatihan Desain SALMAN MM TEKNIK</i></span> <br/><br/>
       <span class="certify"><i>tanggal</i></span><br>
      
      <span class="fs-30">23 Juni 2022</span>
	 
</div>
</div>

	<script>
		window.print();
	</script>
	
</body>
</html>