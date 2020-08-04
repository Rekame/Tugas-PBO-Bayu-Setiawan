<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h1>HALOOO GUYS</h1>
		<a href="{{ Route('kuman.create') }}"><button>create</button></a>
		<table border="3" width="500">
			<thead>
				<tr>
					<th>NO</th>
					<th>NAMA</th>
					<th>ALAMAT</th>
					<th>OPTION</th>
				</tr>
			</thead>

			<tbody>
				@forelse ($kuman as $ada)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $ada->nama }}</td>
					<td>{{ $ada->alamat }}</td>
					<td>
						<button>EDIT</button>
						<button>HAPUS</button>
					</td>
				</tr>
				@empty
				<tr>
					<td colspan="7">NGGAK ADA DATA</td>
				</tr>
				@endforelse
			</tbody>
		</table>
	</center>
</body>
</html>