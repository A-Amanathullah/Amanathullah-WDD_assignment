<?php require_once("header.php"); ?>
<?php session_start(); ?>
<?php 
$id =$_GET['id'];
$dname =$_GET['dname'];
$spcl =$_GET['spec'];
$a_date =$_GET['date'];
?>
<section class="contact">
    <br><br><br><br><br><br>
    <h1 class="heading"><span>Doctors</span> details</h1>

    <div class="wrapper">
        <form action="update.php" method="get">
            <h3>Table update</h3>
            <input type="text" value="<?php print $id; ?>" class="box" name="id" required>
            <input type="text" value="<?php print $dname; ?>" class="box" name="dname" required>
            <input type="text" value="<?php print $spcl; ?>" class="box" name="spec" required>
            <input type="date" class="box" value="<?php print $a_date; ?>" name="date" required>
            <input type="submit" value="update details" class="btn" name="update">
        </form>
    </div>
</section>


<?php require_once("footer.php"); ?>