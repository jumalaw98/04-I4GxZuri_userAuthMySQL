

<?php

include "config.php";

if (isset($_POST["register"])) {

    // data from registration form

    $full_names = $_POST["fullnames"];
    $country = $_POST["country"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];


// table name 

    $sql = "INSERT INTO `Students`(`full_names`, `country`, `email`, `gender`, `password`) 
        VALUES ('$full_names','$country','$email','$gender','$password')";


    if (mysqli_query($conn, $sql)) {
        echo "Your account has been created successfully";


    } else {
        echo "Sorry, Something went wrong $sql. " . mysqli_error($conn);
    }

// Close connection
    mysqli_close($conn);
};
?>