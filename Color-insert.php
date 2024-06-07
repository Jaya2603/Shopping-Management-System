<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?><div class="main-panel">
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Insertion in Color Table </h3>
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
  Enter Color Name:<input class="form-control" id="exampleInputUsername2" placeholder="Color Name" type="text" name="cname" required><br>
  Enter Color Code: 
   <class="container">
	<form role="form">
    	
      	<div class="form-group">
            <!--<label for="cp2">CSS Customized Color Picker :</label><br>-->
    	    <input type="color"  name="ccode" required value="#9b59b6" class="custom">
      	</div>
  	</form>


  
  <button type="submit" class="btn btn-gradient-primary me-2">Insert</button>
  </div>
</form>
</div>
</div>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $cn=$_POST['cname'];
    $cc=$_POST['ccode'];
    ?>
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

    <div class="col-sm-7 col-md-4 col-lg-3">
                        <i class="mdi mdi-checkbox-marked-circle"></i> 
                      </div>
   <?php
    if(mysqli_query($con,"insert into color (color_name,color_code) values('$cn','$cc')"))
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
