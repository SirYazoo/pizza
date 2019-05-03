<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style/menuPembelian.css">
		<script src="script/scriptPop.js"></script>
    </head>
    <body>
        <div class="sidenav">
            <a href="menuPembelian.php">Menu Pembelian</a>
            <a href="halamanUtama.php">Log Out</a>
        </div>
        <div class="main">
			<form>
            <h2>Menu Pembelian</h2>
			<div class="menu">
				<label for="idKasir">Id Pembelian</label>	
                <input id="idKasir" type="text" placeholder="Enter id pembelian" required>
				<label for="nama">Nama Kasir</label>
				<input id="nama" type="text" placeholder="Enter Nama" required>
				<label for="kodePizza">Masukan Kode Pizza</label>
				<input id="kodePizza" type="text" placeholder="Enter Kode Pizza" required>
				<label for="kodeTopping">Masukan Kode Topping</label>
                <input id="kodeTopping" type="text" placeholder="Enter Kode Topping" required>
                <label for="jumlahTopping">Jumlah Topping</label>
				<input id="jumlahTopping" type="text" placeholder="Enter jumlah Topping" required>
                <label for="tanggal">Tanggal</label>
                <input id="tanggal"type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00">
			</form>
			</div>
			<div class="fungsi">
				<button type="submit" onclick=" ">Add</button>
            </div>
            
            <div class="bayar">
                <fieldset>
                    <legend>Pembayaran</legend>
                    <p>Total : </p>
                    <p>Dibayar : </p>
                    <p>Kembali : </p>
                </fieldset>
                <button type="submit" onclick=" ">Hitung</button>
            </div>
        </div>
    </body>
</html>