<?php
include_once('dbcon.php');

$error = false;
if(isset($_POST['btn-register'])){
    //clean user input to prevent sql injection
    $username = $_POST['username'];
    $username = strip_tags($username);
    $username = htmlspecialchars($username);

    $email = $_POST['email'];
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $password = $_POST['password'];
    $password = strip_tags($password);
    $password = htmlspecialchars($password);

    //validate
    if(empty($username)){
        $error = true;
        $errorUsername = 'Please input username';
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = true;
        $errorEmail = 'Please a valid input email';
    }

        $sql = "select * from tbl_users where email='$email' ";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);

       

        $sql1 = "select * from tbl_users where password='$password' ";
        $result1 = mysqli_query($conn, $sql1);
        $count1 = mysqli_num_rows($result1);
        $row1 = mysqli_fetch_assoc($result1);

        if($count>=1)
        {
           $error = true;
           $errorEmail = 'Email already exists; Please enter another one.';
           
        }

         if($count1>=1)
        {
           $error = true;
           
           $errorPassword = 'Password already exists; Please enter another one.';
        }

        if($count>=1 AND $count1>=1)
        {
           $error = true;
           $errorEmail = 'Email already exists; Please enter another one.';
           $errorPassword = 'Password already exists; Please enter another one.';
        }

    if(empty($password)){
        $error = true;
        $errorPassword = 'Please password';
    }elseif(strlen($password) < 6){
        $error = true;
        $errorPassword = 'Password must at least 6 characters';
    }

       
    

    

    //insert data if no error
    if(!$error){
        $sql = "insert into tbl_users(username, email ,password)
                values('$username', '$email', '$password')";
        if(mysqli_query($conn, $sql)){
            $successMsg = 'Register successfully. <a href="login.php">click here to login</a>';
        }else{
            echo 'Error '.mysqli_error($conn);
        }
    }

}

?>

<html>
<head>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <title> User Registration </title>

   
</head>


<body>

    <h1 style="float:right;">

   <img src="query1.png"  style="width:100%;">

    </h1>


   <div style="padding-left:20px; font-size:20px;font-family:"Comic Sans MS", cursive, sans-serif;">

         <hr/>
                <a href="index.html">Home</a>

   </div>

   
    <div class="container">
        <div style="width: 500px; margin: 50px auto;">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                <center><h2>Register</h2></center>
                <hr/>
                <?php
                    if(isset($successMsg)){
                 ?>
                        <div class="alert alert-success">
                            <span class="glyphicon glyphicon-info-sign"></span>
                            <?php echo $successMsg; ?>
                        </div>
                <?php
                    }
                ?>
                <div class="form-group" style="padding:20px">
                    <label for="username" class="control-label">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter username" value="">
                    <span class="text-danger"><?php if(isset($errorUsername)) echo $errorUsername; ?></span>
                </div>
                <div class="form-group" style="padding:20px">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Enter email address" value="">
                    <span class="text-danger"><?php if(isset($errorEmail)) echo $errorEmail; ?></span>
                </div>
                <div class="form-group" style="padding:20px">
                  <label for="password" class="control-label">Password</label>
                  <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Enter password" value="">
                  <span class="text-danger"><?php if(isset($errorPassword)) echo $errorPassword; ?></span>
                </div>
                <div class="form-group">
                    <center><input type="submit" name="btn-register" value="Register" class="btn btn-primary"></center>
                </div>
                <hr/>
                <a href="login.php">Login</a>
            </form>
        </div>
    </div>
</body>
</html>