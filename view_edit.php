<html>
	<head>
		<title>MVC</title>
	</head>
	<body>
		<form action="" method="POST">
			<table border="1" cellpadding="5" cellspacing="0" align="center">
				<tr align="center">
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" value="<?=$row[0]?>" size="45" readonly /></td>
				</tr>
				<tr align="center">
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?=$row[1]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="angkatan" value="<?=$row[2]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Fakultas</td>
					<td>:</td>
					<td><input type="text" name="fakultas" value="<?=$row[3]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Prodi</td>
					<td>:</td>
					<td><input type="text" name="prodi" value="<?=$row[4]?>" size="45"/></td>
				</tr>
				<tr >
					<td align="center">Genre Film</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="film[]" value="Horror" <?php if(in_array("Horror",$film)){echo "checked";}?>/>Horror <br>
						<input type="checkbox" name="film[]"  value="Action" <?php if(in_array("Action",$film)){echo "checked";}?>/>Action <br>
						<input type="checkbox" name="film[]"  value="Anime" <?php if(in_array("Anime",$film)){echo "checked";}?>/>Anime <br>
						<input type="checkbox" name="film[]"  value="Thriller" <?php if(in_array("Thriller",$film)){echo "checked";}?>/>Thriller <br>
						<input type="checkbox" name="film[]"  value="Animasi" <?php if(in_array("Animasi",$film)){echo "checked";}?>/>Animasi <br>
					</td>
				</tr>
				<tr >
					<td align="center">Tujuan Wisata</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="wisata[]"  value="Bali" <?php if(in_array("Bali",$wisata)){echo "checked";}?>/>Bali <br>
						<input type="checkbox" name="wisata[]"  value="Raja Ampat" <?php if(in_array("Raja Ampat",$wisata)){echo "checked";}?>/>Raja Ampat <br>
						<input type="checkbox" name="wisata[]"  value="Pulau Derawan" <?php if(in_array("Pulau Derawan",$wisata)){echo "checked";}?>/>Pulau Derawan <br>
						<input type="checkbox" name="wisata[]"  value="Bangka Belitung" <?php if(in_array("Bangka Belitung",$wisata)){echo "checked";}?>/>Bangka Belitung <br>
						<input type="checkbox" name="wisata[]"  value="Labuan Bajo" <?php if(in_array("Labuan Bajo",$wisata)){echo "checked";}?>/>Labuan Bajo <br>

					</td>
				</tr>
				<tr align="center">
					<td colspan="3"><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi update pada controller
		$main = new controller();
		$main->update();//panggil controller update
	}
?>