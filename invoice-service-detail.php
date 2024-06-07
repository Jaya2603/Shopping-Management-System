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
                  <h4 class="card-title text-primary">INVOICE SERVICE DETAIL</h4>
                  </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <th>  INVOICE SERVICE DETAILS ID</th>
                        <th>  INVOICE ID</th>
                        <th>  SERVICE NAME</th>
                        <th>  QUANTITY</th>
                        <th>  RATE</th>
                        <th>  OPERATION</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
           $rs=mysqli_query($con,"select * from isdview");
            while($row=mysqli_fetch_assoc($rs))
            {?> 
              <tr>
                  <td><?php echo $row['IVSD_ID'];?></td>
                  <td><?php echo $row['I_ID'];?></td>
                  <td><?php echo $row['S_NAME'];?></td>
                  <td><?php echo $row['QUANTITY'];?></td>
                  <td><?php echo $row['RATE'];?></td>
                  <td><a type="button" class="btn btn-gradient-primary btn-sm" href="invoice-service-detail-edit.php?id=<?php echo $row['IVSD_ID'];?>">Edit</a>
                  <a type="button"class="btn btn-gradient-primary btn-sm" href="invoice-service-detail-delete.php?id=<?php echo $row['IVSD_ID'];?>">Delete</a></td>
                </tr>
                  <?php
            }
            ?>
            
                      </tbody>
                    </table><br>
                    <a type="button" class="btn btn-inverse-danger btn-fw" href="invoice-service-detail-add.php">ADD</a>
                  </div>
                </div>
              </div>
  <?php
         include "footer.php";
        ?>