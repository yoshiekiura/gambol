<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		ICO Listing
	</h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="#">
				<i class="fa fa-dashboard"></i> Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="#">Initial Coin Offering</a>
		</li>
		<li class="breadcrumb-item active">ICO Listing</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<?php
	foreach ($crypto as $row) {
		?>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="box box-body bg-hexagons-white pull-up">
					<div class="media align-items-center p-0">
						<div class="text-center">
							<a href="#">
								<img src="<?= $image_path . $row["ImageUrl"] ?>" class="coin-image">
							</a>
						</div>
						<div>
							<h4 class="no-margin text-bold">
								<?= $row["CoinName"] ?>
							</h4>
							<span>
								<?= $row["Name"] ?>
							</span>
						</div>
					</div>
					<div class="flexbox align-items-center mt-25">
						<div>
							<p class="no-margin font-weight-600">
								<span class="text-yellow">
									USD $
									<?= $row["price"] ?>
								</span>
							</p>
							<!-- <p class="no-margin">Sponsored</p> -->
						</div>
						<!-- <div class="text-right">
							<p class="no-margin font-weight-600">
								<span class="text-yellow">40%</span>
							</p>
							<p class="no-margin">8d left</p>
						</div> -->
					</div>
				</div>
			</div>
			<?php

	}
	?>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="box box-body bg-hexagons-white pull-up">
					<div class="media align-items-center p-0">
						<div class="text-center">
							<a href="#">
								<img src="<?= base_url() ?>images/sample_coin.svg" class="coin-image">
							</a>
						</div>
						<div>
							<h4 class="no-margin text-bold">
								Boldcoin
							</h4>
							<span>
								BDC
							</span>
						</div>
					</div>
					<div class="flexbox align-items-center mt-25">
						<div>
							<p class="no-margin font-weight-600">
								<span class="text-yellow">
									USD $ 1
								</span>
							</p>
								<!-- <p class="no-margin">Sponsored</p> -->
						</div>
						<!-- <div class="text-right">
							<p class="no-margin font-weight-600">
								<span class="text-yellow">40%</span>
							</p>
							<p class="no-margin">8d left</p>
						</div> -->
					</div>
				</div>
			</div>
	</div>

	<!-- <nav>
		<ul class="pagination justify-content-center">
			<li class="page-item disabled">
				<a class="page-link" href="#">
					<span class="ion-ios-arrow-thin-left"></span>
				</a>
			</li>
			<li class="page-item active">
				<a class="page-link" href="#">1</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">2</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">3</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">4</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">5</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">
					<span class="ion-ios-arrow-thin-right"></span>
				</a>
			</li>
		</ul>
	</nav> -->

</section>
<!-- /.content -->
