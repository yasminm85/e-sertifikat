<?php 
session_start();
if(!isset($_SESSION["email"])) header("Location: login.php");
require 'function.php';


$data = query("SELECT * FROM data_peserta");

?>
<!DOCTYPE html>
<html>
<head>
	<title>CETAK SERTIFIKAT</title>
</head>
<body>
	<center>
		<h1>SERTIFIKAT</h1>
		<h4>002/SKU/009</h4>
	</center>

	<br/>
    <center>
	<p>
		Dengan penuh rasa syukur, kami memberikan penghargaan kepada:
	</p>

	<h3>
		Wulan
</h3>
<p>atas keikutsertaan dalam <b>Pelatihan Desain SALMAN MM TEKNIK</b></p>
    </center>
	<script>
		window.print();
	</script>
	
</body>
</html>