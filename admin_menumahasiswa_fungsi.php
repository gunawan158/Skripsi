<div id=groupmodul1>
<table>
<tr>
	<td>
<form action="admin_menumahasiswa.php" method="GET">
	<select name='tahun' onchange='this.form.submit()'>
    <option>Pilih Tahun Angkatan</option>
	<?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$sql=mysql_query("SELECT * FROM angkatan ORDER BY tahun_angkatan DESC");
while($data=mysql_fetch_array($sql))

{
if($data['tahun_angkatan'] == $_GET['tahun'])
{
	$selected = 'selected';
}
else
{
	$selected = '';
}
echo "<option ".$selected." value={$data['tahun_angkatan']}> {$data['tahun_angkatan']}</option>";} ?>
</select>
  
	<noscript><input type="submit" value="Submit"></noscript>
	</form>
    	</td>
	<td>
<form action="admin_menumahasiswa.php" method="GET">

<?php if(isset($_GET['nama']))
{
	echo "<input name=nama type=text value=$_GET[nama] />";
}
else
{
	echo "<input name=nama type=text />"; }?>

<input type="submit" value="cari" />
</form>
	</td>
    </tr>
</table>
</div>