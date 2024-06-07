<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>

<?php
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from customer_dimension where CD_ID=$id");
$curnadrow=mysqli_fetch_assoc($rs);
$cdid=$curnadrow['CD_ID'];
$cid=$curnadrow['CUSTOMER_ID'];
$le=$curnadrow['S_LENGTH'];
$sh=$curnadrow['S_SHOULDER'];
$ch=$curnadrow['S_CHEST'];
$tu=$curnadrow['S_TUMMY'];
$se=$curnadrow['S_SEAT'];
$fr=$curnadrow['S_FRONT'];
$len=$curnadrow['P_LENGTH'];
$wa=$curnadrow['P_WAIST'];
$sea=$curnadrow['P_SEAT'];
$in=$curnadrow['P_INSIDE'];
$mo=$curnadrow['P_MORI'];
$th=$curnadrow['P_THIGH'];
$kn=$curnadrow['P_KNEE'];
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $cid=$_POST['cid'];
    if(isset($_POST['btninsert']))
  {
    $cuname=$_POST['cuname'];
    if(isset($_POST['le']))
  {
    $le=floatval($_POST['le']);
    $qry="insert into customer_dimension(CUSTOMER_ID,S_LENGTH) values ('$cuname',$le)";
  }
  if(isset($_POST['sh']))
  {
    $sh=floatval($_POST['sh']);
    $qry="insert into customer_dimension(CUSTOMER_ID,S_SHOULDER) values ('$cuname',$sh)";
  }
  if(isset($_POST['ch']))
  {
    $ch=floatval($_POST['ch']);
    $qry="insert into customer_dimension(CUSTOMER_ID,S_CHEST) values ('$cuname',$ch)";
  } 
  if(isset($_POST['tu']))
  {
    $tu=floatval($_POST['tu']);
    $qry="insert into customer_dimension(CUSTOMER_ID,S_TUMMY) values ('$cuname',$tu)";
  }
  if(isset($_POST['se']))
  {
    $se=floatval($_POST['se']);
    $qry="insert into customer_dimension(CUSTOMER_ID,S_SEAT) values ('$cuname',$se)";
  }
  if(isset($_POST['fr']))
  {
    $fr=floatval($_POST['fr']);
    $qry="insert into customer_dimension(CUSTOMER_ID,S_FRONT) values ('$cuname',$fr)";
  }
  if(isset($_POST['len']))
  {
    $len=floatval($_POST['len']);
    $qry="insert into customer_dimension(CUSTOMER_ID,P_LENGTH) values ('$cuname',$len)";
  }
  if(isset($_POST['wa']))
  {
    $wa=floatval($_POST['wa']);
    $qry="insert into customer_dimension(CUSTOMER_ID,P_WAIST) values ('$cuname',$wa)";
  }
  if(isset($_POST['sea']))
  {
    $sea=floatval($_POST['sea']);
    $qry="insert into customer_dimension(CUSTOMER_ID,P_SEAT) values ('$cuname',$sea)";
  }
  if(isset($_POST['in']))
  {
    $in=floatval($_POST['in']);
    $qry="insert into customer_dimension(CUSTOMER_ID,P_INSIDE) values ('$cuname',$in)";
  }
  if(isset($_POST['mo']))
  {
    $mo=floatval($_POST['mo']);
    $qry="insert into customer_dimension(CUSTOMER_ID,P_MORI) values ('$cuname',$mo)";
  }
  if(isset($_POST['th']))
  {
    $th=floatval($_POST['th']);
    $qry="insert into customer_dimension(CUSTOMER_ID,P_THIGH) values ('$cuname',$th)";
  }
  if(isset($_POST['kn']))
  {
    $kn=floatval($_POST['kn']);
    $qry="insert into customer_dimension(CUSTOMER_ID,P_KNEE) values ('$cuname',$kn)";
  }
    echo "update customer_dimension set (CUSTOMER_ID,S_LENGTH,S_SHOULDER,S_CHEST,S_TUMMY,S_SEAT,S_FRONT,P_LENGTH,P_WAIST,P_SEAT,P_INSIDE,P_MORI,P_THIGH,P_KNEE)=('$cid','$le','$sh','$ch','$tu','$se','$fr','$len','$wa','$sea','$in','$mo','$th','$kn') where CD_ID='$cdid'";
    if(mysqli_query($con,"update customer_dimension set(CUSTOMER_ID, S_LENGTH, S_SHOULDER, S_CHEST, S_TUMMY, S_SEAT, S_FRONT, P_LENGTH, P_WAIST, P_SEAT, P_INSIDE, P_MORI, P_THIGH, P_KNEE)=('$cid','$le','$sh','$ch','$tu','$se','$fr','$len','$wa','$sea','$in','$mo','$th','$kn') where CD_ID='$cdid'"))
    {?>
      <div class="col-sm-6 col-md-4 col-lg-3">
      <i class="mdi mdi-checkbox-marked-circle">Updated Successfully</i> 
                        </div>
                        <?php
    }
    else
    {
      ?>
      <div class="col-sm-6 col-md-4 col-lg-3">
                          <i class="mdi mdi-bell-ring">Some error please try again</i>
                        </div>
                        <?php
    }
}
}
?>
<div class="main-panel">
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Updation in Customer-dimension Table </h3>
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
      
      <form class="forms-sample" method="post">
      <input type="hidden" name="cid" value="<?php echo $cdid;?>">
        
      Enter customer Name:              
        <select name="cuname" class="form-control" >
        <?php
            $con=mysqli_connect('localhost','root','','shopping');
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
                   
        Enter shirt length:<input type="floatval" name="le" class="form-control" placeholder="shirt length" value="<?php echo $le;?>" value=NULL><br>
        Enter shoulder size:<input type="number" name="sh" class="form-control" placeholder="shoulder size" value="<?php echo $sh;?>" value=NULL><br>
        Enter chest size:<input type="number" name="ch" class="form-control" placeholder="chest size" value="<?php echo $ch;?>" value=NULL><br>
        Enter tummy size:<input type="number" name="tu" class="form-control" placeholder="tummy size" value="<?php echo $tu;?>" value=NULL><br>
        Enter seat:<input type="number" name="se" class="form-control" placeholder="seat" value="<?php echo $se;?>" value=NULL><br>
        Enter front:<input type="number" name="fr" class="form-control" placeholder="front" value="<?php echo $fr;?>" value=NULL><br>
        Enter Bottom length:<input type="number" name="len" class="form-control" placeholder="Bottom length" value="<?php echo $len;?>" ><br>
        Enter waist size:<input type="number" name="wa" class="form-control" placeholder="waist size" value="<?php echo $wa;?>" ><br>
        Enter seat:<input type="number" name="sea" class="form-control" placeholder="seat" value="<?php echo $sea;?>" ><br>
        Enter inside:<input type="number" name="in" class="form-control" placeholder="inside" value="<?php echo $in;?>" ><br>
        Enter mori size:<input type="number" name="mo" class="form-control" placeholder="mori size" value="<?php echo $mo;?>" ><br>
        Enter thigh size:<input type="number" name="th" class="form-control" placeholder="thigh size" value="<?php echo $th;?>"><br>
        Enter knee size:<input type="number" name="kn" class="form-control" placeholder="knee size" value="<?php echo $kn;?>" ><br>
        <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
        </div>
                     
</form>
</div>
</div>
</body>
</html>
<?php
include "footer.php";
?>