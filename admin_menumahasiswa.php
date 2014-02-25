<?php 
session_start(); //memulai session
?>
<title>SISTEM MANAJEMEN NILAI</title>
<link rel="stylesheet" href="css/all.css" type="text/css" />
<style type="text/css">
</style>
<body>
<?php 
if ($_SESSION['status']=="administrator")
{
?>
<?php include ('menu.php'); ?>

<div id=groupmodul1>
<table id=tablemodul width="100%">            
	<tr>
		<th colspan="2">Menu Mahasiswa</th>
	</tr>
	<tr>
		<td>
        <?php 
		if(isset($_GET['tahun'])) {
			echo "<div id=groupmodul1><a href=admin_menumahasiswa.php?&tmbhmhs=ok>Tambah Mahasiswa</a></div>";
		include ('admin_menumahasiswa_fungsi.php');
		include ('admin_menumahasiswa_sort.php'); }
		
		else if (isset($_GET['tmbhmhs'])) {
			
		include ('admin_menumahasiswa_tambahmahasiswa.php'); }
		
		else if (isset($_GET['ubah'])) {
		include ('admin_menumahasiswa_edit.php'); }
		
		else if (isset($_GET['hapus'])) {
		include ('admin_menumahasiswa_hapus_proses.php'); }
		
		else if (isset($_GET['nama'])) {
			echo "<div id=groupmodul1><a href=admin_menumahasiswa.php?&tmbhmhs=ok>Tambah Mahasiswa</a></div>";
		include ('admin_menumahasiswa_fungsi.php');
		include ('admin_menumahasiswa_search.php'); }
		
		else {
			echo "<div id=groupmodul1><a href=admin_menumahasiswa.php?&tmbhmhs=ok>Tambah Mahasiswa</a></div>";
		include ('admin_menumahasiswa_fungsi.php');
	    include ('admin_menumahasiswa_listmahasiswa.php'); }
		?>
        </td>
	</tr>
</table>
</div>
<div id=footer><center>
Sistem Manajemen Nilai @Teknik Informatika UII
</div>
<?php } ?> 
