<?php
require_once '../koneksi.php';
$id_pengaduan=$_POST['id_pengaduan'];
$tgl=$_POST['tgl_tanggapan'];
$tanggapan=$_POST['tanggapan'];
$id_petugas=$_POST['id_petugas'];
$st='selesai';

$sql=mysqli_query($host,"INSERT into tanggapan (id_pengaduan,tgl_tanggapan,tanggapan,id_petugas) values ('$id_pengaduan','$tgl','$tanggapan','$id_petugas')");
$update_st =mysqli_query($host," UPDATE pengaduan set status='$st' where id_pengaduan='$id_pengaduan' ");
if($sql)
{
	?>
	<script type="text/javascript">
		alert('Data sudah diTanggapi');
		window.location="tanggapan.php?url=verifikasi_pengaduan";
	</script>
<?php
}
?>