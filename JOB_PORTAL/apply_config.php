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

  if (isset($_POST['apply1'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['ph_num'];
    $cname = $_POST['cname'];
    $position = $_POST['position'];
    $skills = $_POST['skills'];
    echo "Records inserted successfully";
    $sql = "INSERT INTO application (name, email, number, cname, position, skills) VALUES ('$name','$email','$number','$cname','$position','$skills')";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
        echo "Records inserted successfully";
        header("location:jobs.php");
    }
} 
?>