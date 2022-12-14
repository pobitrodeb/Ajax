<?php 
	$con = mysqli_connect("localhost", "root", "", "02_data_search");
    if(!$con){
        echo "Database connection faild" . mysqli_connect_error();
    }
?>