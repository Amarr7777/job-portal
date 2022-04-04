<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Dashboard</title>
    <style>
        /* The side navigation menu */
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */


/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
.table{
  padding:10px;
}
    </style>
</head>
<body>
    <div class="bars">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style fixed>
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                
            </ul>
        </div>
    </div>
</nav>
<div class="sidebar">
  <a href="index.php">Jobs</a>
  <a href="jobs.php">Candidates Applied</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>

    </div>
<div class="content">
<table class="table">
  <thead>
    <tr>
      <th scope="col">SI:NO</th>
      <th scope="col">Candidate Name</th>
      <th scope="col"> Candidate Number</th>
      <th scope="col">Applied Company</th>
      <th scope="col">Applied for</th>
      <th scope="col">Skills</th>
    </tr>
  </thead>
  <tbody>
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
$sql = "SELECT name,number,cname, position,skills FROM application";
$result = mysqli_query($conn, $sql);
$i = 0;
if ($result->num_rows > 0) {
  while ($rows = $result->fetch_assoc()) {


    echo
      "<tr>
        <td>" . ++$i . "</td>
        <td>" . $rows['name'] . "</td>
        <td>" . $rows['number'] . "</td>
        <td>" . $rows['cname'] . "</td>
        <td>" . $rows['position'] . "</td>
        <td>" . $rows['skills'] . "</td>
        </tr>";
  }

}
else {
  echo "";
}

?>
  </tbody>
  
</table>
</div>
</body>
</html>