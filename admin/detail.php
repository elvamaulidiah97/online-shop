<!doctype html>
<html lang="en">

<head>
	<title>User | Admin - NextProject</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
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
							<div id="subPages" class="collapse ">
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
					<h3 class="page-title">Barang</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Table Barang</h3>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Nama</th>
												<th>Harga</th>
												<th>Deskripsi</th>
												<th>Size</th>
												<th>Tipe</th>
												<th>Stok</th>
												<th>Gambar</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Details</td>
												<td>225000</td>
												<td>Kemeja Putih</td>
												<td>L</td>
												<td>Party</td>
												<td>21</td>
												<td><buttom class="btn btn-primary" data-toggle="modal" data-target="#myModal">Lihat</buttom></td>
											</tr>
											<tr>
												<td>2</td>
												<td>Park Avenue</td>
												<td>200000</td>
												<td>Kemeja Biru gelap</td>
												<td>L</td>
												<td>Men</td>
												<td>25</td>
												<td><buttom class="btn btn-primary">Lihat</buttom></td>
											</tr>
											<tr>
												<td>3</td>
												<td>Details</td>
												<td>150000</td>
												<td>Kemeja Coklat</td>
												<td>M</td>
												<td>Men</td>
												<td>26</td>
												<td><buttom class="btn btn-primary">Lihat</buttom></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
							<!-- Modal -->
							<div id="myModal" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Gambar</h4>
							      </div>
							      <div class="modal-body">
							        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 300px; margin: 0 auto">
									  <!-- Indicators -->
									  <ol class="carousel-indicators">
									    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									    <li data-target="#myCarousel" data-slide-to="1"></li>
									    <li data-target="#myCarousel" data-slide-to="2"></li>
									  </ol>

									  <!-- Wrapper for slides -->
									  <div class="carousel-inner">
									    <div class="item active">
									      <img src="../images/mp1.jpg" alt="baju coklat">
									    </div>

									    <div class="item">
									      <img src="../images/mp2.jpg" alt="baju jeans">
									    </div>

									    <div class="item">
									      <img src="../images/mp3.jpg" alt="baju hitam">
									    </div>
									  </div>

									  <!-- Left and right controls -->
									  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
									    <span class="glyphicon glyphicon-chevron-left"></span>
									    <span class="sr-only">Previous</span>
									  </a>
									  <a class="right carousel-control" href="#myCarousel" data-slide="next">
									    <span class="glyphicon glyphicon-chevron-right"></span>
									    <span class="sr-only">Next</span>
									  </a>
									</div>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>

							  </div>
							</div>
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
