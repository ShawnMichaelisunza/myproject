<?php

$conn = mysqli_connect('localhost', 'shawn', '12312345', 'myproject');


if(!$conn){

    echo "connection error" . mysqli_connect_error();
}


?>