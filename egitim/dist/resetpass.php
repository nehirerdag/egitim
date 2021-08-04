<?php // connect to the database
session_start();
$conn = mysqli_connect('localhost', 'nehir', 'zxcv1234', 'egitim');

if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
}
$newpass = $sifre = $useremail = '';

$sql = "SELECT * FROM uyeler where useremail = '$useremail'";
$result = mysqli_query($conn, $sql);



$uyeler = mysqli_fetch_all($result, MYSQLI_ASSOC);




mysqli_free_result($result);


if(isset($_POST['submit'] )){
    

   

    $useremail= $_POST['useremail'];
    $newpass = $_POST['newpass'];
    
    

    $conn = mysqli_connect('localhost', 'nehir', 'zxcv1234', 'egitim');
    $result = mysqli_query($conn, "UPDATE uyeler SET sifre ='".$newpass."' WHERE useremail = '".$useremail."'");


    
    


if($result){

    echo 'şifre değişti';
    header('Refesh:2;url=index.html');
}else{
    echo 'hata';
    }
        
    



}
mysqli_close($conn);



?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Şifre Değiştir</title>
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
                            <h5 class="font-size-16 text-white-50 mb-4">Eduport</h5>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-xl-5 col-sm-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">Şifreyi Değiştir</h5>
                                    <form method="POST" class="form-horizontal" action="resetpass.php">

                                        <div class="row">
                                            <div class="col-md-12">
                                                

                                                <div class="form-group form-group-custom mt-5">
                                                <input name="newpass" value="<?php echo htmlspecialchars ($newpass) ?>" type="password" class="form-control"  required>
                                                    <label  for="userpassword">Yeni Şifreniz</label>
                                                </div>
                                                <div class="mt-4">
                                                    <input name="submit" class="btn btn-success btn-block waves-effect waves-light" type="submit">
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
