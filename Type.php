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
<!--Type table-->
<div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title text-primary">TYPE</h4>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>TYPES</th>
                          <th>OPERATIONS</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
            $rs=mysqli_query($con,"select * from TYPE");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <tr>
                  <td><?php echo $row['TYPE_ID'];?></td>
                  <td><?php echo $row['TYPE_NAME'];?></td>
                  <td><a type="button"class="btn btn-gradient-primary btn-sm" href="Type-edit.php?id=<?php echo $row['TYPE_ID'];?>">Edit</a>
                  <a type="button"class="btn btn-gradient-primary btn-sm" href="Type-delete.php?id=<?php echo $row['TYPE_ID'];?>">Delete</a></td>
            </tr>
                  <?php
            }
            ?>
                      </tbody>
                    </table><br>
                    <a type="button" class="btn btn-inverse-danger btn-fw" href="Type-insert.php">ADD</a>
                  </div>
                </div>
              </div>
              <?php
         include "footer.php";
        ?>