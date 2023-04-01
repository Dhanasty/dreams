<?php
include "./config.php";

    if(isset($_POST['submit']))
    {
        $title = $_POST['title'];
        $deadline = $_POST['deadline'];
        $description = $_POST['description'];
        $time = date("Y-m-d H:i:s");

    }
    echo $time;

    $sql = "INSERT INTO assignment (title, deadline, description, timestamp, flag) VALUES ('$title', '$deadline', '$description','$time','0')";
  
    $rs = mysqli_query($conn, $sql);
    header("Location: ./index.html");
    // if($rs)
    // {
    //     echo "Entries added!";
    // }else{
    //     echo "Entries not added!";
    // }
  
    mysqli_close($conn);
