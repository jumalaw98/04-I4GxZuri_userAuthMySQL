<?php
// include connection to db
include "../config.php";

//creating ddb tables

$sql = "CREATE TABLE Students{
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_names VARCHAR(250) NOT NULL,
    country VARCHAR(250) NOT NULL,
    email VARCHAR(250) NOT NULL,
    gender VARCHAR(250) NOT NULL,
    password VARCHAR(250) NOT NULL,

}";

//feedback of table creating

if ($conn){
    if (mysqli_query($conn, $sql)) {
        echo "Table Students successfully created";
    } else{
        echo "Error creating table:" .mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>