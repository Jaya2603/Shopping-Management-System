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
                  <h4 class="card-title text-primary">PRODUCT</h4>
                    
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <th>  ID</th>
                        <th>  NAME</th>
                        <th>  CATEGORY</th>
                        <th>  TYPE</th>
                        <th>  BRAND</th>
                        <th>  MATERIAL</th>
                        <th>  IMAGE</th>
                        <th>  STYLE</th>
                        <th>  DES</th>
                        <th>  OPERATIONS</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
            $rs=mysqli_query($con,"select * from pview");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <tr>
                  <td><?php echo $row['P_ID'];?></td>
                  <td><?php echo $row['P_NAME'];?></td>
                  <td><?php echo $row['CATEGORY_NAME'];?></td>
                  <td><?php echo $row['TYPE_NAME'];?></td>
                  <td><?php echo $row['BRAND_NAME'];?></td>
                  <td><?php echo $row['MATERIAL_NAME'];?></td>
                  <td><img src="<?php echo $row['IMAGE_URL'];?>" width="100px"></td>
                  <td><?php echo $row['STYLE'];?></td>
                  <td style="white-space: normal;"><?php echo $row['DES'];?></td>
                  <td><a type="button" class="btn btn-gradient-primary btn-sm" href="Product-edit.php?id=<?php echo $row['P_ID'];?>">Edit</a>
                  <a type="button"class="btn btn-gradient-primary btn-sm" href="Product-delete.php?id=<?php echo $row['P_ID'];?>">Delete</a></td>
               </tr>
                  <?php
            }
            ?>
                      </tbody>
                    </table><br>
                    <a type="button" class="btn btn-inverse-danger btn-fw" href="Product-insert.php">ADD</a>
                  </div>
                </div>
              </div>
  <?php
         include "footer.php";
        ?>