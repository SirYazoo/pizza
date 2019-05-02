<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="view/style/menukasiradmin.css">
		<script src="view/script/scriptPop.js"></script>
    </head>
    <body>
        <div class="sidenav">
            <a href="addTopping">Add Topping</a>
            <a href="deleteTopping">Delete Topping</a>
            <a href="addKasir">Add Kasir</a>
            <a href="deleteKasir">Delete Kasir</a>
            <a href="menuLaporan">Laporan</a>
            <a href="halamanUtama">Log Out</a>
        </div>
        <div class="main">
			<form method="POST" action="deleteKasir">
            	<h2>Kasir</h2>
				<div class="menu">
					<label for="nama">Nama</label>
					<input id="nama" type="text" name="delNamaK" placeholder="Enter Nama" required>
				<div class="fungsi">
					<button type="submit" onclick="fungsiPopDeleteKasir()">Delete</button>
				</div>
				</div>
			</form>
		</div>
		<table>
		<tr>
			<th>Id Kasir</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
		</tr>
		<?php
			foreach ($result as $key => $row) {
				echo '
					<tr>
						<td>'.($key+1).'</td>
						<td>'.$row->nama.'</td>
						<td>'.$row->username.'</td>
						<td>'.$row->password.'</td>
					</tr>
				';
			}
		?>
		</table>
    </body>
</html>