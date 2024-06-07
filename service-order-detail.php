<?php
include "header.php";
include "dbcon.php";
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from svodview where SV_ID=$id");
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
                  <h4 class="card-title text-primary">SERVICE ORDER DETAIL</h4>
                    
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <th>SERVICE DETAILS ID</th>
                        <th>SERVICE ID</th>
                        <th>SERVICE ORDER ID</th>
                        <th>QUANTITY</th>
                        <th>RATE</th>
                        <th>STATUS</th>
                        <th>INSTRUCTION</th>
                        <th>OPERATION</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
           
           while($row=mysqli_fetch_assoc($rs))
            {
            $svoid=$row['SVO_ID'];
            $svid=$row['SV_ID'];
            $sid=$row['S_NAME'];
            $qut=$row['QUANTITY'];
            $rate=$row['RATE'];
            $st=$row['STATUS'];
            $it=$row['INSTRUCTION'];
          ?> 
              <tr>
                  <td><?php echo $svoid;?></td>
                  <td><?php echo $svid;?></td>
                  <td><?php echo $sid;?></td>
                  <td><?php echo $qut;?></td>
                  <td><?php echo $rate;?></td>
                  <td><?php echo $st;?></td>
                  <td><?php echo $it;?></td>
                  <td><a type="button" class="btn btn-gradient-primary btn-sm" href="ser-order-detail-edit.php?id=<?php echo $row['SVO_ID'];?>">Edit</a>
                  <a type="button" class="btn btn-gradient-primary btn-sm" href="ser-order-detail-delete.php?id=<?php echo $row['SVO_ID'];?>">Delete</a><br><br></td>              
                </tr>
                  <?php
            }
            ?>
                      </tbody>
                    </table><br>
                    <a type="button" class="btn btn-inverse-danger btn-fw" href="ser-order-detail-insert.php">ADD</a>
                  </div>
                </div>
              </div>
  <?php
         include "footer.php";
        ?>