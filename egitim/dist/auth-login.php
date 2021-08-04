<?php 
error_reporting(0);
// connect to the database
$conn = mysqli_connect('localhost', 'nehir', 'zxcv1234', 'egitim');
		
// check connection
if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
}

$k_adi = $_POST['k_adi'];  
$sifre = $_POST['sifre'];  
  
    //to prevent from mysqli injection  
    $k_adi = htmlspecialchars($k_adi);  
    $sifre = htmlspecialchars($sifre);  
    $k_adi = mysqli_real_escape_string($conn, $k_adi);  
    $sifre = mysqli_real_escape_string($conn, $sifre);  
  
    $sql = "select * from uyeler where k_adi = '$k_adi' and sifre = '$sifre'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        header('Location: index.html');  

    }   
    mysqli_close($conn); 
?>


<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Eduport | Giriş Yap</title>
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
                            
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-xl-5 col-sm-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">Giriş Yap</h5>
                                    <form method = "post" class="form-horizontal" action="auth-login.php">

                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group form-group-custom mb-4">
                                                    <input name="k_adi" value="<?php echo htmlspecialchars ($k_adi) ?>" type="text" class="form-control" id="username" required>
                                                    <label for="username">Kullanıcı Adı</label>
                                                </div>
                                                
                                                <div class="form-group form-group-custom mb-4">
                                                    <input name="sifre" value="<?php echo htmlspecialchars ($sifre) ?>" type="password" class="form-control" id="userpassword" required>
                                                    <label for="userpassword">Şifre</label>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                                            <label class="custom-control-label" for="customControlInline">Beni Hatırla</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="text-md-right mt-3 mt-md-0">
                                                            <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Şifreni mi Unuttun?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <button name="login" class="btn btn-success btn-block waves-effect waves-light" type="submit">Giriş Yap</button>
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <a href="auth-register.php" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Üye Ol</a>
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
