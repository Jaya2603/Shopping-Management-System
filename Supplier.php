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
   <!-- SUPPLIER table -->
   <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title text-primary">SUPPLIER</h4>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>NAME</th>
                          <th>E-MAIL</th>
                          <th>MOBILE_NO</th>
                          <th>ADDRESS</th>
                          <th>PINCODE</th>
                          <th>OPERATIONS</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
            $rs=mysqli_query($con,"select * from SUPPLIER");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <tr>
                  <td><?php echo $row['S_ID'];?></td>
                  <td><?php echo $row['S_NAME'];?></td>
                  <td><?php echo $row['E_MAIL'];?></td>
                  <td><?php echo $row['MOBILE_NO'];?></td>
                  <td><?php echo $row['ADDRESS'];?></td>
                  <td><?php echo $row['PINCODE'];?></td>
                  
                  <td><a type="button" class="btn btn-gradient-primary btn-sm" href="Supplier-edit.php?id=<?php echo $row['S_ID'];?>">Edit</a>
                  <a type="button"class="btn btn-gradient-primary btn-sm" href="Supplier-delete.php?id=<?php echo $row['S_ID'];?>">Delete</a></td>
                </tr>
                  <?php
            }
            ?>
                      </tbody>
                    </table><br>
                    <a type="button" class="btn btn-inverse-danger btn-fw" href="Supplier-insert.php">ADD</a>
                  </div>
                </div>
              </div>
<?php
         include "footer.php";
        ?>