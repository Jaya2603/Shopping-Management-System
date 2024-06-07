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
  <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title text-primary">PURCHASE ORDER </h4>
                    
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <th>  PURCHASE ID</th>
                        <th>  SUPPLIER ID</th>
                        <th>  ORDER DATE</th>
                        <th>  ORDER TOTAL</th>
                        <th>  OPERATION</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
            $rs=mysqli_query($con,"select * from purview");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <tr>
                  <td><?php echo $row['PURCHASE_ID'];?></td>
                  <td><?php echo $row['S_ID'];?></td>
                  <td><?php echo $row['ORDER_DATE'];?></td>
                  <td><?php echo $row['ORDER_TOTAL'];?></td>
                  <td><a type="button" class="btn btn-gradient-primary btn-sm" href="Purchase-order-detail.php?id=<?php echo $row['PURCHASE_ID'];?>">Show</a><br><br>
               </tr>
                  <?php
            }
            ?>
                      </tbody>
                    </table><br>
                    
                  </div>
                </div>
              </div>
  <?php
         include "footer.php";
        ?>