<?php

/* Server Name  */
	$DB_HOST = "localhost";
/* Account Name */
        $DB_USER = "root";
/* Password */
        $DB_PASS = "";
/* Database Name */
        $DB_NAME = "?????";
/* Connect to Database */
	$CONNECTION = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
        /* Check Connection */
        if(!$CONNECTION){
           /* Capture Error */
           $errMSG = mysqli_error($CONNECTION);
           /* Display Error */
           echo $errMSG;
           /* Stop Execution */
           die("Try Again...");
        }else{
            /* Connected to Server */
            echo "Connection Established.<br>";}

/* Full Name */
	$NAME    = $_POST['Name'];
/* Address */
	$ADDRESS = $_POST['Address'];
/* Phone */
	$PHONE   = $_POST['Phone'];
/* Insert data */
	$Query = "INSERT INTO Account (Name, Address, Phone) VALUES ('$NAME','$ADDRESS','$PHONE')";
        $Result = mysqli_query($CONNECTION,$Query);
        /* Check the Query */
        if($Result){
            echo "Sucessfully Inserted.<br>";
        }else{
            die("Couldn't Execute Query.<br>");}
 

/* Read entire table */
	$Query = "SELECT * FROM Account";
/* Update Record */
	$Query = "UPDATE Account SET Name = 'Muhammad Ali', Address = 'Mughalpura LHR', Phone = '123456' WHERE Phone = '12345' ";
/* Delete Record */
	$Query = "DELETE FROM Account WHERE Phone = '12345' ";

/* Close Connection */
        mysqli_close($CONNECTION);


 ?>
