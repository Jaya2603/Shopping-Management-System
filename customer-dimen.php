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
                  <h4 class="card-title text-primary">CUSTOMER DIMENSIONS</h4>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>NAME</th>
                          <th>LENGTH</th>
                          <th>SHOULDER</th>
                          <th>CHEST</th>
                          <th>TUMMY</th>
                          <th>SEAT</th>
                          <th>FRONT</th>
                          <th>BOTTOM LENGTH</th>
                          <th>WAIST</th>
                          <th>SEAT</th>
                          <th>INSIDE</th>
                          <th>MORI</th>
                          <th>THIGH</th>
                          <th>KNEE</th>
                          <th>OPERATIONS</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
            $rs=mysqli_query($con,"select * from cdview");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <tr>
                  <td><?php echo $row['CD_ID'];?></td>
                  <td><?php echo $row['CUSTOMER_NAME'];?></td>
                  <td><?php echo $row['S_LENGTH'];?></td>
                  <td><?php echo $row['S_SHOULDER'];?></td>
                  <td><?php echo $row['S_CHEST'];?></td>
                  <td><?php echo $row['S_TUMMY'];?></td>
                  <td><?php echo $row['S_SEAT'];?></td>
                  <td><?php echo $row['S_FRONT'];?></td>
                  <td><?php echo $row['P_LENGTH'];?></td>
                  <td><?php echo $row['P_WAIST'];?></td>
                  <td><?php echo $row['P_SEAT'];?></td>
                  <td><?php echo $row['P_INSIDE'];?></td>
                  <td><?php echo $row['P_MORI'];?></td>
                  <td><?php echo $row['P_THIGH'];?></td>
                  <td><?php echo $row['P_KNEE'];?></td>
                  <td><a type="button" class="btn btn-gradient-primary btn-sm" href="Cust-daimen-edit.php?id=<?php echo $row['CD_ID'];?>">Edit</a>
                  <a type="button"class="btn btn-gradient-primary btn-sm" href="Cust-daimen-delete.php?id=<?php echo $row['CD_ID'];?>">Delete</a></td>
                </tr>
                </tr>
                  <?php
            }
            ?>
                      </tbody>
                    </table><br>
                    <a type="button" class="btn btn-inverse-danger btn-fw" href="Cust-daimen-insert.php">ADD</a>
                    </div>
                </div>
              </div>
  <?php
         include "footer.php";
        ?>