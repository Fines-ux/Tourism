<?php

//connect to database
$conn = mysqli_connect('localhost', 'G330i', 'xams8686', 'competition_DB');

//check the connection

if(!$conn){
    echo 'Connection error: ' .mysqli_connect_error();
}

?>