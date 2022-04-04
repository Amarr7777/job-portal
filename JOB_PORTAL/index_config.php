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
session_start();
if(isset($_POST['submit'])){
    $cname=$_POST['cname'];
    $position=$_POST['position'];
    $jdesc=$_POST['jdesc'];
    $skills=$_POST['skills'];
    $ctc=$_POST['ctc'];

    $sql= "INSERT INTO jobs(cname, position, jdesc, skills, ctc) VALUES ('$cname','$position','$jdesc','$skills','$ctc')";
    if(mysqli_query($conn,$sql)){
        echo "New Job posted";
        header("location:index.php");
    }else{
        echo "Failed to post New Job $sql. " . mysqli_error($conn);
    }
}
?>