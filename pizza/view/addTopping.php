<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style/menutoppingadmin.css">
        <script src="script/scriptPop1.js"></script>
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
            <form method="POST" action="addTopping">
            <h2>Topping</h2>
			<div class="menu">
				<label for="bahan">Nama Topping</label>
				<input id="bahan" type="text" name="addNamaT" placeholder="Enter Nama" required>
				<label for="harga">Harga</label>
				<input id="harga" type="text" name="harga" placeholder="Enter Harga" required>
            </form>
            </div>
			<div class="fungsi">
				<button type="submit" onclick="fungsiPopAddTopping()">Add</button>
			</div>
        </div>
    </body>
</html>