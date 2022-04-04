<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobs';

$conn = mysqli_connect($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "";

  if (isset($_POST['submit1'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['ph_num'];
    $password = $_POST['password'];
    echo "Records inserted successfully";
    $sql = "INSERT INTO id(Name, Email, Password,Phone_number) VALUES ('$name','$email','$password','$number')";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
        echo "Records inserted successfully";
        header("location:Login.php");
    }
} 
?>