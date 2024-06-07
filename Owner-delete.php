<?php
include "dbcon.php";
$id=$_GET['id'];
    if(mysqli_query($con,"delete from owner where owner_id=$id"))
    {
        echo "Data Deleted Successfully";
    }
    else
    {
        echo "Some error please try again";
    }
?>
