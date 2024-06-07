<?php
include "header.php";
include "dbcon.php";
?><div class="main-panel">
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Master Tables </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      </ol>
    </nav>
  </div>
   <!--SERVICE table-->
   <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title text-primary">Stock </h4>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>PRODUCT_DETAILS</th>
                          <th>QUANTITY</th>
                          <th>DATE</th>
                          <th>OPERATIONS</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
            $rs=mysqli_query($con,"select * from stview");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <tr>
                  <td><?php echo $row['ST_ID'];?></td>
                  <td><?php echo $row['PD_ID'];?></td>
                  <td><?php echo $row['QUANTITY'];?></td>
                  <td><?php echo $row['DATE'];?></td>
                  <td><a type="button" class="btn btn-gradient-primary btn-sm" href="Stock-edit.php?id=<?php echo $row['ST_ID'];?>">Edit</a>
                 
                  <a type="button"class="btn btn-gradient-primary btn-sm" href="Stock-delete.php?id=<?php echo $row['ST_ID'];?>">Delete</a></td>
                </tr>
                </tr>
                  <?php
            }
            ?>
                      </tbody>
                    </table><br>
                    <a type="button" class="btn btn-inverse-danger btn-fw" href="Stock-insert.php">ADD</a>
                  </div>
                </div>
              </div>
  <?php
         include "footer.php";
        ?>