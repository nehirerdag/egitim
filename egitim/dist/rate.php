<?php

// connect to the database
	$conn = mysqli_connect('localhost', 'nehir', 'zxcv1234', 'egitim');
		
	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

	// write query for all dersler
	$sql = 'SELECT * FROM rate';


	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);


	// fetch the resulting rows as an array
	$rate = mysqli_fetch_all($result, MYSQLI_ASSOC);
	

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection

	
	$deger = '';
	$errors = array('deger' => '');

	if(isset($_POST['deger'])){
		
		
			$deger = $_POST['deger'];
			
			
		
			// escape sql chars
			$deger = mysqli_real_escape_string($conn, $_POST['deger']);
		
			
			
	

			// create sql
			
			$sql = "INSERT INTO rate(deger) VALUES('$deger')";
			echo 'eklendi!';

			// save to db and check
			if(mysqli_query($conn, $sql)){
				// success
				header('Location: rate.php');
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
        <title>Rating | Xoric - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Rating css -->
        <link href="assets/libs/bootstrap-rating/bootstrap-rating.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>



 <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <div class="row">
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <div class="p-4 text-center">
                                                        <form action="rate.php" method="POST">
                                                            <h5 class="font-size-15 mb-3">Default rating</h5>
                                                             <input name="deger" value="<?php echo htmlspecialchars($deger) ?>" type="hidden" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted"/>
                                                    
                                                          <!--  <div class="center">
                                                             <input type="submit" name="submit" value="Submit" class="btn btn-primary waves-effect waves-light btn-block">
                                                            </div> -->
                                                        </form>
                                                    </div>
                                                </div>
            
                                                
            
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
 <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

        <!-- Bootstrap rating js -->
        <script src="assets/libs/bootstrap-rating/bootstrap-rating.min.js"></script>

        <script src="assets/js/pages/rating-init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>