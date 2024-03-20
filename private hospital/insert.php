<?php require_once("header.php"); ?>
<?php session_start(); ?>

<section class="contact">
    <br><br><br><br><br><br>
    <h1 class="heading"><span>Doctors</span> details</h1>

    <div class="wrapper">
        <form action="insert.php" method="post">
            <h3>Table Insert</h3>
            <input type="text" placeholder="Doctor name" class="box" name="dname" required>
            <input type="text" placeholder="Specialization" class="box" name="spec" required>
            <input type="date" class="box" name="date" required>
            <input type="submit" value="Add details" class="btn" name="add">
        </form>
    </div>
</section>

<?php
if (isset($_POST["add"])) {
    $d_name = $_POST["dname"];
    $special = $_POST["spec"];
    $a_date = $_POST["date"];
    $error = false;


    if (empty($d_name) || empty($special) || empty($a_date)) {
        $error = true;
        $error_message = "Please fill in all the required fields.";
    }

    if (!$error) {
        $query = "INSERT INTO doctors VALUES ('', '$d_name', '$special', '$a_date')";
        $result = mysqli_query($connection, $query);

        if ($result) {
			header("Location: booking.php");
            echo "Details added successfully!";
        } else {
            $error = true;
            $error_message = "Error adding details to the database: " . mysqli_error($connection);
        }
    }

    if ($error) {
        header("Location: insert.php?error=" . urlencode($error_message));
        exit();
    }
} else {
    echo "No data available";
}
?>

<?php require_once("footer.php"); ?>