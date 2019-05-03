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
			<form method="POST" action="addKasir">
            	<h2>Kasir</h2>
				<div class="menu">
					<label for="nama">Nama</label>
					<input id="nama" type="text" name="addNamaK" placeholder="Enter Nama" required>
					<label for="username">Username</label>
					<input id="username" type="text" name="username" placeholder="Enter Username" required>
					<label for="password">Password</label>
					<input id="password" type="text" name="password" placeholder="Enter Password" required>
				<div class="fungsi">
					<button type="submit" onclick="fungsiPopAddKasir()">Add</button>
				</div>
				</div>
			</form>
		</div>
		<table id="tabel">
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