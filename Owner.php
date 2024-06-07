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
  <div class="row">
    <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title text-primary">OWNER</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>NAME</th>
                          <th>MOBILE_NO</th>
                          <th>PASSWORD</th>
                          <th>OPERATION</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
            $rs=mysqli_query($con,"select * from OWNER");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <tr>
                  <td><?php echo $row['OWNER_ID'];?></td>
                  <td><?php echo $row['OWNER_NAME'];?></td>
                  <td><?php echo $row['MOBILE_NO'];?></td>
                  <td><?php echo $row['PASSWORD'];?></td>
                  <td><a type="button" class="btn btn-gradient-primary btn-sm" href="Owner-edit.php?id=<?php echo $row['OWNER_ID'];?>">Edit</a></td>
              
                  <!--<a type="button"class="btn btn-gradient-primary btn-sm" href="Owner-delete.php?id=<?php echo $row['OWNER_ID'];?>">Delete</a></td>-->
                </tr>
                </tr>
                  <?php
            }
            ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <?php
         include "footer.php";
        ?>