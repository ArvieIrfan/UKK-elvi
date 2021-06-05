<?php 
include 'koneksi.php';
$user=$_POST['username'];
$pass=$_POST['password'];
var_dump("$user");
var_dump("$pass");

$sql=mysqli_query($host,"SELECT * FROM masyarakat where username='$user' and password='$pass' ");
$cek=mysqli_num_rows($sql);

	if ($cek>0)
 	{
		$data=mysqli_fetch_array($sql);
		session_start();
		$_SESSION['nama']=$data['nama'];
		$_SESSION['nik']=$data['nik'];
		header('location:masyarakat.php');
	}
	else
	{
		
	
		?>
		<script type="text/javascript">
			alert ('Username Atau Password tidak ditemukan');
			window.location="index.php";
		</script>
<?php
	}
	?>