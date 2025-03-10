<section class="section section--border">

		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="home__title">Expected Premiere</h2><br><br>

				</div>
			</div>
			<div class="catalog">
				<div class="container">
					<div class="row row--grid">
						<?php
						include('conn.php');
						$sqlww = "SELECT * FROM `admin_add_premiere_item`  ORDER BY id DESC LIMIT 5";
						$resultww = mysqli_query($conn, $sqlww);
						while ($rowe = mysqli_fetch_array($resultww)) {
						?>
							<div class="col-4">
								<div class="card">
									<div class="card__cover" style="height:400px;  width:270px;">
										<img src="../admin/coverimages/<?php echo $rowe['cover']; ?>" class="card-img-top">
										<a href="details.php?movie_id=<?php echo $rowe['id']; ?>" class="card__play"><i class="icon ion-ios-play-circle"></i></a>
										<span class="card__rate card__rate--green"><?php echo $rowe['rating'] ?></span>
									</div>
									<div class="card__content">
										<h3 class="card__title"><a href="details.php?movie_id=<?php echo $rowe['id']; ?>"><?php echo $rowe['title']; ?></a></h3>
										<span class="card__category">
											<a href="<?php echo $rowe['genre'] ?>"><?php echo $rowe['genre'] ?></a>
										</span>
									</div>
								</div>
							</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>



			<!-- end card -->


		</div>
		</div>
	</section>