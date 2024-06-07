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
  <!-- CUSTOMER table -->
  <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title text-primary">CUSTOMER</h4>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>NAME</th>
                          <th>E-MAIL</th>
                          <th>PASSWORD</th>
                          <th>MOBILE_NO</th>
                          <th>ADDRESS</th>
                          <th>PINCODE</th>
                          <th>GENDER</th>
                          <th>IMAGE</th>
                          <th>OPERATIONS</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php
            $rs=mysqli_query($con,"select * from CUSTOMER");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <tr>
                  <td><?php echo $row['CUSTOMER_ID'];?></td>
                  <td><?php echo $row['CUSTOMER_NAME'];?></td>
                  <td><?php echo $row['E_MAIL'];?></td>
                  <td><?php echo $row['PASSWORD'];?></td>
                  <td><?php echo $row['MOBILE_NO'];?></td>
                  <td><?php echo $row['ADDRESS'];?></td>
                  <td><?php echo $row['PINCODE'];?></td>
                  <td><?php echo $row['GENDER'];?></td>
                  <td><img src="<?php echo $row['IMAGE'];?>" width="50px"></td>
                  <td><a type="button" class="btn btn-gradient-primary btn-sm" href="Customer-edit.php?id=<?php echo $row['CUSTOMER_ID'];?>">Edit</a>
                  <a type="button"class="btn btn-gradient-primary btn-sm" href="Customer-delete.php?id=<?php echo $row['CUSTOMER_ID'];?>">Delete</a></td>
                </tr>
                  <?php
            }
            ?>
                      </tbody>
                    </table><br></div>
                </div>
              </div>
  <?php
         include "footer.php";
        ?>