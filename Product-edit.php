<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>

<?php
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from product where P_ID=$id");
$prnadrow=mysqli_fetch_assoc($rs);
$pid=$prnadrow['P_ID'];
$pname=$prnadrow['P_NAME'];
$pcat=$prnadrow['CATEGORY_ID'];
$ptype=$prnadrow['TYPE_ID'];
$pbrand=$prnadrow['BRAND_ID'];
$pmat=$prnadrow['MATERIAL_ID'];
$folder=$prnadrow['IMAGE_URL'];
$pst=$prnadrow['STYLE'];
$pdes=$prnadrow['DES'];
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $pname=$_POST['pname'];
    $pcat=$_POST['pcat'];
    $ptype=$_POST['ptype'];
    $pbrand=$_POST['pbrand'];
    $pmat=$_POST['pmat'];
    $filename=$_FILES['uploadfile']['name'];
    $tempname=$_FILES['uploadfile']['tmp_name'];
    $folder="images/".$filename;
    move_uploaded_file($tempname,$folder);
    //$purl=$_POST['purl'];
    //$target="images/". basename($_FILES['purl']['name']);
    //move_uploaded_file($_FILES['purl']['tmp_name'],$target);
    $pst=$_POST['pst'];
    $pdes=$_POST['pdes'];
    
    if(mysqli_query($con,"update product set P_NAME='$pname',CATEGORY_ID='$pcat',TYPE_ID='$ptype',BRAND_ID='$pbrand',MATERIAL_ID='$pmat',IMAGE_URL='$folder',STYLE='$pst',DES='$pdes' where P_ID='$pid'"))
    {?>
        <div class="col-sm-7 col-md-4 col-lg-3">
                        <i class="mdi mdi-checkbox-marked-circle">Updated Successfully</i> 
                          </div>
                          <?php
    }
    else
    {?>
      <div class="col-sm-6 col-md-4 col-lg-3">
                          <i class="mdi mdi-bell-ring">Some error please try again</i>
                        </div>
                        <?php
    }
}
?>
<div class="main-panel">
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Updation in Product Table </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      </ol>
    </nav>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
      <!doctype html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <title>shopping db</title>
    </head>   
        <form class="forms-sample" method="post" enctype="multipart/form-data">
        <input type="hidden" name="pid" value="<?php echo $pid;?>">
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
        <select name="pbrand" class="form-control"required>
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
        
        Enter product Name:<input type="text" name="pname" class="form-control" placeholder="Product Name" pattern="[a-zA-Z]{1,}" oninvalid="setCustomValidity('Please enter Alphabets.')"
          onchange="try{setCustomValidity('')}catch(e){}"   value="<?php echo $pname;?>"required><br>
        Choose product Image:<input type="file" name="uploadfile" class="form-control" placeholder="URL" value="<?php echo $folder;?>"required><br>
        Enter product Style:<input type="text" name="pst" class="form-control" placeholder="Product Style" value="<?php echo $pst;?>"required><br>
        Enter product Description:<input type="text" name="pdes" class="form-control" placeholder="Product Description" value="<?php echo $pdes;?>"required><br>
        
        
        <button type="submit" class="btn btn-gradient-primary me-2">Update</button><br>   
        </form>
        </div>
        </div>
        </body>
</html>

<?php
   include "footer.php";
?>
         
        
