<!doctype html>
<html lang="en">

<head>
	<title>Tambah | Admin - NextProject</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<!-- <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png"> -->
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<?php include('header.php') ?>
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed active"><i class="lnr lnr-gift"></i> <span>Produk</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse">
								<ul class="nav">
									<li><a href="tambah.php" class="">Tambah</a></li>
									<li><a href="detail.php" class="">Detail</a></li>
								</ul>
							</div>
						</li>
						<li><a href="pesanan.php" class=""><i class="lnr lnr-cart"></i> <span>Pesanan</span></a></li>
						<li><a href="users.php" class=""><i class="lnr lnr-user"></i> <span>Users</span></a></li>
						<li><a href="laporan.php" class=""><i class="lnr lnr-chart-bars"></i><span>Laporan</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Tambah</h3>
					<div class="row">
						<div class="col-md-6">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Tambah Barang</h3>
								</div>
								<div class="panel-body">
									Nama:<br>
									<input type="text" class="form-control" placeholder="Nama"><br>
									Upload gambar:
									<input type="file" class="form-control" placeholder="Gambar"><br>
									Harga:
									<input type="number" class="form-control" placeholder="Rp."><br>
									Deskripsi:
									<textarea class="form-control" placeholder="deskripsi" rows="4"></textarea>
									<br>
									Tipe:
									<select class="form-control">
										<option value="Men">Men</option>
										<option value="Kid">Kid</option>
										<option value="Party">Party</option>
										<option value="Casual">Casual</option>
										<option value="Night">Night</option>
										<option value="Inner">Inner</option>
									</select>
									<br>
									<button class="btn btn-primary">Tambah</button>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
 