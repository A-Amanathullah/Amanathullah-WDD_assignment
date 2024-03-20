<?php require_once("header.php");?>
<?php session_start();?>

<?php
					if (isset($_SESSION["localuser"])) {
						?>
							<section class="home">
								<div class="content">
									<h3>stay healthy, be fit</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ea optio voluptatibus repellat ipsum soluta. Voluptate consectetur repellat repellendus porro enim?</p>
									<a href="#" class="btn">consult now</a>
								</div>
								<div class="image">
									<img src="img/img1.png" alt="">
								</div>
							</section>

						<?php require_once("footer.php");
					}
					elseif (isset($_SESSION["adminuser"])) {
						?>
							<section class="home">
								<div class="content">
									<h3>stay healthy, be fit</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ea optio voluptatibus repellat ipsum soluta. Voluptate consectetur repellat repellendus porro enim?</p>
									<a href="#" class="btn">consult now</a>
								</div>
								<div class="image">
									<img src="img/img1.png" alt="">
								</div>
							</section>

						<?php require_once("footer.php");
					}
					else {
						?>
						<section class="home">
							<div class="content">
								<h3>stay healthy, be fit</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ea optio voluptatibus repellat ipsum soluta. Voluptate consectetur repellat repellendus porro enim?</p>
								<a href="#" class="btn">consult now</a>
							</div>
							<div class="image">
								<img src="img/img1.png" alt="">
							</div>
						</section>

					<?php
					}
				 	?>
