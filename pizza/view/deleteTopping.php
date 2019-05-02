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
            <form method="POST" action="deleteTopping">
            <h2>Topping</h2>
			<div class="menu">
				<label for="bahan">Nama Topping</label>
				<input id="bahan" type="text" name="delNamaT" placeholder="Enter Nama" required>
                <div class="fungsi">
				    <button type="submit" onclick="fungsiPopDeleteTopping()">Delete</button>
			    </div>
            </div>
            </form>
        </div>
        <table>
	        <tr>
		        <th>Id Topping</th>
		        <th>Nama Topping</th>
		        <th>Harga</th>
	        </tr>
	        <?php
		        foreach ($result as $key => $row) {
			        echo '
				        <tr>
					        <td>'.($key+1).'</td>
					        <td>'.$row->nama.'</td>
					        <td>'.$row->harga.'</td>
				        </tr>
			        ';
		        }
	        ?>
        </table>
    </body>
</html>