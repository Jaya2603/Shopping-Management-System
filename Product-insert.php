<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{ 
   
    $pname=$_POST['pname'];
    $pcat=$_POST['pcat'];
    $ptype=$_POST['ptype'];
    $pbrand=$_POST['pbrand'];
    $pmat=$_POST['pmat'];
    //$purl=$_POST['purl'];
    $target="images/". basename($_FILES['purl']['name']);
    move_uploaded_file($_FILES['purl']['tmp_name'],$target);
    $pst=$_POST['pst'];
    $pdes=$_POST['pdes'];

    //echo "insert into product (P_NAME,CATEGORY_ID,TYPE_ID,BRAND_ID,MATERIAL_ID,IMAGE_URL,STYLE,DES) values('$pname','$pcat','$ptype','$pbrand','$pmat','$target','$pst','$pdes')";
    if(mysqli_query($con,"insert into product (P_NAME,CATEGORY_ID,TYPE_ID,BRAND_ID,MATERIAL_ID,IMAGE_URL,STYLE,DES) values('$pname','$pcat','$ptype','$pbrand','$pmat','$target','$pst','$pdes')"))
    {?>
        <div class="col-sm-7 col-md-4 col-lg-3">
                        <i class="mdi mdi-checkbox-marked-circle">Data Inserted Successfully</i> 
                          </div>
                          <?php
    }
    else
    {?>
        <div class="col-sm-6 col-md-4 col-lg-3">
                            <i class="mdi mdi-bell-ring">Some error please try again</i>
                          </div>
                          <?php
        echo "Some error";
    }
}
?>
<div class="main-panel">
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Insertion in Product Table </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      </ol>
    </nav>
  </div>
  <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
        <!doctype html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <title>shopping db</title>
    </head>   
        <form method="post" enctype="multipart/form-data">
        Enter Product Name:<input type="text" name="pname" class="form-control" placeholder="Product Name" pattern="[a-zA-Z]{1,}" oninvalid="setCustomValidity('Please enter Alphabets.')"
    onchange="try{setCustomValidity('')}catch(e){}"  required><br>
        Select product Category:
        <select name="pcat" class="form-control" required>
        <?php
            $rs=mysqli_query($con,"select * from CATEGORY");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['CATEGORY_ID'];?>"><?php echo $row['CATEGORY_NAME'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        Select product Type:
        <select name="ptype" class="form-control" required>
        <?php
            $rs=mysqli_query($con,"select * from Type");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['TYPE_ID'];?>"><?php echo $row['TYPE_NAME'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        Select product Brand:
        <select name="pbrand" class="form-control" required>
        <?php
            $rs=mysqli_query($con,"select * from Brand");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['BRAND_ID'];?>"><?php echo $row['BRAND_NAME'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        Select product Material:
        <select name="pmat" class="form-control" required>
        <?php
            $rs=mysqli_query($con,"select * from Material");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['MATERIAL_ID'];?>"><?php echo $row['MATERIAL_NAME'];?></option>
                  <?php
            }
            
            ?>
        </select><br>
        Choose product Image:<input type="file" name="purl" class="form-control" placeholder="URL" required><br>
        Enter product Style:<input type="text" name="pst" class="form-control" placeholder="Style" ><br>
        Enter product Description:<input type="text" name="pdes" class="form-control" placeholder="Description" required><br>
        <button type="submit" class="btn btn-gradient-primary me-2">Insert</button><br>   
        </form>
        </div>
</div>
        </body>
</html>

<?php
         include "footer.php";
        ?>
         



