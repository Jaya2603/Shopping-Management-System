<!DOCTYPE html>
<?php
include "header.php";
include "dbcon.php";
?><div class="main-panel">
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Deletion in Color Table </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      </ol>
    </nav>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
        <!doctype html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <title>shopping db</title>
    </head>    
<?php
$id=$_GET['id'];
    if(mysqli_query($con,"delete from Color where Color_id=$id"))
    {?>
    <div class="col-sm-6 col-md-4 col-lg-3">
    <i class="mdi mdi-checkbox-marked-circle"></i> 
                      </div>
        <?php echo "Data Deleted Successfully";
    }
    else
    {
        echo "Some error please try again";
    }
?>
<?php
         include "footer.php";
        ?>
        </div>
        </div>
        </div>
        </div>
