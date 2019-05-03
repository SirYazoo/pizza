<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="view/style/menutoppingadmin.css">
        <script src="view/script/scriptPop1.js"></script>
    </head>
    <body>
        <div class="main">
            <form method="POST" action="addTopping">
            <h2>Topping</h2>
			<div class="menu">
				<label for="bahan">Nama Topping</label>
				<input id="bahan" type="text" name="addNamaT" placeholder="Enter Nama" required>
				<label for="harga">Harga</label>
				<input id="harga" type="text" name="harga" placeholder="Enter Harga" required>
                <div class="fungsi">
				    <button type="submit">Add</button>
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