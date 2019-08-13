<!DOCTYPE html>
<html>
<head>
	<title>Deskripsi Dari Fungsi</title>
</head>
<body>
<h1> Deskripsi Dari Fungsi Menggunakan MD5</h1>
<form method="post" action="">
<table>
		<tr>
			<td>
				<input type="text" name="deskripsi" placeholder="Silahkan Di isi">
			</td>
			<td>
				<button type="submit" name="submit"> kirim </button>
			</td>
		</tr>
</table>
</form>
<?php
	if(isset($_POST['submit'])) {
		$form = $_POST['deskripsi'];
		echo "Hasil Pendeskripsian = ".base64_decode($form);

	}
	?>
	</body>
	</html>