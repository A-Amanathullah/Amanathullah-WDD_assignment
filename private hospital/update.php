<?php require_once("header.php"); ?>
<?php session_start(); ?>


<?php
    $d_id=$_GET['id'];
    $d_name = $_GET["dname"];
    $special = $_GET["spec"];
    $a_date = $_GET["date"];
    $error = false;

    // Basic form validation
    if (empty($d_name) || empty($special) || empty($a_date)) {
        $error = true;
        $error_message = "Please fill in all the required fields.";
    }

    if (!$error) {
        $query = "UPDATE doctors SET doctor_name='$d_name', specialization='$special', date= '$a_date' WHERE id = '$d_id'";
        $result = mysqli_query($connection, $query);

        if ($result) {
            header("Location: booking.php");
            echo "Details added successfully!";
        } else {
            $error = true;
            $error_message = "Error adding details to the database: " . mysqli_error($connection);
        }
    }
?>

<?php require_once("footer.php"); ?>