<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?><div class="main-panel">
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Insertion in Type Table </h3>
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
<form class="forms-sample"  method="post">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label"><b>Enter Type Name:</b></label>
                        <div class="col-sm-9">
                          <input class="form-control" id="exampleInputUsername2"pattern="[a-zA-Z]{1,}" oninvalid="setCustomValidity('Please enter Alphabets.')" placeholder="Type Name" type="text" name="tname" required><br>
                          <button type="submit" class="btn btn-gradient-primary me-2">Insert</button>
                        </div>
                      </div>
                      </div>
</form>
</div>
</div>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $tn=$_POST['tname'];
    ?>
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

    <div class="col-sm-7 col-md-4 col-lg-3">
                        <i class="mdi mdi-checkbox-marked-circle"></i> 
                      </div>
   <?php
    if(mysqli_query($con,"insert into type (TYPE_NAME) values('$tn')"))
    {
        echo "Data Inserted Successfully";
    }
    else
    { ?>
    <div class="col-sm-6 col-md-4 col-lg-3">
                        <i class="mdi mdi-bell-ring"></i>
                      </div>
                      <?php
        echo "Some error please try again";
    }
}
?>
<?php
         include "footer.php";
        ?>
        </div>
        </div>
        </div>
        </div>