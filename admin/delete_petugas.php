<?php
require '../koneksi.php';
$id=$_GET['id'];

$sql= mysqli_query($host," DELETE from petugas where id_petugas='$id'");

if($sql)
{
	?>
	<script type="text/javascript">
		alert('Data Dihapus');
		window.location="admin.php?url=lihat_petugas";
	</script>
<?php
}
?>