
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            background-image: url(job_bg.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        form{
            margin-top:10% ;
            margin-left:30% ;
            margin-right:30% ;
            padding: 10px;
            background-color: white;
            box-shadow: 5px 5px 8px 5px rgb(0, 0, 0);
        }
    </style>
    <title>Login</title>
</head>
<body>
<div class="container">
        <form action="login_config.php" method="POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary" name="login">Login</button>
      <br>
    Not yet registered? <a href="register.php"> Register</a>
    </form>
    
        </div>    
</body>
</html>