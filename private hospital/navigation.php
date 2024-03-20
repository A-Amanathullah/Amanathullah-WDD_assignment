<?php session_start();?>
<header>
    <a href="index.php" class="logo">SpecialClinic+</a>
    <nav class="navbar">
        <?php
        if (isset($_SESSION["localuser"]) ){
            ?>
            <a href="index.php">Home</a>
            <a href="about.php">About us</a>
            <a href="booking.php">Booking</a>
            <a href="contact.php">Contact us</a>
            <a href="popup.php">Logout</a>
            <?php
        }
        elseif(isset($_SESSION["adminuser"])) {
            ?>
            <a href="index.php">Home</a>
            <a href="booking.php">Doctors info</a>
            <a href="popup.php">Logout</a>
            <?php
        }
        else {
            ?>
            <a href="login.php">Login</a>
            <?php
        }
        ?>
    </nav>
</header>

