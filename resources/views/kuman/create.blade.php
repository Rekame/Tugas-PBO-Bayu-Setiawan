<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
</head>
	<center>
		<form method="POST" action="{{ route('kuman.store') }}">
			@csrf
			<table border="0">
				<tr>
					<td>
						<label for="nama">NAMA</label>
					</td>
					<td>
						<div>
							<input type="text" name="nama" id="nama" required="">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<label for="alamat">Alamat</label>
					</td>
					<td>
						<div>
							<input type="text" name="alamat" id="alamat" required="">
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<button type="submit">Simpan</button>
					</td>
				</tr>

				
			</table>
			
		</form>
	</center>
<body>

</body>
</html>