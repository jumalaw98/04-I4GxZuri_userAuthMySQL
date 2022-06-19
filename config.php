 <?php
$conn = mysqli_connect("localhost","root","","zuriphp");

if ($conn == false){
    die("Error connecting to server".mysqli_connect_error($conn));
}




/* function db() {
    //set your configs here
    $host = "locahost:8012";
    $user = "root";
    $db = "zuriphp";
    $password = "";
    $conn = mysqli_connect($host, $user, $password, $db);
    if(!$conn){
        echo "<script> alert('Error connecting to the database') </script>";
    }
    return $conn; 

// } -->  */

