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
					<li class="active">Penelitian</li>
				</ul>
			</div>
			<div>
				<h1 align="center">LAPORAN DATA PENELITIAN</h1>
				<h4 align="center">Update Data Terakhir Pada Tahun <b>2024</b></h4>
			</div>
			<hr>
			<!-- Statistik Riset -->
			<div class="row-fluid">
				<div class="span4">
					<?php
					// menghubungkan dengan koneksi database
					include 'adm/conn.php';
					// mengambil data
					$data_user = mysqli_query($conn,"SELECT * FROM riset");
					// menghitung data
					$jumlah_user = mysqli_num_rows($data_user);
					?>
					<p>Jumlah Total Kegiatan Penelitian <b>Keseluruhan</b></p>
					<div class="card">
						<div class="card-body" style="background-color:#fff;">
							<h4><i class="icon-file"></i> Total Penelitian</h4><hr>
							<p>Berikut hasil perolehan data pengabdian masyarakat yang diperoleh pada tahun terakhir <b>2024</b>. Jumlah yang diperoleh:
							<h2 align="center" class="well"><?php echo $jumlah_user; ?></h2><!--kode php jumlah count data-->
						</div>
					</div>
				</div>
				<div class="span8">
					<div class="card mb-4">
						<?php
						include 'adm/conn.php';

						// Tentukan 5 tahun terakhir
						$tahun_akhir = date("Y");
						$tahun_awal = $tahun_akhir - 5;

						$data_statistik = array();

						// Loop melalui 5 tahun terakhir
						for ($tahun = $tahun_awal; $tahun <= $tahun_akhir; $tahun++) {
							$query = "SELECT COUNT(*) AS jumlah FROM riset WHERE year = '$tahun'";
							$result = mysqli_query($conn, $query);
							$row = mysqli_fetch_assoc($result);
							$data_statistik[$tahun] = $row['jumlah'];
						}

						// Tutup koneksi database
						mysqli_close($conn);

						// Encode data statistik ke format JSON untuk digunakan di JavaScript
						$data_json = json_encode($data_statistik);
						?>
						<div class="card-header">
							<i class="fas fa-chart-bar me-1"></i>
							Pertumbuhan Kegiatan Penelitian <b>5 Tahun Terakhir</b>
						</div>
						<div class="card-body"><canvas id="barChart"></canvas></div>
						<script>
							const dataStatistik = JSON.parse('<?php echo $data_json; ?>');
							const tahun = Object.keys(dataStatistik);
							const jumlahRiset = Object.values(dataStatistik);

							const ctx = document.getElementById('barChart').getContext('2d');
							const barChart = new Chart(ctx, {
								type: 'bar',
								data: {
									labels: tahun,
									datasets: [{
										label: 'Jumlah Riset',
										data: jumlahRiset,
										backgroundColor: 'rgba(54, 162, 235, 0.8)',
										borderColor: 'rgba(54, 162, 235, 1)',
										borderWidth: 1
									}]
								},
								options: {
									scales: {
										y: {
											beginAtZero: true,
											title: {
												display: true,
												text: 'Jumlah Riset'
											}
										},
										x: {
											title: {
												display: true,
												text: 'Tahun'
											}
										}
									},
									plugins: {
										legend: {
											display: false // Sembunyikan label dataset
										},
										title: {
											display: true,
											text: 'Grafik Jumlah Riset per Tahun (5 Tahun Terakhir)',
											font: {
												size: 16
											}
										}
									}
								}
							});
						</script>
						<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
					</div>
				</div>
			</div>
			<br>
			<div class="row-fluid"><!--Jumlah Riset Tahunan-->
				<div class="span4">
					<?php
					// Menghubungkan dengan koneksi database
					include 'adm/conn.php';

					// Perbaikan sintaksis SQL dan penanganan kesalahan
					$sql = "SELECT * FROM riset WHERE program = 'Hibah Amikom'";
					$data_user = mysqli_query($conn, $sql);

					if (!$data_user) {
						// Menampilkan pesan kesalahan jika query gagal
						die("Query gagal: " . mysqli_error($conn));
					}

					// Menghitung data
					$jumlah_user = mysqli_num_rows($data_user);
					?>

					<p>Laporan Program <b>Hibah Amikom</b> Keseluruhan</p>
					<div class="card">
						<div class="card-body" style="background-color:#fff;">
							<h4><i class="icon-file"></i> Total Laporan</h4><hr>
							<p align="center"><img src="adm/assets/img/sipel.png" width="180"></p>
							<h2 align="center" class="well"><?php echo $jumlah_user; ?></h2>
						</div>
					</div>
				</div>
				
				<div class="span4">
					<?php
					// Menghubungkan dengan koneksi database
					include 'adm/conn.php';

					// Perbaikan sintaksis SQL dan penanganan kesalahan
					$sql = "SELECT * FROM riset WHERE program = 'Penelitian Kompetitif Nasional'";
					$data_user = mysqli_query($conn, $sql);

					if (!$data_user) {
						// Menampilkan pesan kesalahan jika query gagal
						die("Query gagal: " . mysqli_error($conn));
					}

					// Menghitung data
					$jumlah_user = mysqli_num_rows($data_user);
					?>

					<p>Laporan Program <b>Kompetitif Nasional</b> Keseluruhan</p>
					<div class="card">
						<div class="card-body" style="background-color:#fff;">
							<h4><i class="icon-file"></i> Total Laporan</h4><hr>
							<p align="center"><img src="adm/assets/img/bima.png" width="200"></p>
							<h2 align="center" class="well"><?php echo $jumlah_user; ?></h2>
						</div>
					</div>
				</div>
				
				<div class="span4">
					<?php
					// Menghubungkan dengan koneksi database
					include 'adm/conn.php';

					// Perbaikan sintaksis SQL dan penanganan kesalahan
					$sql = "SELECT * FROM riset WHERE program = 'Mandiri'";
					$data_user = mysqli_query($conn, $sql);

					if (!$data_user) {
						// Menampilkan pesan kesalahan jika query gagal
						die("Query gagal: " . mysqli_error($conn));
					}

					// Menghitung data
					$jumlah_user = mysqli_num_rows($data_user);
					?>

					<p>Laporan Program <b>MANDIRI</b> Keseluruhan</p>
					<div class="card">
						<div class="card-body" style="background-color:#fff;">
							<h4><i class="icon-file"></i> Total Laporan</h4><hr>
							<p align="center"><img src="adm/assets/img/mandiri.jpg" width="190"></p>
							<h2 align="center" class="well"><?php echo $jumlah_user; ?></h2>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row-fluid">
				
			</div>
			<!-- Statistik riset -->
			
			<div class="card-body">
				<table class="table table-hover" id="myData">
					<thead>
						<tr>
							<th>#</th>
							<th>Pelaksana</th>
							<th>Judul</th>
							<th>Program</th>
						</tr>
					</thead>
					<tbody>
					<?php
					include 'adm/conn.php';
					$no = 1;
					$sql = "SELECT * FROM riset";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
					while ($d = mysqli_fetch_assoc($result)) {
					?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><b><?php echo $d['author']; ?></b>, dkk</td>
							<td>
								<ul style="list-style: none;">
									<li><p><?php echo $d['title']; ?></p></li>
									<li>Bidang: <b><?php echo $d['focus']; ?></b></li>
									<li>Tahun: <b><?php echo $d['year']; ?></b></li>
								</ul>
							</td>
							<td>
								<ul style="list-style: none;">
									<li><p>Program: <b><?php echo $d['program']; ?></b></p></li>
									<li><p>Skema: <b><?php echo $d['scheme']; ?></b></p></li>
									<li><p>Dana Penelitian: <br><b>Rp. <?php echo $d['fund']; ?></b></p></li>
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