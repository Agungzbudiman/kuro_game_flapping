
<!-- Header -->
<header id="header" class="header" style="background: #2f2c3dd9">
	<div class="header-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="text-container">
						<h1>Flapping Bird <br>FOR <span id="js-rotating">You</span></h1>
						<p class="p-large">Play it now!</p>
						<a class="btn-solid-lg page-scroll" href="<?= base_url('game/play') ?>"><i class="fa fa-globe" style="margin-right: 0.5rem;
						font-size: 1.25rem;
						line-height: 0;
						vertical-align: top;"></i>Lets Play</a>
<!-- <a class="btn-solid-lg page-scroll" href="#your-link"><i class="fab fa-apple"></i>APP STORE</a>
	<a class="btn-solid-lg page-scroll" href="#your-link"><i class="fab fa-google-play"></i>PLAY STORE</a> -->
</div>
</div> <!-- end of col -->
<div class="col-lg-6">
	<div class="image-container">
		<img class="img-fluid" src="<?= base_url('assets/') ?>images/header-iphone.png" alt="alternative">
	</div> <!-- end of image-container -->
</div> <!-- end of col -->
</div> <!-- end of row -->
</div> <!-- end of container -->
</div> <!-- end of header-content -->
</header> <!-- end of header -->
<!-- end of header -->

<!-- Features -->
<div id="features" class="tabs">
	<div class="container">
		<div class="row">
			<div class="col-lg-6" style="margin: auto;">
				<h2>High Score</h2>
				<table class="table" style="color: white">
					<thead style="background: #2f2c3d">
						<tr>
							<th scope="col">#</th>
							<th scope="col">Name</th>
							<th scope="col">Score</th>
						</tr>
					</thead>
					<?php 
					$highscore = $this->db->query("select * from tbl_user order by score desc limit 10")->result();
					?>
					<tbody style="background: #2f2c3d">
						<?php foreach ($highscore as $key => $value) { ?>
						<tr>
							<th scope="row"><?= $key+1 ?></th>
							<td><?= $value->username ?></td>
							<td><?= $value->score ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div> <!-- end of col -->
		</div> <!-- end of row -->
	</div> <!-- end of container --> 
</div> <!-- end of tabs -->
<!-- end of features -->