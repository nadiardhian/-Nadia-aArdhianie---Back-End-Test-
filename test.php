<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST">
		Masukkan angka <input type="text" name="ganjil"><input type="submit" name="submit" value="submit">
</form>
</body>
</html>

<?php 
if(isset($_POST['submit'])){
	$bin = $_POST['ganjil'];

	if($bin % 2 && $bin > 3 && $bin < 50){
	for ($i=1; $i<=$bin; $i++){
	echo "<center>";
	for ($d=$i; $d<= $bin; $d++) {
	echo "*";	
}
	 echo "<br>";
}
}else{
	echo "angka harus ganjil dan lebih besar dari 3 tetapi kurang dari 50";
}
}
 ?>

