<?php
$con = mysqli_connect("localhost","guru","password","db_admin");
$query = "select * from assignment"; 
if(mysqli_query($con,$query)){
}