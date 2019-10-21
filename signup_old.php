<?php

require_once "db/config.php";
 
$name = $phone = $email = $password = "";
$name_err = $phone_err = $email_err = $password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["name"]))){
        $name_err = "Please enter a name.";
    }

    if(empty(trim($_POST["phone"]))){
        $phone_err = "Please enter a phone number.";
    }

    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter an email.";
    } else{
        $sql = "SELECT u_id FROM user WHERE email = ?";
        
        if($stmt = $conn->prepare($sql)){
            $stmt->bind_param("s", $param_email);
            
            $param_email = trim($_POST["email"]);
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already registered.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        mysqli_stmt_close($stmt);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty($name_err) && empty($phone_err) && empty($email_err) && empty($password_err)){
        
        $sql = "INSERT INTO user (name, phone, email, password) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_phone, $param_email, $param_password);

            $param_name = $name;
            $param_phone = $phone;
            $param_email = $email;
            $param_password = $password;
            
            if(mysqli_stmt_execute($stmt)){
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        mysqli_stmt_close($stmt);
    }
    
    mysqli_close($link);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
        <title>
            Intelligent Tourist System
        </title>
        <link rel="stylesheet" type="text/css" href="css/signup.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset = "utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/yourcode.js"></script>
    </head>

<body>
    <header>
        <nav id="header">
            <div class="container">
                <a href="#" class="pull-left visible-md visible-lg"></a>
                <div id="heading-name">
                    <h1>Outlines</h1>
                    <h4>journeys beyond the map</h4>
                </div>
                <div class="topnav" id="myTopnav">
                    <a href="signup.php" class="active">Sign Up</a>
                    <a href="contact.html">Contact</a>
                    <a href="gallery.html">Gallery</a>
                    <a href="services.html">Services</a>
                    <a href="index.html">Home</a>
                </div>
            </div>
        </nav>
    </header>
    <div id="signup-content">
        <h1>Sign Up</h1>
    </div>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                <input type="text" id="name" name="name" placeholder="Name" class="form-control" value="<?php echo $name; ?>" required>
                <div class="help-block"><?php echo $name_err; ?></div>
            </div> 
            <br>
            <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                <input type="text" id="phone" name="phone" placeholder="Phone" class="form-control" value="<?php echo $phone; ?>" required>
                <div class="help-block"><?php echo $phone_err; ?></div>
            </div>
            <br>
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <input type="email" id="email" name="email" placeholder="Email" class="form-control" value="<?php echo $email; ?>" required>
                <div class="help-block"><?php echo $email_err; ?></div>
            </div>
            <br>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <input type="text" id="password" name="password" placeholder="Password" class="form-control" value="<?php echo $password; ?>" required>
                <div class="help-block"><?php echo $password_err; ?></div>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" value="Submit">
        </form>
        <p style="color: #4A5868; font-family: Georgia, 'Times New Roman', Times, serif;">
            Already have an account? <a href="login.php">Login here.</a>
        </p>
    </div>
    <footer class="panel-footer">
        <div class="container">
            <div id="contactno">
                <p>Mo : +9102221642356</p>
                <p>Email : info@outlines.com</p>
            </div>
            <div class="row">
                <div class="column" id="copyright">&copy; 2019 Outlines - All rights reserved</div>
                <div class="column" id="sociallogo">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </footer> 

</body>

</html>
