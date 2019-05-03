<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style/laporan.css">
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
            <form>
            <h2>Laporan</h2>
			<div class="menu">
                    <label for="tanggal">Tanggal</label>
                    <input id="tanggal"type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00">
                    s/d
                    <input id="tanggal1"type="datetime-local" placeholder="Date and time" required name="date" value="2018-07-05T13:00">
            </form>
            </div>
			<div class="fungsi">
				<button type="submit" onclick=" ">Print</button>
                <button type="submit" onclick="">Search</button>
                <button type="submit" onclick="">Filter</button>
			</div>
        </div>
    </body>
</html>