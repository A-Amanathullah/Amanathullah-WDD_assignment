<?php require_once("header.php");?>
<?php session_start();?>
    <section class="contact">
		<br><br><br><br>
		<h1 class="heading"><span>sign</span> up</h1>
		<div class="wrapper">

			<form action="signup.php" method="post">
				<input type="text" placeholder="your full name" class="box" name="f_name" required>
                <input type="text" placeholder="Home address" class="box" name="address" required>
				<input type="tel" placeholder="your phone number" class="box" name="phone" required>
                <input type="email" placeholder="your email" class="box" name="email">
				<input type="text" placeholder="User name" class="box" name="uname" required>
                <input type="password" placeholder="Password" class="box" name="pass" required>
                <input type="password" placeholder="Re-enter your password" class="box" name="repass" required><br>
                <div class="create">If you already have account  <a href="login.php">click me to login.</a></div>
				<input type="submit" value="Create" class="btn" name="signup" >
			</form>
		</div>
	</section>
    <?php 
    if (isset($_POST["signup"])){
        $f_name = $_POST["f_name"];
		$address = $_POST["address"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$uname = $_POST["uname"];
		$pass = md5($_POST["pass"]);
		$repass= md5($_POST["repass"]);

		if ($pass == $repass){
			$query= "INSERT INTO user_details VALUES ('','$f_name','$address','$phone','$email','$uname')";
			$execute = mysqli_query($connection,$query);

			$query1 = "INSERT INTO users VALUES ('','LOCAL','$uname','$pass')";
			$execute1 = mysqli_query($connection,$query1);
		}
		else{
			echo"enter same password to re password!!";
		}

    }
	else{echo"no data available !!";}
    ?>

	<?php require_once("footer.php");?>