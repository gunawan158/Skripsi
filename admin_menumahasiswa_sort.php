<div id=groupmodul1>
<table id=tablemodul>
	<tr>
		<th colspan="4" width="350">Daftar Mahasiswa</th>
	</tr>
	<tr>
        <th>NIM</th>
        <th>Nama</th>
        <th colspan="2">Aksi</th>
	</tr> 
    
    <?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$tahun= $_GET['tahun'];

$sql=mysql_query("SELECT * FROM mahasiswa m, angkatan a WHERE m.id_angkatan=a.id_angkatan AND a.tahun_angkatan=$tahun");
while($data=mysql_fetch_array($sql))
{ ?>
	<tr align="center">                
        <td><?php echo "$data[nim_mahasiswa]"; ?></td>
        <td><?php echo "$data[nama_mahasiswa]"; ?></td>
        <td><?php echo "<a href=admin_menumahasiswa_edit_mahasiswa.php?&id=$data[id_mahasiswa]>";?>Ubah</a>
        <td><?php echo "<a href=admin_menumahasiswa_hapus_mahasiswa_proses.php?&id=$data[id_mahasiswa]>";?>Hapus</a></td></td>
	</tr> 
<?php } ?>
</table>
</div>