<?php
include "header.php";
include "dbcon.php";
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
   <!-- EMPLOYEE table -->
   <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title text-primary">INVOICE PRODUCT DETAIL</h4>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>INVOICE PRODUCT DETAILS ID</th>
                          <th>INVOICE ID</th>
                          <th>SALES_ID</th>
                          <th>QUANTITY</th>
                          <th>RATE</th>
                          <th>OPERATIONS</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
            $rs=mysqli_query($con,"select * from ipdview");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <tr>
                  <td><?php echo $row['IVPD_ID'];?></td>
                  <td><?php echo $row['I_ID'];?></td>
                  <td><?php echo $row['SALES_ID'];?></td>
                  <td><?php echo $row['QUANTITY'];?></td>
                  <td><?php echo $row['RATE'];?></td>
                  <td><a type="button" class="btn btn-gradient-primary btn-sm" href="invoice-product-detail-edit.php?id=<?php echo $row['IVPD_ID'];?>">Edit</a>
                  <a type="button"class="btn btn-gradient-primary btn-sm" href="invoice-product-detail-delete.php?id=<?php echo $row['IVPD_ID'];?>">Delete</a></td>
                </tr>
                  <?php
            }
            ?>
                      </tbody>
                    </table><br>
                    <a type="button" class="btn btn-inverse-danger btn-fw" href="invoice-product-detail-add.php">ADD</a>
                  </div>
                </div>
              </div>
<?php
         include "footer.php";
        ?>




