<?php require_once("header.php");?>
<?php session_start();?>


    <section class="contact">
        <br><br><br>
        <h1 class="heading"><span>Login to</span> our page</h1>

        <div class="wrapper">
            <div class="image">
                <img src="img/login.png" alt="">
            </div>

            <form action="login.php" method="post">
                <h3>Login</h3>
                <input type="text" placeholder="User name" class="box" name="user" required>
                <input type="password" placeholder="Password" class="box" name="password" required>
                <div class="create">If you don't have account  <a href="signup.php">click me to create new.</a></div>
                <input type="submit" value="login" class="btn" name="login" >
            </form>
        </div>
    </section>

<?php require_once("footer.php");?>


    <?php 
    if (isset($_POST["login"])){
        $u_name = $_POST["user"];
        $u_password = md5($_POST["password"]);

        $query = "SELECT * FROM users WHERE username= '$u_name' && password= '$u_password'";
        $result = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $u_type = $row["user_type"];
            $user_name = $row["username"];
            $user_password = $row["password"];
            
            if ($u_type == "ADMIN"){
                unset($_SESSION["localuser"]);
                $_SESSION['adminuser']= $u_name;
                header('location:index.php');
            }
            else if ($u_type == "LOCAL"){
                unset($_SESSION["adminuser"]);
                $_SESSION['localuser']= $u_name;
                header('location:index.php');

            }
            else{
                echo'no user found!!';
            }
        }

    }
    else{
        echo 'Wrong password or username';
        header("index.php");}
    ?>
