<!-- <?php 

include 'partials/config.php';

session_start();
error_reporting(0);

if (isset($_SESSION[''])) {
    header("location: users.php");
}


if (isset($_POST['submit'])) {
	$email = $_POST['emailaddress'];
	$password = md5($_POST['password']);
	$sql = "SELECT * FROM register WHERE emailaddress='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
        echo "<script>alert('Wow! User login Completed.')</script>";
        header("Location: users.php");
            
    }
    else {
    echo "<script>alert('Woops! Email or Passwordis Wrong.')</script>";
    }
}

?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>

    </style>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body class="body1">
<?php if(isset($_SESSION['success'])) : ?>
            <div class="alert alert-success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <?php if(isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
   
        <div class="container">
            <header>
                <div class="logo">
                    <a href="index.php" id="logo"><img src="bf (2).png"></a>
                </div>
                
            </header>   
        </div>
        <div class="container2">
        <?php 

        include 'partials/config.php';

        session_start();
        error_reporting(0);

        if (isset($_SESSION[''])) {
            header("location: users.php");
        }


        if (isset($_POST['submit'])) {
            $email = $_POST['emailaddress'];
            $password = md5($_POST['password']);
            $sql = "SELECT * FROM register WHERE emailaddress='$email' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "<script>alert('Wow! User login Completed.')</script>";
                header("Location: users.php");
                    
            }
            else {
            echo "<script>alert('Woops! Email or Passwordis Wrong.')</script>";
            }
        }

        ?>

            <div class="img">
                <img src="security_pic.svg">


            </div>
            <div class="login-container">
                <form action="login.php" class="form" method="POST">
                    <img class="profile" src="profile.svg">
                    <h2>Welcome</h2>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div >
                            <h5>Email Address</h5>
                            <label for="email" class="label-title">Username*</label>
                            <input type="email" id="email" name="emailaddress" class="form-input" placeholder= "use your email address" required="required">
                        </div>
                    </div>
                    <div class="input-div two">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div >
                            <h5>Password</h5>
                            <label for="password" class="label-title">Password *</label>
                            <input type="password" id="password" name="password" class="form-input" placeholder="Password" required="required">
                        </div>
                    </div>
                    <a href="#" class="a1">Forget Password?</a>
                    <a href="users.php"><button  name="submit" class="btn">Login</button></a>
                    <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
                    
                </form>
            </div>
        </div>
        <script type="text/javascript" src="script.js"></script>
        
    
</body>
</html>