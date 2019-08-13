<!DOCTYPE html>
<html>
<head>
	<title>Enskripsi Dari Fungsi</title>
</head>
<body>
<h1> Enskripsi Dari Fungsi Menggunakan MD5</h1>
<form method="post" action="">
<table>
		<tr>
			<td>
				<input type="text" name="form" placeholder="Silahkan Di isi">
			</td>
			<td>
				<button type="submit" name="submit"> kirim </button>
			</td>
		</tr>
</table>
</form>
<?php 
	if (isset($_POST["submit"])) {
		$form = $_POST ["form"];
		echo "password awal =   ".$form."<br";
		echo "password setelah di ubah menjadi md5 =".md5($form)."<br>";
		echo "password setelah di ubah menjadi fungsi password_hash =".password_hash($form, PASSWORD_DEFAULT)."<br>";
		echo "password setelah di ubah menjadi fungsi crypt =".crypt($form, "qwertyuiop123456?{|")."<br>";
		echo "password setelah di ubah menjadi fungsi hash =".hash("WHIRLPOOL",$form)."<br>";
		echo "password setelah di ubah menjadi fungsi sha1 =".sha1($form)."<br>";
		echo "password setelah di ubah menjadi fungsi base64_encode =".base64_encode($form)."<br>";
		echo "password setelah di ubah menjadi fungsi base64_decode =".base64_decode($form)."<br>";	
	}

 ?>
 </body>
 </html>