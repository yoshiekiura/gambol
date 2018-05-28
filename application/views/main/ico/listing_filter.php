<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		ICO Listing Filters
	</h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="#">
				<i class="fa fa-dashboard"></i> Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="#">Initial Coin Offering</a>
		</li>
		<li class="breadcrumb-item active">ICO Listing Filters</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="box bg-light">
		<div class="box-body p-0">
			<div class="row">
				<div class="col-lg-3">
					<div>
						<input class="form-control text-dark p-30 bg-yellow" type="text" data-ref="input-search" placeholder="Search Contact">
					</div>
				</div>
				<div class="col-lg-9">
					<ul class="list-inline mb-0 text-center">
						<!-- <li data-filter="all">
							<a href="#" class="btn text-bold list-link hover-yellow p-15">Show all</a>
						</li>
						<li data-filter=".finance">
							<a href="#" class="btn text-bold list-link hover-yellow p-15">Finance</a>
						</li>
						<li data-filter=".realestate">
							<a href="#" class="btn text-bold list-link hover-yellow p-15">Real Estate</a>
						</li>
						<li data-filter=".healthcare">
							<a href="#" class="btn text-bold list-link hover-yellow p-15">Healthcare</a>
						</li>
						<li data-filter=".advertising">
							<a href="#" class="btn text-bold list-link hover-yellow p-15">Advertising</a>
						</li>
						<li data-filter=".banking">
							<a href="#" class="btn text-bold list-link hover-yellow p-15">Banking</a>
						</li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-12">
			<div class="box">
				<div class="box-body p-0">
					<div class="media-list media-list-hover media-list-divided radio-group radios-filter">
						<div class="media">
							<div class="radio">
								<input name="group1" value="all" type="radio" class="with-gap radio-col-yellow" id="radio_0" checked>
								<label for="radio_0" class="mb-0 font-weight-600">All</label>
							</div>
						</div>
						<!-- <div class="media">
							<div class="radio">
								<input name="group1" value=".sponsored" type="radio" class="with-gap radio-col-yellow" id="radio_1">
								<label for="radio_1" class="mb-0 font-weight-600">Sponsored</label>
							</div>
						</div>
						<div class="media">
							<div class="radio">
								<input name="group1" value=".medium" type="radio" class="with-gap radio-col-yellow" id="radio_2">
								<label for="radio_2" class="mb-0 font-weight-600">Medium</label>
							</div>
						</div>
						<div class="media">
							<div class="radio">
								<input name="group1" value=".neutral" type="radio" class="with-gap radio-col-yellow" id="radio_3">
								<label for="radio_3" class="mb-0 font-weight-600">Neutral</label>
							</div>
						</div>
						<div class="media">
							<div class="radio">
								<input name="group1" value=".notrated" type="radio" class="with-gap radio-col-yellow" id="radio_4">
								<label for="radio_4" class="mb-0 font-weight-600">Not rated</label>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-9 col-12">
			<div class="row ico-filter" data-ref="ico-filter">
				<?php
			foreach ($crypto as $row) {
				?>
					<div class="col-12 col-md-6 col-lg-4 mix realestate sponsored">
						<div class="box box-body bg-hexagons-white pull-up">
							<div class="media align-items-center p-0">
								<div class="text-center">
									<a href="#">
										<img src="<?= $image_path . $row["ImageUrl"] ?>" class="coin-image">
									</a>
								</div>
								<div>
									<h4 class="no-margin text-bold">
										<?= $row["CoinName"]?>
									</h4>
									<span>
										<?= $row["Name"]?>
									</span>
								</div>
							</div>
							<div class="flexbox align-items-center mt-25">
								<div>
									<p class="no-margin font-weight-600">
										<span class="text-yellow">USD $ <?= $row["price"]?></span>
									</p>
									<!-- <p class="no-margin">Sponsored</p> -->
								</div>
								<!-- <div class="text-right">
									<p class="no-margin font-weight-600">
										<span class="text-yellow">84%</span>
									</p>
									<p class="no-margin">9d left</p>
								</div> -->
							</div>
						</div>
					</div>
					<?php

			}
			?>
					<div class="col-12 col-md-6 col-lg-4 mix realestate sponsored">
						<div class="box box-body bg-hexagons-white pull-up">
							<div class="media align-items-center p-0">
								<div class="text-center">
									<a href="#">
										<!-- <img src="<?= base_url() ?>images/sample_coin.svg" class="coin-image"> -->
									</a>
								</div>
								<div>
									<h4 class="no-margin text-bold">
										Bolcoin
									</h4>
									<span>
										BOL
									</span>
								</div>
							</div>
							<div class="flexbox align-items-center mt-25">
								<div>
									<p class="no-margin font-weight-600">
										<span class="text-yellow">USD $ 1</span>
									</p>
									<!-- <p class="no-margin">Sponsored</p> -->
								</div>
								<!-- <div class="text-right">
									<p class="no-margin font-weight-600">
										<span class="text-yellow">84%</span>
									</p>
									<p class="no-margin">9d left</p>
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
		</div>
	</div>
</section>
<!-- /.content -->
