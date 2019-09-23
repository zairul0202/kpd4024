<?php
require"config.php";
 if(isset($_POST['Submit'])){

 $Nama=$_POST['nama'];
$Harga=$_POST['harga'];

$result=mysqli_query($conn,"INSERT INTO peralatan(nama,harga)VALUES('$Nama','$Harga')");
echo "<script> alert('DATA BERJAYA DITAMBAH');
window.location='papar.php'</script>";
}
else{

}
?>
<html>
<body>
	<center>
<h1>TAMBAH REKOD BARANGAN DAN HARGA</h1>
<form action="add.php" method="post" name="add">
	<table>
<lable><tr><td> Nama Produk :</label> <input type="text" name="nama"</td><br>
<label><tr><td> Harga       :</label> <input type="text" name="harga"</td><br>
</table>
<input type="reset" name="reset" value="reset">
<input type="Submit" name="Submit" value="add"><br>
<a href="papar.php">Kembali Ke Laman Utama </a>
</form>
</body>
</html>