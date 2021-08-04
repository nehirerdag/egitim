<?php
	/* Database connection settings */
	$host = 'localhost';
	$user = 'nehir';
	$pass = 'zxcv1234';
	$db = 'egitim';
	$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

	$ogrenci = '';
	$genel = '';

	//query to get data from the table
	$sql = "SELECT * FROM analiz ";
    $result = mysqli_query($mysqli, $sql);

	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {

		$ogrenci = $ogrenci . '"'. $row['ogrenci'].'",';
		$genel = $genel . '"'. $row['genel'] .'",';
	}

	$ogrenci = trim($ogrenci,",");
	$genel = trim($genel,",");
?>

<!DOCTYPE html>
<html>
	<head>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
		<title>Accelerometer data</title>

		<style type="text/css">			
			body{
				font-family: Arial;
			    margin: 80px 100px 10px 100px;
			    padding: 0;
			    color: white;
			    text-align: center;
			    background: #555652;
			}

			.container {
				color: #E8E9EB;
				background: #222;
				border: #555652 1px solid;
				padding: 10px;
			}
		</style>

	</head>

	<body>	   
	<div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-4">Zaman Yönetimi Becerisi</h4>
                    <canvas id="chart" style="width: 100%; height: 65vh; background: #222; border: 1px solid #555652; margin-top: 10px;"></canvas>
					<script>
						var ctx = document.getElementById("chart").getContext('2d');
						var myChart = new Chart(ctx, {
						type: 'line',
						data: {
							labels: [1,2,3,4,5,6,7,8,9],
							datasets: 
							[{
								label: 'Data 1',
								data: [<?php echo $ogrenci; ?>],
								backgroundColor: 'transparent',
								borderColor:'rgba(255,99,132)',
								borderWidth: 3
							},

							{
								label: 'Data 2',
								data: [<?php echo $genel; ?>],
								backgroundColor: 'transparent',
								borderColor:'rgba(0,255,255)',
								borderWidth: 3	
							}]
						},
					
						options: {
							scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
							tooltips:{mode: 'index'},
							legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
						}
					});
					</script>
			    <div id="column_chart" class="apex-charts" dir="ltr"></div>

                                           
											  
			</div>
		</div>
<!--end card-->
	</div>
	
	    
	</body>
</html>