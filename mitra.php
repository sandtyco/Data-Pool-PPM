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
						<li class="dropdown active">
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
						<li class="dropdown">
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
					<li class="active">Mitra</li>
				</ul>
			</div>
			<div>
				<h2 align="center">Laporan Data Mitra Kerjasama Universitas Amikom Purwokerto</h2>
				<h4 align="center">Update Data Terakhir Pada Tahun <b>2024</b></h4>
				<h4 align="center">Berdasarkan pelaporan Pusat Inkubator Bisnis</h4><hr>
				<!-- Statistik client -->
				<div class="row-fluid">
					<div class="span3">
						<?php
						// menghubungkan dengan koneksi database
						include 'adm/conn.php';
						// nilai jenis_client yang ingin dihitung
						$data_target = "Pemerintah";
						// query untuk menghitung jumlah data dengan jenis_client tertentu
						$sql = "SELECT COUNT(*) AS jumlah FROM client WHERE jenis_client = '$data_target'";
						$result = mysqli_query($conn, $sql);
						// ambil hasil query
						$row = mysqli_fetch_assoc($result);
						$jumlah_jenis_client = $row['jumlah'];
						?>
						<div class="card well">
							<div class="card-body" style="background-color:#FF7E7E;">
								<h4><i class="icon-map-marker"></i> <?php echo $data_target; ?></h4><hr>
								<h3 align="right"><?php echo $jumlah_jenis_client; ?></h3>
							</div>
							<div class="card-footer d-flex align-items-center justify-content-between">
								<div class="small text-white"><i class="glyphicon glyphicon-eye-open"></i></div>
							</div>
						</div>
					</div><!--/span-->
					<div class="span3">
						<?php
						// menghubungkan dengan koneksi database
						include 'adm/conn.php';
						// nilai jenis_client yang ingin dihitung
						$data_target = "Institusi";
						// query untuk menghitung jumlah data dengan jenis_client tertentu
						$sql = "SELECT COUNT(*) AS jumlah FROM client WHERE jenis_client = '$data_target'";
						$result = mysqli_query($conn, $sql);
						// ambil hasil query
						$row = mysqli_fetch_assoc($result);
						$jumlah_jenis_client = $row['jumlah'];
						?>
						<div class="card well">
							<div class="card-body" style="background-color:#7EA9FF;">
								<h4><i class="icon-map-marker"></i> <?php echo $data_target; ?></h4><hr>
								<h3 align="right"><?php echo $jumlah_jenis_client; ?></h3>
							</div>
							<div class="card-footer d-flex align-items-center justify-content-between">
								<div class="small text-white"><i class="glyphicon glyphicon-eye-open"></i></div>
							</div>
						</div>
					</div><!--/span-->
					<div class="span3">
						<?php
						// menghubungkan dengan koneksi database
						include 'adm/conn.php';
						// nilai jenis_client yang ingin dihitung
						$data_target = "Departemen";
						// query untuk menghitung jumlah data dengan jenis_client tertentu
						$sql = "SELECT COUNT(*) AS jumlah FROM client WHERE jenis_client = '$data_target'";
						$result = mysqli_query($conn, $sql);
						// ambil hasil query
						$row = mysqli_fetch_assoc($result);
						$jumlah_jenis_client = $row['jumlah'];
						?>
						<div class="card well">
							<div class="card-body" style="background-color:#7EA9FF;">
								<h4><i class="icon-map-marker"></i> <?php echo $data_target; ?></h4><hr>
								<h3 align="right"><?php echo $jumlah_jenis_client; ?></h3>
							</div>
							<div class="card-footer d-flex align-items-center justify-content-between">
								<div class="small text-white"><i class="glyphicon glyphicon-eye-open"></i></div>
							</div>
						</div>
					</div><!--/span-->
					<div class="span3">
						<?php
						// menghubungkan dengan koneksi database
						include 'adm/conn.php';
						// nilai jenis_client yang ingin dihitung
						$data_target = "Organisasi";
						// query untuk menghitung jumlah data dengan jenis_client tertentu
						$sql = "SELECT COUNT(*) AS jumlah FROM client WHERE jenis_client = '$data_target'";
						$result = mysqli_query($conn, $sql);
						// ambil hasil query
						$row = mysqli_fetch_assoc($result);
						$jumlah_jenis_client = $row['jumlah'];
						?>
						<div class="card well">
							<div class="card-body" style="background-color:#BFFB07;">
								<h4><i class="icon-map-marker"></i> <?php echo $data_target; ?></h4><hr>
								<h3 align="right"><?php echo $jumlah_jenis_client; ?></h3>
							</div>
							<div class="card-footer d-flex align-items-center justify-content-between">
								<div class="small text-white"><i class="glyphicon glyphicon-eye-open"></i></div>
							</div>
						</div>
					</div><!--/span-->
				</div>
			</div>
			
			<div class="card-body">
				<table class="table table-hover" id="myData">
					<thead>
						<tr>
							<th>#</th>
							<th>Logo/Foto</th>
							<th>Nama Mitra</th>
							<th>Pimpinan</th>
							<th>Kategori</th>
							<th>Alamat</th>
							<th>Kontak</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include 'adm/conn.php';
						$no = 1;
						$sql = "SELECT * FROM client";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
						while ($d = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><img src="../../../assets/upload/client/<?php echo $d['gambar']; ?>" class="img-polaroid img-thumbs"></td>
							<td><?php echo $d['nama']; ?></td>
							<td><?php echo $d['pimpinan']; ?></td>
							<td><?php echo $d['jenis_client']; ?></td>
							<td><?php echo $d['alamat']; ?></td>
							<td>
								<ul style="list-style: none;">
									<li><i class="icon-signal"></i> <?php echo $d['telepon']; ?></li>
									<li><i class="icon-envelope"></i> <?php echo $d['email']; ?></li>
									<li><i class="icon-globe"></i> <a href="<?php echo $d['website']; ?>" target="_blank"><?php echo $d['website']; ?></a></li>
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