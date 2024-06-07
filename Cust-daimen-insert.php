<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>

<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
  if(isset($_POST['btninsert']))
  {
    $cuname=$_POST['cuname'];
    $le=!empty($_POST['le'])?"'".$_POST['le']."'":"NULL";
    $sh=!empty($_POST['sh'])?"'".$_POST['sh']."'":"NULL";
    $qry="insert into tmp (f1,f2) values($le,$sh)";
echo $qry;
  //   if(isset($_POST['ch']))
  // {
  //   $ch=floatval($_POST['ch']);
  //   $qry="insert into customer_dimension(CUSTOMER_ID,S_CHEST) values ('$cuname',$ch)";
  // } 
  // if(isset($_POST['tu']))
  // {
  //   $tu=floatval($_POST['tu']);
  //   $qry="insert into customer_dimension(CUSTOMER_ID,S_TUMMY) values ('$cuname',$tu)";
  // }
  // if(isset($_POST['se']))
  // {
  //   $se=floatval($_POST['se']);
  //   $qry="insert into customer_dimension(CUSTOMER_ID,S_SEAT) values ('$cuname',$se)";
  // }
  // if(isset($_POST['fr']))
  // {
  //   $fr=floatval($_POST['fr']);
  //   $qry="insert into customer_dimension(CUSTOMER_ID,S_FRONT) values ('$cuname',$fr)";
  // }
  // if(isset($_POST['len']))
  // {
  //   $len=floatval($_POST['len']);
  //   $qry="insert into customer_dimension(CUSTOMER_ID,P_LENGTH) values ('$cuname',$len)";
  // }
  // if(isset($_POST['wa']))
  // {
  //   $wa=floatval($_POST['wa']);
  //   $qry="insert into customer_dimension(CUSTOMER_ID,P_WAIST) values ('$cuname',$wa)";
  // }
  // if(isset($_POST['sea']))
  // {
  //   $sea=floatval($_POST['sea']);
  //   $qry="insert into customer_dimension(CUSTOMER_ID,P_SEAT) values ('$cuname',$sea)";
  // }
  // if(isset($_POST['in']))
  // {
  //   $in=floatval($_POST['in']);
  //   $qry="insert into customer_dimension(CUSTOMER_ID,P_INSIDE) values ('$cuname',$in)";
  // }
  // if(isset($_POST['mo']))
  // {
  //   $mo=floatval($_POST['mo']);
  //   $qry="insert into customer_dimension(CUSTOMER_ID,P_MORI) values ('$cuname',$mo)";
  // }
  // if(isset($_POST['th']))
  // {
  //   $th=floatval($_POST['th']);
  //   $qry="insert into customer_dimension(CUSTOMER_ID,P_THIGH) values ('$cuname',$th)";
  // }
  // if(isset($_POST['kn']))
  // {
  //   $kn=floatval($_POST['kn']);
  //   $qry="insert into customer_dimension(CUSTOMER_ID,P_KNEE) values ('$cuname',$kn)";
  // }
       //echo "insert into customer_dimension(CUSTOMER_ID,S_LENGTH) values ('$cuname',$le)";
    if(mysqli_query($con,$qry))
    {?>
      <div class="col-sm-6 col-md-4 col-lg-3">
      <i class="mdi mdi-checkbox-marked-circle">Data Inserted Successfully</i> 
                        </div>
                        <?php
    }
    else
    { ?>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <i class="mdi mdi-bell-ring"></i>
        </div>
         <?php
        echo "Some error please try again";
    }
  }
}
?>
<div class="main-panel">
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Insertion in Customer-dimension Table </h3>
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
        <form class="forms-sample"  method="post" >
        Enter customer Name:              
        <select name="cuname" class="form-control" >
        <?php
            $rs=mysqli_query($con,"select * from customer");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['CUSTOMER_ID'];?>"><?php echo $row['CUSTOMER_NAME'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
                          
          Enter shirt length:<input class="form-control" placeholder="Your shirt length" type="number" step="any" name="le"><br>
          Enter shoulder size:<input class="form-control" placeholder="shoulder size" type="number" step="any" name="sh"><br>
          Enter chest size:<input class="form-control" placeholder="chest size" type="number" step="any" name="ch"><br>
          Enter tummy size:<input class="form-control" placeholder="tummy size" type="number" step="any" name="tu"><br>
          Enter seat:<input class="form-control" placeholder="seat" type="number" step="any" name="se"><br>
          Enter front:<input class="form-control" placeholder="front" type="number" step="any" name="fr"><br>
          Enter Bottom length:<input class="form-control" placeholder="Bottom length" type="number" step="any" name="len"><br>
          Enter waist size:<input class="form-control" placeholder="waist size" type="number" step="any" name="wa"><br>
          Enter seat:<input class="form-control" placeholder="seat" type="number" step="any" name="sea"><br>
          Enter inside:<input class="form-control" placeholder="inside" type="number" step="any" name="in"><br>
          Enter mori size:<input class="form-control" placeholder="mori size" type="number" step="any" name="mo"><br>
          Enter thigh size:<input class="form-control" placeholder="thigh size" type="number" step="any" name="th"><br>
          Enter knee size:<input class="form-control" placeholder="knee size" type="number" step="any" name="kn"><br>
          <button name="btninsert" type="submit" class="btn btn-gradient-primary me-2">Insert</button>    
</form>
</div>
</div>

<?php
         include "footer.php";
        ?>
        </div>
        </div>
        </div>
        </div>
