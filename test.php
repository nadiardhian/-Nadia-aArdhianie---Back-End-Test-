<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST">
		Masukkan angka <input type="text" name="angka"><input type="submit" name="submit" value="submit">
</form>
</body>
</html>

<?php 
if(isset($_POST['submit'])){
	$bin = $_POST['angka'];

	for($b=1; $b <= $bin; $b++){
		for($y = 1; $y <= $b; $y++){
			echo "*";
		}
		echo "<br>";
	}
}
 ?>

