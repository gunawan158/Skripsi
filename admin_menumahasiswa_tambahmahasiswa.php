<div id=groupmodul1>
<form action="admin_menumahasiswa_tambahmahasiswa_proses.php" method="post">
<table id=tablemodul>
	<tr>
		<th colspan="2">Tambah Mahasiswa</th>
	</tr>
    <tr>
    	<td width="75">NIM</td>
        <td width="200"><input name="nim_mahasiswa" type="text" /></td>
    </tr>
    <tr>
    	<td width="75">Nama</td>
        <td width="200"><input name="nama_mahasiswa" type="text" /></td>
    </tr>
    <tr>
    	<td width="75">Angkatan</td>
        <td width="200">
        <select name="angkatan">
		<option></option>
<?php
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass");
mysql_select_db("$database");

$sql1=mysql_query("SELECT * FROM angkatan ORDER BY tahun_angkatan DESC" );
while($data = mysql_fetch_array($sql1))
echo "<option value={$data[id_angkatan]}> {$data[tahun_angkatan]}</option>"; ?>
</select>
        </td>
    </tr>
    <tr>
    	<td colspan="2" align="center"><input type="submit" value="submit" /></td>
    </tr>
    </tr>
</table>
</form>
</div>

