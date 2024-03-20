<?php require_once("header.php");?>
<?php session_start();?>

<?php
					if (isset($_SESSION["localuser"])) {
						?>
							<section class="contact">
								<br><br><br><br><br><br>
								<h1 class="heading"><span>contact</span> us</h1>

								<div class="wrapper">
									<div class="image">
										<img src="img/img3.png" alt="">
									</div>

									<form action="contact.php" method="post">
										<h3>book appointment</h3>
										<input type="text" placeholder="your name" class="box" name="name">
										<input type="email" placeholder="your email" class="box" name="email">
										<input type="number" placeholder="your phone number" class="box" name="phone">
										<input type="date" class="box" name="date">
										<input type="submit" value="place appointment" class="btn" name="appoint">
									</form>
								</div>
							</section>
							<?php 
							if (isset($_POST["appoint"])) {
									$user = "94757380318";
									$password = "1745";
									$name = htmlspecialchars($_POST["name"]);
									$email = htmlspecialchars($_POST["email"]);
									$phone = htmlspecialchars($_POST["phone"]);
									$date = htmlspecialchars($_POST["date"]);

								$text = urlencode("Appointment <br> Name:$name <br>
													Email: $email <br> phone no: $phone <br>
													Date:$date");
								$to = "94702410397";

								$baseurl ="http://www.textit.biz/sendmsg";
								$url = "$baseurl/?id=$user&pw=$password&to=$to&text=$text";
								$ret = file($url);

								$res= explode(":",$ret[0]);

								if (trim($res[0])=="OK")
								{
								echo "Message Sent - ID : ".$res[1];
								}
								else
								{
								echo "Sent Failed - Error : ".$res[1];
								}

							$query = "INSERT INTO appointment VALUES('','$name','$email','$phone','$date')";
							$result = mysqli_query($connection,$query);}
							?>
							<?php require_once("footer.php");
					}
					else {
						require_once("login.php");
					}
				 	?>

