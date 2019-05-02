<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style/menukasiradmin.css">
		<script src="script/scriptPop.js"></script>
    </head>
    <body>
        <div class="sidenav">
			<a href="addTopping.php">Add Topping</a>
            <a href="deleteTopping.php">Delete Topping</a>
            <a href="addKasir.php">Add Kasir</a>
            <a href="deleteKasir.php">Delete Kasir</a>
            <a href="menuLaporan.php">Laporan</a>
            <a href="halamanUtama.php">Log Out</a>
        </div>
        <div class="main">
			<form method="POST" action="deleteKasir">
            	<h2>Kasir</h2>
				<div class="menu">
					<label for="nama">Nama</label>
					<input id="nama" type="text" name="delNamaK" placeholder="Enter Nama" required>
				<div class="fungsi">
					<button type="submit" onclick="fungsiPopAddKasir()">Delete</button>
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