<?php require_once("header.php");?>
<?php session_start();?>
<?php 
    $id = $_GET['id'];

    $query = "DELETE FROM doctors WHERE id='$id'";
    $result = mysqli_query($connection,$query);

    if ($result) {
        header("Location: booking.php");
        echo "Details added successfully!";
    } else {
        $error = true;
        $error_message = "Error adding details to the database: " . mysqli_error($connection);
    }
?>
<?php require_once("footer.php"); ?>