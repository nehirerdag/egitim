<?php

$conn = mysqli_connect('localhost', 'nehir', 'zxcv1234', 'egitim');
		
// check connection
if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
}
 

// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if ( !isset($_POST['k_adi'], $_POST['sifre']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $conn->prepare('SELECT id, sifre FROM uyeler WHERE k_adi = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['k_adi']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $sifre);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['sifre'], $sifre)) {
            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['k_adi'] = $_POST['k_adi'];
            $_SESSION['id'] = $id;
            echo 'Welcome ' . $_SESSION['k_adi'] . '!';
        } else {
            // Incorrect password
            echo 'Incorrect username and/or password!';
        }
    } else {
        // Incorrect username
        echo 'Incorrect username and/or password!';
    }

	$stmt->close();
}

 



?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="k_adi" class="form-control <?php echo (!empty($k_adi_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $k_adi; ?>">
                <span class="invalid-feedback"><?php echo $k_adi_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="sifre" class="form-control <?php echo (!empty($sifre_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $sifre_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>