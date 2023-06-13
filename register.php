<!-- <?php
include 'partials/config.php';
error_reporting(0);

session_start();

if (isset($_SESSION['firstname'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
  $phone = $_POST['mobilenumber'];
  $address = $_POST['address'];
  $gender = $_POST['gender'];
  $email = $_POST['emailaddress'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM register WHERE emailaddress='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO  `register` (firstname,lastname,mobilenumber,address,gender,emailaddress,password)
					VALUES ('$firstname','$lastname','$phone','$address','$gender','$email','$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
        header("Location: login.php");
				$firstname = "";
        $lastname ="";
				$phone = "";
        $address ="";
        $gender ="";
        $gender ="";
        $email ="";
        $password ="";
      
        
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?> -->
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>REGISTER Form</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body  class="body">  
    <div class="container">
      <header>
        <div class="logo">
            <a href="index.php" id="logo"><img src="bf (2).png"></a>
        </div>
        <nav class="navbar">  
              <ul>  

                  <li><a href="#" class="links"><img src="join us.png" max-width="90" height="90"></a></li>
                  
                  <li><a href="#" class="links"><img src="centers.png" max-width="90" height="90"></a></li>
                  <li><a href="#" class="links"><img src="abtus.png" max-width="90" height="90"></a></li>
              </ul>
        </nav>
      </header>

    </div>
       
    
    
    <form class="signup-form" action="register.php" method="POST" >
    <?php
    include 'partials/config.php';
    error_reporting(0);

    session_start();

    if (isset($_SESSION['firstname'])) {
        header("Location: login.php");
    }

    if (isset($_POST['submit'])) {
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $phone = $_POST['mobilenumber'];
      $address = $_POST['address'];
      $gender = $_POST['gender'];
      $email = $_POST['emailaddress'];
      $password = md5($_POST['password']);
      $cpassword = md5($_POST['cpassword']);

      if ($password == $cpassword) {
        $sql = "SELECT * FROM register WHERE emailaddress='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
          $sql = "INSERT INTO  `register` (firstname,lastname,mobilenumber,address,gender,emailaddress,password)
              VALUES ('$firstname','$lastname','$phone','$address','$gender','$email','$password')";
          $result = mysqli_query($conn, $sql);
          if ($result) {
            echo "<script>alert('Wow! User Registration Completed.')</script>";
            header("Location: login.php");
            $firstname = "";
            $lastname ="";
            $phone = "";
            $address ="";
            $gender ="";
            $gender ="";
            $email ="";
            $password ="";
          
            
            $_POST['password'] = "";
            $_POST['cpassword'] = "";
          } else {
            echo "<script>alert('Woops! Something Wrong Went.')</script>";
          }
        } else {
          echo "<script>alert('Woops! Email Already Exists.')</script>";
        }
        
      } else {
        echo "<script>alert('Password Not Matched.')</script>";
      }
    }

    ?>

      <!-- form header -->
      <div class="form-header">
        <h1>Register Here</h1>
      </div>

      <!-- form body -->
      <div class="form-body">

        <!-- Firstname and Lastname -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="firstname" class="label-title">First Name *</label>
            <input type="text" id="firstname" name="firstname" class="form-input" placeholder="First name" required="required" />
          </div>
          <div class="form-group right">
            <label for="lastname" class="label-title">Last Name *</label>
            <input type="text" id="lastname" name="lastname" class="form-input" placeholder="Last name" required="required" />
          </div>
        </div>

        <!-- Email -->
        <div class="form-group">
          <label for="email" class="label-title">Email Address*</label>
          <input type="email" id="email" name="emailaddress" class="form-input" placeholder="enter your email" required="required">
        </div>

        <!-- Passwrod and confirm password -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="password" class="label-title">Password *</label>
            <input type="password" id="password" name="password" class="form-input" placeholder="Password" required="required">
          </div>
          <div class="form-group right">
            <label for="cpassword" class="label-title">Confirm Password *</label>
            <input type="password" class="form-input" id="cpassword" name="cpassword" placeholder="confirm password" required="required">
            <small id="emailHelp" class="form.text text-muted">Make sure to type the same password</small>
          </div>
        </div>

        <!-- Gender and Hobbies -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label class="label-title">Gender:</label>
            <div class="input-group">
              <label for="male"><input type="radio" value="male" name="gender" id="male" > Male</label>
              <label for="female"><input type="radio" value="female" name="gender" id="female" > Female</label>
            </div>
          </div>
          <div class="form-group right">
              <label for="address" class="label-title">Address<i class="material-icons">home*</i></label>
              <input  type="text" name="address" placeholder="Address  "  required="required">
          </div>
        </div>

      
        <div class="horizontal-group">
          <label for="phone" class="label-title">Mobile Number <break><i class="material-icons">phone*</i></label>
          <input  type="phone" id="phone" name="mobilenumber" placeholder="Mobile Number" required="required">
          
        </div>

        
      <!-- form-footer -->
      <div class="form-footer">
        <!-- <span>* required</span> -->
        <a href="login.php"><button  name="submit" class="btn">Submit</button></a>
      </div>
      <p class="login-register-text"> Already have an account ? <a href="login.php">Login</a></p>

    </form>

  
  <script>
      var rangeLabel = document.getElementById("range-label");
      var experience = document.getElementById("experience");

      function change() {
      rangeLabel.innerText = experience.value + "K";
      }
  </script>
  </body>
</html>
