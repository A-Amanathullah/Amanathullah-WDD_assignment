<?php require_once("header.php");?>
<?php session_start();?>
<?php
					if (isset($_SESSION["localuser"])) {
						?>
							<section class="about">
							<br><br><br><br><br><br>
								<h1 class="heading">about <span>us</span></h1>

								<div class="wrapper">
					 				<div class="image">
										<img src="img/img2.png" alt="">
									</div>
									<div class="content">
										<h3>why you should choose us</h3>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Laborum blanditiis inventore magni dignissimos rerum debitis minus aliquam neque quisquam hic dicta nemo nostrum, totam cum esse sint velit natus autem!</p>
										<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Consequuntur enim vitae odio earum sunt quam eaque illum quia aperiam, ad.</p>
										<a href="#" class="btn">learn more</a>
									</div>
								</div>
							</section> 
						<?php require_once("footer.php");
					}
					elseif (isset($_SESSION["adminuser"])) {
						?>
							<section class="about">
							<br><br><br><br><br><br>
								<h1 class="heading">about <span>us</span></h1>

								<div class="wrapper">
									<div class="image">
										<img src="img/img2.png" alt="">
									</div>
									<div class="content">
										<h3>why you should choose us</h3>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Laborum blanditiis inventore magni dignissimos rerum debitis minus aliquam neque quisquam hic dicta nemo nostrum, totam cum esse sint velit natus autem!</p>
										<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Consequuntur enim vitae odio earum sunt quam eaque illum quia aperiam, ad.</p>
										<a href="#" class="btn">learn more</a>
									</div>
								</div>
							</section> 
						 <?php require_once("footer.php");
					}
					else {
						require_once("login.php");
					}
				 	?>

