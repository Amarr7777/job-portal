<?php include 'header.php'?>
<!-- Page content -->
<div class="content">
<p>
 <!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a>-->
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </button>
</p>
<!--collapse-->
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form method="POST" action="index_config.php">
      <div class="mb-3">
        <label for="Company name" class="form-label">Company Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cname">
      </div>
      <div class="mb-3">
        <label for="exampleInputPosition" class="form-label">Position</label>
        <input type="text" class="form-control" id="exampleInputPosition" name="position" >
      </div>
      <div class="mb-3">
        <label for="job desc" class="form-label">Job Description</label>
        <input type="text" class="form-control" id="job desc" name ="jdesc">
      </div>
      <div class="mb-3">
        <label for="skills" class="form-label"> Skills</label>
        <input type="text" class="form-control" id="skills" name ="skills">
      </div>
      <div class="mb-3">
        <label for="ctc" class="form-label"> CTC</label>
        <input type="text" class="form-control" id="ctc" name="ctc">
      </div>
      <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
     </form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">SI:NO</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
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
    $sql = "SELECT cname, position,ctc FROM jobs";
    $result = mysqli_query($conn,$sql);
    $i = 0;
    if($result->num_rows>0){
      while($rows = $result->fetch_assoc()){
        
        
        echo 
        "<tr>
        <td>".++$i."</td>
        <td>".$rows['cname']."</td>
        <td>".$rows['position']."</td>
        <td>".$rows['ctc']."</td>
        </tr>";
      }
     
    }else{
      echo"";
    }
    
    ?>
  </tbody>
  
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>