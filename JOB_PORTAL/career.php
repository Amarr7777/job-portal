<html>

<head>
  <title>career</title>
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
    integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    .job_head {
      background-image: url(career2.jpg);
      background-size: cover;
      width: 100%;
      height: 30%;
    }

    .job_head h1 {
      color: white;
      padding-top: 5%;
      padding-left: 10%;
    }

    .job_head h6 {
      color: white;
      padding-left: 10%;
    }
    .job_body{
     
    }
    .cards {
      padding-top: 3%;
      padding-left: 5%;
    }
    .card {
      background-image: url(career.jpg);
      box-shadow:5px 5px 8px 5px rgb(131, 129, 129) ;
    }
    .card-title {
      color:white;
      text-align: center;
    }
    .card-body {
      color:white;
      text-align: justify;
    }    
    .card-cname {
      color:white;
      text-align: center;
    }
  </style>
</head>

<body>
<div class="content">
    <div class="job_head">
      <h1>JOB PORTAL</h1>
      <h6> Best Jobs available matching your skills</h6>
    </div>
    <div class ="job_body">
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
$sql = "SELECT cname,position,jdesc,skills,ctc FROM jobs";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
  while ($rows = $result->fetch_assoc()) {
    echo '
      <div class="cards">
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">' . $rows['position'] . '</h5>
              <h6 class="card-cname">' . $rows['cname'] . '</h6>
              <p class="card-text">' . $rows['jdesc'] . '</p>
              <p><b>Skills Required:</b> ' . $rows['skills'] . '</p>
              <p><b>CTC:</b> ' . $rows['ctc'] . '</p>
              <a href="apply.php" class="btn btn-primary" name="apply-job">Apply Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>';
  }
}
?>
</div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>