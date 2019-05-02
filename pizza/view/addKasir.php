<form method="POST" action="addKasir">
    Nama : <input type="text" name="addNamaK"><br>
    Username : <input type="text" name="username"><br>
    Password : <input type="text" name="password"><br>
    <input type="submit" value="Add">
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