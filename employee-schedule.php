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
   <!-- EMPLOYEE table -->
   <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title text-primary">EMPLOYEE-SCHEDULE</h4>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>NAME</th>
                          <th>SALES_ID</th>
                          <th>SERVICE_NAME</th>
                          <th>PURPOSE</th>
                          <th>DATE & TIME</th>
                          <th>STATUS</th>
                          <th>OPERATIONS</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
            $rs=mysqli_query($con,"select * from eview");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <tr>
                  <td><?php echo $row['ES_ID'];?></td>
                  <td><?php echo $row['E_NAME'];?></td>
                  <td><?php echo $row['SALES_ID'];?></td>
                  <td><?php echo $row['S_NAME'];?></td>
                  <td><?php echo $row['PURPOSE'];?></td>
                  <td><?php echo $row['DATE_TIME'];?></td>
                  <td><?php echo $row['STATUS'];?></td>
                  
                  <td><a type="button" class="btn btn-gradient-primary btn-sm" href="ES-edit.php?id=<?php echo $row['ES_ID'];?>">Edit</a>
                  <a type="button"class="btn btn-gradient-primary btn-sm" href="ES-delete.php?id=<?php echo $row['ES_ID'];?>">Delete</a></td>
                </tr>
                  <?php
            }
            ?>
                      </tbody>
                    </table><br>
                    <a type="button" class="btn btn-inverse-danger btn-fw" href="ES-insert.php">ADD</a>
                  </div>
                </div>
              </div>
<?php
         include "footer.php";
        ?>
