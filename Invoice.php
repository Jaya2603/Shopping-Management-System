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
  <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title text-primary">INVOICE </h4>
                    
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <th>  INVOICE ID</th>
                        <th>  CUSTOMER NAME</th>
                        <th>  DATE</th>
                        <th>  TOTAL</th>
                        <th>  OPERATION</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
            $rs=mysqli_query($con,"select * from iview");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <tr>
                  <td><?php echo $row['I_ID'];?></td>
                  <td><?php echo $row['CUSTOMER_NAME'];?></td>
                  <td><?php echo $row['DATE'];?></td>
                  <td><?php echo $row['TOTAL'];?></td>
                  <td><a type="button" class="btn btn-gradient-primary btn-sm" href="Invoice-product-detail.php?id=<?php echo $row['I_ID'];?>">Show Product Detail</a>
                 <a type="button" class="btn btn-gradient-primary btn-sm" href="Invoice-service-detail.php?id=<?php echo $row['I_ID'];?>">Show Service Detail</a><br>
                </tr>
                  <?php
            }
            ?>
                      </tbody>
                    </table><br>
                    <a type="button" class="btn btn-inverse-danger btn-fw" href="invoice-add.php">ADD</a>
                  </div>
                </div>
              </div>
  <?php
         include "footer.php";
        ?>