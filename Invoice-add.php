<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $cname=$_POST['cname'];
    $date=$_POST['date'];
    $total=$_POST['total'];
    if(mysqli_query($con,"insert into invoice(CUSTOMER_ID,DATE,TOTAL) values('$cname','$date','$total')"))
    {?>
      <div class="col-sm-6 col-md-4 col-lg-3">
      <i class="mdi mdi-checkbox-marked-circle">Inserted</i> 
                        </div>
                        <?php
    }
    else
    {?>
      <div class="col-sm-6 col-md-4 col-lg-3">
                          <i class="mdi mdi-bell-ring">Some error</i>
                        </div>
                        <?php
    }
}
?>

<div class="main-panel">
<div class="content-wrapper">
  <div class="page-header">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      </ol>
    </nav>
  </div>
  <div class="col-lg-9 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title text-primary">INSERTION IN INVOICE TABLE</h4>
                  <form method="post" enctype="multipart/form-data">
                  Select Customer Name:
        <select name="cname" class="form-control" >
        <?php
            $rs=mysqli_query($con,"select * from Customer");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['CUSTOMER_ID'];?>"><?php echo $row['CUSTOMER_NAME'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        Enter Date:<input type="datetime-local" name="date" class="form-control" placeholder="Date-Time"><br>
        Enter Total:<input type="number" name="total" class="form-control" placeholder="Total"><br>
        <button type="submit" class="btn btn-gradient-primary me-2">Insert</button><br>  
    </form> 
              <br>
               
                    <!--<a type="button" class="btn btn-inverse-danger btn-fw" href="Invoice-add.php">INSERT</a>-->
                  </div>
                </div>
              </div>

  <?php
         include "footer.php";
        ?>