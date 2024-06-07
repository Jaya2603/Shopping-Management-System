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
  <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title text-primary">BRAND</h4>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>NAME</th>
                          <th>OPERATIONS</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
            $rs=mysqli_query($con,"select * from brand");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <tr>
                  <td><?php echo $row['BRAND_ID'];?></td>
                  <td><?php echo $row['BRAND_NAME'];?></td>
                  <td><a type="button" class="btn btn-gradient-primary btn-sm" href="Brand-edit.php?id=<?php echo $row['BRAND_ID'];?>">Edit </a>
                  <a type="button"class="btn btn-gradient-primary btn-sm" href="Brand-delete.php?id=<?php echo $row['BRAND_ID'];?>">Delete</a></td>
                </tr>
                  <?php
            }
            ?>
                      </tbody>
                    </table><br>
                    <a type="button" class="btn btn-inverse-danger btn-fw" href="Brand-insert.php">ADD</a>
                  </div>
                </div>
              </div>
               <?php
         include "footer.php";
        ?>