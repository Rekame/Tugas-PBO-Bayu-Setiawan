<!DOCTYPE html>
<html>
<head>
	<title>Input Siswa</title>
</head>
<body>
	<h3>Input Data Siswa</h3>
	<form action="" method="post">
		<table style="height: 100px">
			<tr>
				<td>Nama Siswa</td>
				<td>:</td>
				<td><input type="text" name="nama_siswa"></td>
			</tr>
			<tr>
				<td>Tgl Lahir</td>
				<td>:</td>
				<td><input type="date" name="tgl_lahir"></td>
			</tr>
			<tr>
				<td>jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jk" value="pria">Pria
					<input type="radio" name="jk" value="wanita">Wanita
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>
					<select name="jurusan">
						<option value="Rpl">RPL</option>
						<option value="Multimedia">MULTIMEDIA</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" value="simpan">
					<input type="reset" value="reset">
				</td>
			</tr>
			
		</table>
		
	</form>

</body>
</html>