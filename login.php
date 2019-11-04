<?php 

    require_once "db/config.php";

        session_start();
        $name = $phone = $email = $password = "";
        $errors = array();

    if (isset($_POST['signup_btn'])) {

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(empty($name)) {
            array_push($errors, "Username is required");
        }

        if(empty($phone)) {
            array_push($errors, "Phone number is required");
        }

        if(empty($email)) {
            array_push($errors, "Email is required");
        }

        if(empty($password)) {
            array_push($errors, "Password is required");
        }

        if(count($errors) == 0) {
            $sql = "INSERT INTO user(Name, Phone, Email, Password) VALUES('$name', '$phone', '$email', '$password')";
            mysqli_query($conn, $sql);
            $_SESSION['login'] = $email;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
    }

    $email1 = $password1 = "";

    if(isset($_POST['login_btn'])) {

        $email1 = $_POST['email1'];
        $password1 = $_POST['password1'];

        if(empty($email1)) {
            array_push($errors, "Email is required");
        }

        if(empty($password1)) {
            array_push($errors, "Password is required");
        }

        if(count($errors) == 0) {
            $query = "SELECT * FROM user WHERE Email='$email1' AND Password='$password1'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) == 1) {
                $_SESSION['login'] = $email1;
                $_SESSION['success'] = "You are now logged in";
                header("location: index.php");
        }
        else {
            array_push($errors, "Email or Password incorrect");
        }
        }   
    }
    

?>



<!DOCTYPE html>
<html>
    <head>
        <title>
            Intelligent Tourist System
        </title>
        <link rel="stylesheet" href="css/login_styles.css">
    </head>
    <body>
    	<div class="login-content">
    		<div class="form-box">
    			<div class="button-box">
    				<div id="btn"></div>
    				<button type="button" class="toggle-btn" onclick="login()">Login</button>
    				<button type="button" class="toggle-btn" onclick="signup()">Sign Up</button>
    			</div>

    			<form id="login" class="input-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <?php if (count($errors) > 0): ?>
                        <div class="error">
                            <?php foreach ($errors as $error): ?>
                                <p><?php echo $error; ?></p>
                            <?php endforeach ?>
                        </div>
                    <?php endif ?>

    				<input type="email" name="email1" class="input-field" placeholder="Email">
    				<input type="password" name="password1" class="input-field" placeholder="Password">
    				<button type="submit" name="login_btn" class="submit-btn">Login</button>
    			</form>

    			<form id="signup" class="input-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <?php if (count($errors) > 0): ?>
                        <div class="error">
                            <?php foreach ($errors as $error): ?>
                                <p><?php echo $error; ?></p>
                            <?php endforeach ?>
                        </div>
                    <?php endif ?>

    				<input type="text" name="name" class="input-field" placeholder="Name">
    				<input type="text" name="phone" class="input-field" placeholder="Phone">
    				<input type="email" name="email" class="input-field" placeholder="Email">
    				<input type="password" name="password" class="input-field" placeholder="Password">
    				<button type="submit" name="signup_btn" class="submit-btn">Sign Up</button>
    			</form>

    		</div>
    	</div>
    </body>

    <script>
    	var x = document.getElementById("login");
    	var y = document.getElementById("signup");
    	var z = document.getElementById("btn");

    	function signup(){
    		x.style.left = "-400px";
    		y.style.left = "50px";
    		z.style.left = "110px";
    	}

    	function login(){
    		x.style.left = "50px";
    		y.style.left = "450px";
    		z.style.left = "0";
    	}

    </script>

</html>
