<?php

$conn = mysqli_connect('localhost','guru','password','db_admin');

if (!$conn) {

    echo "Connection failed!";

}