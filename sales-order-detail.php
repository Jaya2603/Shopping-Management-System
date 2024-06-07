<?php
include "header.php";
include "dbcon.php";
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from sodview where SALES_ID=$id");
?>

<div class="main-panel">
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Master Tables </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      </ol>
    </nav>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title text-primary">SALES ORDER DETAIL</h4>
                    
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <th>SALES DETAILS ID</th>
                        <th>SALES ID</th>
                        <th>PRODUCT DETAILS ID</th>
                        <th>QUANTITY</th>
                        <th>RATE</th>
                        <th>OPERATION</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
           
            while($row=mysqli_fetch_assoc($rs))
            {
            $sodid=$row['SALES_DETAIL_ID'];
            $sid=$row['SALES_ID'];
            $pdid=$row['PD_ID'];
            $qut=$row['QUANTITY'];
            $rate=$row['RATE'];
          ?> 
              <tr>
                  <td><?php echo $sodid;?></td>
                  <td><?php echo $sid;?></td>
                  <td><?php echo $pdid;?></td>
                  <td><?php echo $qut;?></td>
                  <td><?php echo $rate;?></td>
                  <td><a type="button" class="btn btn-gradient-primary btn-sm" href="sales-order-edit.php?id=<?php echo $row['SALES_DETAIL_ID'];?>">Edit</a>
                  <a type="button" class="btn btn-gradient-primary btn-sm" href="sales-order-delete.php?id=<?php echo $row['SALES_DETAIL_ID'];?>">Delete</a><br><br></td>              
                </tr>
                  <?php
            }
            ?>
                      </tbody>
                    </table><br>
                    <a type="button" class="btn btn-inverse-danger btn-fw" href="sales-order-insert.php">ADD</a>
                  </div>
                </div>
              </div>
  <?php
         include "footer.php";
        ?>