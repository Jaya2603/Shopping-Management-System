<?php
            $con=mysqli_connect('localhost','root','','shopping');
            $rs=mysqli_query($con,"select * from soview");
            $ar=array();
            while($ar[]=mysqli_fetch_assoc($rs));
            echo json_encode($ar);
?>