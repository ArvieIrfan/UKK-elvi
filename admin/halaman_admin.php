<?php
if (isset($_GET['url'])) 
{
	$url=$_GET['url'];

	switch ($url) 
	{
		case 'verifikasi_pengaduan':
			include 'verifikasi_pengaduan.php';
			break;

		case 'detail_pengaduan':
			include 'detail_pengaduan.php';
			break;

			case 'tanggapan':
			include 'tanggapan.php';
			break;

			case 'lihat_petugas';
			include 'lihat_petugas.php';
			break;

			case 'tambah_petugas';
			include 'tambah_petugas.php';
			break;

			case 'edit_petugas';
			include 'edit_petugas.php';
			break;

			case 'delete_petugas';
			include 'delete_petugas.php';
			break;

	}
}
else
{
	?>
	selamat datang untuk masyarakat yang telah menyempatkan diri unutk melaporkan kejadian yang kurang berkenan<br><br>
	Anda Login Sebagai : <h2><b><?php echo $_SESSION['nama'];

	require_once '../koneksi.php';
	$sql=mysqli_query($host,"SELECT * FROM pengaduan where status ='0'");
	if ($cek=mysqli_num_rows ($sql));
	{
	?>
	<br>
	<br>
	<div class="col-xl-7 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">laporan pengaduan :</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">ada <?php echo $cek; ?> laporan dari masyarakat</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                      <span class="badge badge-danger badge-counter">ada <?php echo $cek; ?> </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
}
}
?>