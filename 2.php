<!DOCTYPE html>
<html>
<head>
	<title>Tanggal</title>
</head>
<body>
	<form action="" method="POST">
	<center>
	<h1>TAMPILKAN TANGGAL</h1>
	<input type="date" name="tanggal1">
	<input type="date" name="tanggal2">
	<input type="submit" name="submit">
	</form>
	<br>
	<br>
<?php 
// Start date
$tanggal_awal = $_POST['tanggal1'];
// End date
$tanggal_akhir = $_POST['tanggal2'];

while (strtotime($tanggal_awal) <= strtotime($tanggal_akhir)) {
            echo "$tanggal_awal<BR>";
            $tanggal_awal = date ("Y-m-d", strtotime("+1 day", strtotime($tanggal_awal)));
}
?>
</center>
</body>
</html>