<?php

include("connection.php");

$id = $_GET['id'];

$query = "DELETE FROM form_crud1 WHERE id='$id'";

$data = mysqli_query($conn,$query);   // its needs two parameters

// $total = mysqli_num_rows($data);

// $result = mysqli_fetch_assoc($data);    // while --> jab tak 

if($data)
{
    // echo "Record Deleted";
    echo "<script>alert('Record Deleted')</script>";


    ?>

<meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php" />


    <?php
}
else
{
    // echo "Failed to Deleted.";
    echo "<script>alert('Failed to delete')</script>";

}

?>