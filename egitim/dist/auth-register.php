<?php

// connect to the database
	$conn = mysqli_connect('localhost', 'nehir', 'zxcv1234', 'egitim');
		
	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

	// write query for all dersler
	$sql = 'SELECT * FROM uyeler';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);


	// fetch the resulting rows as an array
	$uyeler = mysqli_fetch_all($result, MYSQLI_ASSOC);
	

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection

	
	$useremail = $k_adi = $sifre = '';
	$errors = array('useremail' => '', 'k_adi' => '', 'sifre' => '');

	if(isset($_POST['submit'])){
		
		
			$useremail = $_POST['useremail'];
			
			$k_adi = $_POST['k_adi'];
	
			$sifre = $_POST['sifre'];
		
		
			// escape sql chars
			$useremail = mysqli_real_escape_string($conn, $_POST['useremail']);
		
			$k_adi = mysqli_real_escape_string($conn, $_POST['k_adi']);
			
			$sifre = mysqli_real_escape_string($conn, $_POST['sifre']);
			
		
			// create sql
			
			$sql = "INSERT INTO uyeler(k_adi,sifre,useremail) VALUES('$k_adi','$sifre','$useremail')";
			
          

         
            
			// save to db and check
			if(mysqli_query($conn, $sql)){
				// success
				header('Location: index.html');
			} else {
				echo 'query error: '. mysqli_error($conn);
			}

			
		
			mysqli_close($conn);
		

	} // end POST check

?>


<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Kayıt Ol</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="bg-primary bg-pattern">
        <div class="home-btn d-none d-sm-block">
            <a href="index.html"><i class="mdi mdi-home-variant h2 text-white"></i></a>
        </div>

        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <a href="index.html" class="logo"><img src="assets/images/logo-light.png" height="24" alt="logo"></a>
                            <h5 class="font-size-16 text-white-50 mb-4"></h5>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-xl-5 col-sm-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">Kayıt Ol</h5>
                                    <form method="POST" class="form-horizontal" action="auth-register.php">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group form-group-custom mb-4">
                                                    <input name="k_adi" value="<?php echo htmlspecialchars ($k_adi) ?>" type="text" class="form-control" id="username" required>
                                                    <label for="username">Kullanıcı Adı</label>
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
                                                    <input name="useremail" value="<?php echo htmlspecialchars ($useremail) ?>" type="email" class="form-control" id="useremail" required>
                                                    <label for="useremail">E-mail</label> 
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
                                                    <input name="sifre" value="<?php echo htmlspecialchars ($sifre) ?>" type="password" class="form-control" id="userpassword" required>
                                                    <label for="userpassword">Şifre</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="term-conditionCheck">
                                                    <label class="custom-control-label font-weight-normal" for="term-conditionCheck">Sözleşmeyi Okudum, Kabul Ediyorum <a href="#" class="text-primary"></a></label>
                                                </div>
                                             
                                                
                                                <div class="mt-4">
                                                    <button name="submit" class="btn btn-success btn-block waves-effect waves-light" type="submit">Kayıt Ol</button>
                                                </div>
                                                
                                                <div class="mt-4 text-center">
                                                    <a href="auth-login.php" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Zaten üye misin?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>


        <script src="assets/js/app.js"></script>

    </body>
</html>

                                               