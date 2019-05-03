<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="view/style/menutoppingadmin.css">
        <script src="view/script/scriptPop1.js"></script>
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
        <table id="tabel">
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