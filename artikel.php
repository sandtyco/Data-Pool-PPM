<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>SPDI LPPM</title>
		<link href="adm/assets/img/spdiico.png" rel="shortcut icon">
		
		<!-- Le styles -->
		<link href="adm/assets/css/reset-min.css" rel="stylesheet">
		<link href="adm/assets/css/bootstrap.css" rel="stylesheet">
		<link href="adm/assets/css/modal-style.css" rel="stylesheet">
		<link href="adm/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="adm/assets/css/bootstrap.theme.css" rel="stylesheet">
		<link href="adm/assets/css/bootstrap.theme.min.css" rel="stylesheet">
		<link href="adm/assets/css/bootstrap.responsive.css" rel="stylesheet">
		<link href="adm/assets/css/bootstrap.responsive.min.css" rel="stylesheet">
		
		<link href="adm/assets/css/DT_bootstrap.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
		
		<style type="text/css">
		body {
			padding-top: 60px;
			padding-bottom: 40px;
			}
		.sidebar-nav {
			padding: 9px 0;
			}

		@media (max-width: 980px) {
			/* Enable use of floated navbar text */
			.navbar-text.pull-right {
				float: none;
				padding-left: 5px;
				padding-right: 5px;
				}
			}
		</style>
		
		<style>
		body {
			background-image: url('adm/assets/img/bg.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment:fixed;
			}
		</style>
		
		<link href="adm/assets/css/bootstrap-responsive.css" rel="stylesheet">

		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="adm/assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="adm/assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="adm/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="adm/assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="adm/assets/img/spdiico.png">
		
	</head>

	<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container" style="padding-top: 10px;">
          <p style="font-family: cambria; font-size:18px; color: #fff; height: 25px;"><marquee>Sistem Pelaporan Data Internal (SPDI) Lembaga Penelitian Dan Pengabdian Masyarakat - Universitas Amikom Purwokerto</marquee></p>
        </div>
      </div>
    </div>
	
	<div class="container">

		<div class="masthead"><!-- Menu -->
			<h1><a class="brand" href="http://lppm.amikompurwokerto.ac.id"><img src="adm/assets/img/log.jpg" width="450"></a></h1><hr>
			<div class="navbar">
			  <div class="navbar-inner">
				<div class="container">
					<ul class="nav">
						<li><a href="index.php">Dashboard</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Profil <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="author.php">Author</a></li>
								<li><a href="afiliasi.php">Afiliasi</a></li>
								<li class="divider"></li>
								<li class="nav-header">Data Penunjang</li>
								<li><a href="mitra.php">Mitra Relasi</a></li>
								<li><a href="pib.php">Inkubator Bisnis</a></li>
							</ul>
						</li>
						<li class="dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Utama <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="riset.php">Penelitian</a></li>
								<li><a href="abdimas.php">Pengabdian Masyarakat</a></li>
								<li class="divider"></li>
								<li class="nav-header">Data Luaran</li>
								<li><a href="artikel.php">Artikel Ilmiah</a></li>
								<li><a href="ki.php">HKI & Paten Produk</a></li>
								<li><a href="buku.php">Terbitan Buku</a></li>
							</ul>
						</li>
						<li><a href="tim.php">Tim Penyusun</a></li>
					</ul>
					<p class="navbar-text pull-right">Waktu saat ini, Hari <b id="tanggalWaktu"></b> - Pukul: <b id="jamWaktu"></b>:<b id="menitWaktu"></b>:<b id="detikWaktu"></b> WIB.</p>
				</div>
			  </div>
			</div><!-- Menu -->	
		</div>
		
		<!-- Isi Konten -->
		<div class="container">
			<div class="nav nav-header">
				<ul class="breadcrumb">
					<li><a href="index.php">Dasboard</a> <span class="divider">/</span></li>
					<li class="active">Artikel Ilmiah</li>
				</ul>
			</div>
			<div>
				<h2 align="center">LAPORAN LUARAN HASIL ARTIKEL ILMIAH</h2>
				<h4 align="center">Update Data Terakhir Pada Tahun 2024</h4>
				<hr>
				<!-- Statistik Artkel -->
				<div class="row-fluid"><!--Jumlah Artikel Tahunan-->
					
				</div>
				
				<div class="row-fluid">
					<div class="span4"><!--Jumlah Artikel Tahunan-->
						<?php
						// menghubungkan dengan koneksi database
						include 'adm/conn.php';
						// mengambil data
						$data_artikel = mysqli_query($conn,"SELECT * FROM artikel");
						// menghitung data barang
						$jumlah_artikel = mysqli_num_rows($data_artikel);
						?>
						<div class="card well">
							<div class="card-body" style="background-color:#fff;">
								<h4><i class="icon-file"></i> Total Capaian Artikel Ilmiah</h4><hr>
								<p>Jumlah keseluruhan artikel yang diperoleh sebanyak:</p>
								<h3 align="right"><?php echo $jumlah_artikel; ?></h3><!--kode php jumlah count data-->
							</div>
							<div class="card-footer d-flex align-items-center justify-content-between">
								<div class="small text-white">
									<i class="glyphicon glyphicon-eye-open"></i>
									<p>Jumlah pada hasil disamping telah di seleksi untuk hasil yang diperoleh dalam kurun waktu <span class="label label-important">5 Tahun Terakhir</span>.<hr>Data lengkap terlampir pada data-tabel dibawah!</p>
								</div>
							</div>
						</div>
					</div><!--/span-->
					<div class="span4">
						<?php
						// Menghubungkan dengan koneksi database
						include 'adm/conn.php';

						// Tahun target (5 tahun terakhir)
						$tahun_target = range(2020, 2024);

						// Array untuk menyimpan data jumlah artikel per tahun
						$data_tahun = array();

						// Query untuk menghitung total artikel
						$sql_total = "SELECT COUNT(*) AS total FROM artikel";
						$result_total = mysqli_query($conn, $sql_total);
						$row_total = mysqli_fetch_assoc($result_total);
						$total_artikel = $row_total['total'];

						// Loop untuk setiap tahun target
						foreach ($tahun_target as $tahun) {
							// Query untuk menghitung jumlah artikel per tahun
							$sql_tahun = "SELECT COUNT(*) AS jumlah FROM artikel WHERE year = '$tahun'";
							$result_tahun = mysqli_query($conn, $sql_tahun);
							$row_tahun = mysqli_fetch_assoc($result_tahun);
							$jumlah_tahun = $row_tahun['jumlah'];

							// Simpan data dalam array
							$data_tahun[$tahun] = $jumlah_tahun;
						}

						// Array warna untuk setiap tahun
						$warna_tahun = array(
							2020 => 'progress-info',
							2021 => 'progress-success',
							2022 => 'progress-warning',
							2023 => 'progress-danger',
							2024 => 'progress-striped'
						);

						// Tampilkan bar untuk setiap tahun
						foreach ($data_tahun as $tahun => $jumlah) {
							// Hitung persentase lebar bar
							$persentase_lebar = ($jumlah / $total_artikel) * 100;
							?>
							<div class="progress <?php echo $warna_tahun[$tahun]; ?>">
								<div class="bar" style="width: <?php echo min(100, $persentase_lebar) . '%'; ?>;">
									<?php echo $jumlah; ?>
								</div>
							</div>
							<p>Tahun <?php echo $tahun; ?></p>
							<?php
						}
						?>
					</div>
					<div class="span2">
						<?php
						// menghubungkan dengan koneksi database
						include 'adm/conn.php';
						// nilai data yang ingin dihitung
						$status_target = "Journal";
						// query untuk menghitung jumlah data dengan type tertentu
						$sql = "SELECT COUNT(*) AS jumlah FROM artikel WHERE type = '$status_target'";
						$result = mysqli_query($conn, $sql);
						// ambil hasil query
						$row = mysqli_fetch_assoc($result);
						$jumlah_status = $row['jumlah'];
						?>
						<div class="card well">
							<div class="card-body" style="background-color:#fff;">
								<h5><?php echo $status_target; ?></h5><hr>
								<h4 align="right"><?php echo $jumlah_status; ?></h4>
							</div>
						</div>
					</div>
					<div class="span2">
						<?php
						// menghubungkan dengan koneksi database
						include 'adm/conn.php';
						// nilai data yang ingin dihitung
						$status_target = "Prosiding";
						// query untuk menghitung jumlah data dengan type tertentu
						$sql = "SELECT COUNT(*) AS jumlah FROM artikel WHERE type = '$status_target'";
						$result = mysqli_query($conn, $sql);
						// ambil hasil query
						$row = mysqli_fetch_assoc($result);
						$jumlah_status = $row['jumlah'];
						?>
						<div class="card well">
							<div class="card-body" style="background-color:#fff;">
								<h5><?php echo $status_target; ?></h5><hr>
								<h4 align="right"><?php echo $jumlah_status; ?></h4>
							</div>
						</div>
					</div>
					<div class="span2">
						<?php
						// menghubungkan dengan koneksi database
						include 'adm/conn.php';
						// nilai data yang ingin dihitung
						$status_target = "Repository";
						// query untuk menghitung jumlah data dengan type tertentu
						$sql = "SELECT COUNT(*) AS jumlah FROM artikel WHERE type = '$status_target'";
						$result = mysqli_query($conn, $sql);
						// ambil hasil query
						$row = mysqli_fetch_assoc($result);
						$jumlah_status = $row['jumlah'];
						?>
						<div class="card well">
							<div class="card-body" style="background-color:#fff;">
								<h5><?php echo $status_target; ?></h5><hr>
								<h4 align="right"><?php echo $jumlah_status; ?></h4>
							</div>
						</div>
					</div>
					<div class="span2">
						<?php
						// menghubungkan dengan koneksi database
						include 'adm/conn.php';
						// nilai data yang ingin dihitung
						$status_target = "Lainnya";
						// query untuk menghitung jumlah data dengan type tertentu
						$sql = "SELECT COUNT(*) AS jumlah FROM artikel WHERE type = '$status_target'";
						$result = mysqli_query($conn, $sql);
						// ambil hasil query
						$row = mysqli_fetch_assoc($result);
						$jumlah_status = $row['jumlah'];
						?>
						<div class="card well">
							<div class="card-body" style="background-color:#fff;">
								<h5><?php echo $status_target; ?></h5><hr>
								<h4 align="right"><?php echo $jumlah_status; ?></h4>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row-fluid">
					<div class="span6">
						<div class="card mb-4">
							<div class="card-header">
								<i class="fas fa-chart-pie me-1"></i>
								Index Publikasi Scopus
							</div>
							<div class="card-body">
								<canvas id="chartScopus" width="100%" height="50"></canvas>
							</div>
							<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
						</div>

						<?php
						// Menghubungkan dengan koneksi database
						include 'adm/conn.php';

						// Query untuk menghitung jumlah artikel per kategori Scopus
						$sql = "SELECT scopus, COUNT(*) AS jumlah FROM artikel GROUP BY scopus";
						$result = mysqli_query($conn, $sql);

						// Array untuk menyimpan data kategori dan jumlah artikel
						$data_scopus = array();

						// Loop untuk mengambil data dari hasil query
						while ($row = mysqli_fetch_assoc($result)) {
							$data_scopus[$row['scopus']] = $row['jumlah'];
						}

						// Konversi data ke format JSON untuk digunakan di JavaScript
						$data_json = json_encode($data_scopus);
						?>
				
						<script>
							document.addEventListener('DOMContentLoaded', function() {
								// Ambil data dari PHP
								var data = <?php echo $data_json; ?>;

								// Label dan data untuk pie chart
								var labels = Object.keys(data);
								var values = Object.values(data);

								// Konfigurasi pie chart
								var ctx = document.getElementById('chartScopus').getContext('2d');
								var myPieChart = new Chart(ctx, {
									type: 'pie',
									data: {
										labels: labels,
										datasets: [{
											data: values,
											backgroundColor: [
												'#BEBEBE', // none
												'#007bff', // Q1
												'#28a745', // Q2
												'#ffc107', // Q3
												'#dc3545'  // Q4
											],
										}],
									},
									options: {
										responsive: true,
										maintainAspectRatio: true,
									}
								});
							});
						</script>
					</div>

					<div class="span6">
						<div class="card mb-4">
							<div class="card-header">
								<i class="fas fa-chart-pie me-1"></i>
								Index Publikasi Sinta
							</div>
							<div class="card-body">
								<canvas id="chartSinta" width="400" height="200"></canvas>
							</div>
							<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
						</div>

						<?php
						// Menghubungkan dengan koneksi database
						include 'adm/conn.php';

						// Query untuk menghitung jumlah artikel per kategori Sinta
						$sql = "SELECT sinta, COUNT(*) AS jumlah FROM artikel GROUP BY sinta";
						$result = mysqli_query($conn, $sql);

						// Array untuk menyimpan data kategori dan jumlah artikel
						$data_sinta = array();

						// Loop untuk mengambil data dari hasil query
						while ($row = mysqli_fetch_assoc($result)) {
							$data_sinta[$row['sinta']] = $row['jumlah'];
						}

						// Konversi data ke format JSON untuk digunakan di JavaScript
						$data_json = json_encode($data_sinta);
						?>

						<script>
							document.addEventListener('DOMContentLoaded', function() {
								// Ambil data dari PHP
								var data = <?php echo $data_json; ?>;

								// Label dan data untuk pie chart
								var labels = Object.keys(data);
								var values = Object.values(data);

								// Konfigurasi pie chart
								var ctx = document.getElementById('chartSinta').getContext('2d');
								var myPieChart = new Chart(ctx, {
									type: 'pie',
									data: {
										labels: labels,
										datasets: [{
											data: values,
											backgroundColor: [
												'#BEBEBE', // S1
												'#007bff', // S2
												'#28a745', // S3
												'#ffc107', // none
												'#dc3545', // S4
												'#17a2b8', // S5
												'#6f42c1'  // S6
											],
										}],
									},
									options: {
										responsive: true,
										maintainAspectRatio: true,
									}
								});
							});
						</script>
					</div>
				</div>
				<!-- Statistik Author -->
				<hr>
				<h3>Hasil laporan dataset artikel berafiliasi Universitas Amikom Purwokerto</h3>
				<!-- Area Detail Data Tabel -->
				<div class="card mb-4">
					<div class="card-body">
						<table class="table table-hover" id="myData">
							<thead>
								<tr>
									<th>#</th>
									<th>Author</th>
									<th>Title</th>
								</tr>
							</thead>
							<tbody>
							<?php
							include 'adm/conn.php';
							$no = 1;
							$sql = "SELECT * FROM artikel";
							$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								while ($d = mysqli_fetch_assoc($result)) {
								?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td>
										<ul style="list-style: none;">
											<li><b><?php echo $d['author']; ?></b></li>
											<li><small><?php echo $d['co_auth']; ?></small></li>
										</ul>
									</td>
									<td>
										<ul style="list-style: none;">
											<li><a href="<?php echo $d['url']; ?>" target="_blank"><b><?php echo $d['title']; ?></b></a><br></li>
											<li>Publisher: <b><?php echo $d['pub']; ?></b>, Serial: <b><?php echo $d['serial']; ?></b>, Volume: <b><?php echo $d['vol']; ?></b>, Issue: <b><?php echo $d['no']; ?></b> - <b><?php echo $d['year']; ?></b></li>
											<li>Source: <a href="<?php echo $d['doi']; ?>" target="_blank"><img src="adm/assets/img/doi.png" width="20"></a> <a href="<?php echo $d['url']; ?>" target="_blank"><img src="adm/assets/img/url.png" width="20"></a></li>
											<li>Type: <b><?php echo $d['type']; ?></b>, <img src="adm/assets/img/sinta.png" width="50"> <b><?php echo $d['sinta']; ?></b>, <img src="adm/assets/img/scopus.png" width="50"> <b><?php echo $d['scopus']; ?></b></li>
										</ul>
									</td>
								</tr>
							<?php
								}
								} else {
								echo "0 hasil";
									}

								mysqli_close($conn);
							?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- Area Detail Data Tabel -->
			</div>
		</div>
		<!-- Isi Konten -->
		
		<hr>

		<div class="container">
			<h4 align="center">API Resource Platform</h4>
			<p align="center">
				<img src="https://lppm.amikompurwokerto.ac.id/assets/upload/image/sipel.png" width="180"> |
				<img src="https://lppm.amikompurwokerto.ac.id/assets/upload/client/client-7.png" width="150"> | 
				<img src="https://lldikti13.kemdikbud.go.id/wp-content/uploads/2020/02/logopddikti-1024x197.png" width="200"> | 
				<img src="https://waqasalvi.com/wp-content/uploads/2022/11/google-scholar-png-1.png" width="150"> | 
				<img src="https://lppm.amikompurwokerto.ac.id/assets/upload/client/client-2.png" width="180"> | 
				<img src="https://lppm.amikompurwokerto.ac.id/assets/upload/client/client-5.png" width="200">
			</p>
		</div>
		
		<hr>
		
		<footer class="footer">
			<div class="container"> 
				<div class="span12" align="center">
					<h6>Copyright &copy; Sistem Pelaporan Data Internal | SPDI 2025. Lembaga Penelitian dan Pengabdian Masyarakat (LPPM) &middot; <a href="https://amikompurwokerto.ac.id" target="_blank">Universitas Amikom Purwokerto</a>.
					<br>
					<p>Jl Letjen. Pol. Sumarto, Watumas, Purwokerto Utara, Banyumas - Kode: 53127. Project By: <a href="mailto:irfan.santiko@amikompurwokerto.ac.id" target="_blank">Sandtyco & Team</a></p>
				</div>
			</div>
		</footer>

    </div> <!-- /container -->

	<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="adm/assets/js/jquery.js"></script>
    <script src="adm/assets/js/bootstrap-transition.js"></script>
    <script src="adm/assets/js/bootstrap-alert.js"></script>
    <script src="adm/assets/js/bootstrap-modal.js"></script>
    <script src="adm/assets/js/bootstrap-dropdown.js"></script>
    <script src="adm/assets/js/bootstrap-scrollspy.js"></script>
    <script src="adm/assets/js/bootstrap-tab.js"></script>
    <script src="adm/assets/js/bootstrap-tooltip.js"></script>
    <script src="adm/assets/js/bootstrap-popover.js"></script>
    <script src="adm/assets/js/bootstrap-button.js"></script>
    <script src="adm/assets/js/bootstrap-collapse.js"></script>
    <script src="adm/assets/js/bootstrap-carousel.js"></script>
    <script src="adm/assets/js/bootstrap-typeahead.js"></script>
	<script src="adm/assets/js/jquery-3.1.0.js"></script>
	<script src="adm/assets/js/jquery-3.7.1.js"></script>
	<script src="adm/assets/js/jquery-3.7.1.min.js"></script>
	<script src="adm/assets/js/modal-script.js"></script>
	<script src="adm/assets/js/npm.js"></script>
	<script src="adm/assets/js/popper.js"></script>
	
	<script src="adm/assets/js/scripts.js"></script>
	<script src="adm/assets/js/chart.js"></script>
	<script src="adm/assets/js/chart.min.js"></script>
	<script src="adm/assets/js/chart-area-uap.js"></script>
	<script src="adm/assets/js/chart-penelitian.js"></script>
	<script src="adm/assets/js/chart-pengabdian.js"></script>
	<script src="adm/assets/js/chart-pie-sinta.js"></script>
	<script src="adm/assets/js/chart-pie-scopus.js"></script>
	<script src="adm/assets/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    	
	<!-- Array untuk nama hari dan bulan (dalam bahasa Indonesia) -->
	<script>
		function updateWaktu() {
			var waktu = new Date();
			document.getElementById("jamWaktu").innerHTML = waktu.getHours();
			document.getElementById("menitWaktu").innerHTML = waktu.getMinutes();
			document.getElementById("detikWaktu").innerHTML = waktu.getSeconds();

			var dt = new Date();
			var namaHari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
			var namaBulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
			var hari = namaHari[dt.getDay()];
			var tanggal = dt.getDate();
			var bulan = namaBulan[dt.getMonth()];
			var tahun = dt.getFullYear();
			var formatTanggal = hari + ", " + tanggal + " " + bulan + " " + tahun;
			document.getElementById("tanggalWaktu").innerHTML = formatTanggal;
		}

		setInterval(updateWaktu, 1000); // Perbarui setiap detik
	</script>
	
	<!-- Array untuk pemanggilan datatable -->
	<script src="adm/assets/js/datatables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		$('#myData').DataTable()
		});
	</script>
	
	</body>
</html>