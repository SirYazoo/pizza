<form method="POST" action="deleteKasir">
    Nama : <input type="text" name="delNamaK"><br>
    <input type="submit" value="Delete">
</form>
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
					<td>'.$row->name.'</td>
					<td>'.$row->username.'</td>
					<td>'.$row->passowrd.'</td>
				</tr>
			';
		}
	?>
</table>