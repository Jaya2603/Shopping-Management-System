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
                  <h4 class="card-title text-primary">PRODUCT-DETAILS</h4>
                  <div>
    <!--<form method="post">
      <input type="text" name="txtsearch"><input type="submit" name="btnsearch" value="search">
    </form>-->
  </div>
                    
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <th>  ID</th>
                        <th>  NAME</th>
                        <th>  SIZE</th>
                        <th>  COLOR</th>
                        <th>  REGULAR_PRICE</th>
                        <th>  OFFER_PRICE</th>
                        <th>  OPERATIONS</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      
            $rs=mysqli_query($con,"select * from pdview");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <tr>
                  <td><?php echo $row['PD_ID'];?></td>
                  <td><?php echo $row['P_NAME'];?></td>
                  <td><?php echo $row['SIZE'];?></td>
                  <td><?php echo $row['COLOR_NAME'];?></td>
                  <td><?php echo $row['REGULAR_PRICE'];?></td>
                  <td><?php echo $row['OFFER_PRICE'];?></td>
                  <td><a type="button" class="btn btn-gradient-primary btn-sm" href="PD-edit.php?id=<?php echo $row['PD_ID'];?>">Edit</a>
                  <a type="button"class="btn btn-gradient-primary btn-sm" href="PD-delete.php?id=<?php echo $row['PD_ID'];?>">Delete</a></td>
               </tr>
                  <?php
            }
            ?>
                      </tbody>
                    </table><br>
                    <a type="button" class="btn btn-inverse-danger btn-fw" href="PD-insert.php">ADD</a>
                  </div>
                </div>
              </div>
  <?php
         include "footer.php";
        ?>