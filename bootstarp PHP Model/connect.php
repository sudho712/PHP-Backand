<?php
$con=new mysqli('localhost','root','','phpcurd');
if($con){
    echo "connection successfully";    
}else{
    die(mysqli_error($con));
}
?>