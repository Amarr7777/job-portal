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
    $sql = "INSERT INTO 'id'('Name', 'Email', 'Password','Phone number') VALUES ('[$name]','[$email]','[$password]','[$number]')";
    if (mysqli_query($conn, $sql)) {
        echo "Records inserted successfully";
    }
    else {
        echo "ERROR: couldn't able to execte $sql. " . mysqli_error($conn);
    }
}
session_start();
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM id WHERE 'Email'='$email' AND 'Password'='$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if (mysqli_fetch_row($result) == 1) {
        header("location:index.php");
    }
    else {
        $error = 'emailid or password is incorrect';
    }
}

if (isset($_POST['submit'])) {
    $cname = $_POST['cname'];
    $position = $_POST['position'];
    $jdesc = $_POST['jdesc'];
    $skills = $_POST['skills'];
    $ctc = $_POST['ctc'];

    $sql = "INSERT INTO jobs(cname, position, jdesc, skills, ctc) VALUES ('$cname','$position','$jdesc','$skills','$ctc')";
    if (mysqli_query($conn, $sql)) {
        echo "New Job posted";
    }
    else {
        echo "Failed to post New Job $sql. " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>




