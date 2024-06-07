<?php
include "header.php";
include "dbcon.php";
?>
<div class="main-panel">
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Master Tables</h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      </ol>
    </nav>
  </div>
  <div class="col-lg-9 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title text-primary">PURCHASE ORDER DETAIL</h4>
                    
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <th>  PURCHASE ORDER DETAILS ID</th>
                        <th>  PURCHASE ID</th>
                        <th>  PRODUCT DETAILS ID</th>
                        <th>  QUANTITY</th>
                        <th>  RATE</th>
                        <th>  OPERATION</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
           $rs=mysqli_query($con,"select * from podview");
            while($row=mysqli_fetch_assoc($rs))
            {?>
            <tr>
              <td><?php echo$row['POD_ID'];?></td>
              <td><?php echo$row['PURCHASE_ID'];?></td>
              <td><?php echo$row['PD_ID'];?></td>
              <td><?php echo$row['QUANTITY'];?></td>
              <td><?php echo$row['RATE'];?></td>
              <td><a type="button" class="btn btn-gradient-primary btn-sm" href="Purchase-order-detail-update.php?id=<?php echo $row['POD_ID'];?>">Edit</a>
                  <a type="button" class="btn btn-gradient-primary btn-sm" href="Purchase-order-detail-delete.php?id=<?php echo $row['POD_ID'];?>">Delete</a><br><br>
               </tr>
                  <?php
            }
            ?>
                      </tbody>
                    </table><br>
                    <a type="button" class="btn btn-inverse-danger btn-fw" href="Purchase-order-detail-add.php">ADD</a>
                  </div>
                </div>
              </div>
  <?php
         include "footer.php";
        ?>