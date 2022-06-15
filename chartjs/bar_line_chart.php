<?php 

include ('koneksi.cvd.php');

$label = ["India", "S.Korea", "Turkey", "Vietnam", "Japan", "Iran", "Indonesia", "Malaysia", "Thailand", "Israel"];

for ($nomor=1; $nomor < 11 ; $nomor++) 
{ 
	$query = mysqli_query($conn, "SELECT SUM(Total_Cases) as TotalCases from tb_covid WHERE nomor='$nomor'");
	$query1 = mysqli_query($conn, "SELECT SUM(New_Cases) as NewCases from tb_covid WHERE nomor='$nomor'");
	$query2 = mysqli_query($conn, "SELECT SUM(Total_Deaths) as TotalDeaths from tb_covid WHERE nomor='$nomor'");
	$query3 = mysqli_query($conn, "SELECT SUM(New_Deaths) as NewDeaths from tb_covid WHERE nomor='$nomor'");
	$query4 = mysqli_query($conn, "SELECT SUM(Total_Recovered) as TotalRecovered from tb_covid WHERE nomor='$nomor'");
	$query5 = mysqli_query($conn, "SELECT SUM(New_Recovered) as NewRecovered from tb_covid WHERE nomor='$nomor'");

	$row = $query->fetch_array();
	$row1 = $query1->fetch_array();
	$row2 = $query2->fetch_array();
	$row3 = $query3->fetch_array();
	$row4 = $query4->fetch_array();
	$row5 = $query5->fetch_array();

	$total_cases[] = $row['TotalCases'];
	$new_cases[] = $row1['NewCases'];
	$total_deaths[] = $row2['TotalDeaths'];
	$new_deaths[] = $row3['NewDeaths'];
	$total_recovered[] = $row4['TotalRecovered'];
	$new_recovered[] = $row5['NewRecovered'];
}

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Membuat Grafik Menggunakan Chart JS</title>
	<script type="text/javascript" src="chart.js"></script>
</head>
<body>

		<div style="width: 800px; height: 800px;">
			<canvas id="myChart"></canvas>
		</div>


		<script>
			
			var ctx = document.getElementById("myChart").getContext('2d');
			var myChart = new Chart(ctx, {
                type: 'bar',
				data: {
					labels: <?php echo json_encode($label); ?>,
					datasets:[{
						
						label: 'Total Cases',
						data: <?php echo json_encode($total_cases); ?>,
						backgroundColor: 'rgba(255, 99, 132, 0.2)',
						borderColor: 'rgba(255, 99, 132, 1)',
						borderWidth: 1
					}, {
						type: 'line',
						label: 'New Cases',
						data: <?php echo json_encode($new_cases); ?>,
						backgroundColor: 'rgba(150, 300, 82, 0.2)',
						borderColor: 'rgba(150, 300, 82, 1)',
						borderWidth: 1
					}, {
						type: 'bar',
						label: 'Total Deaths',
						data: <?php echo json_encode($total_deaths); ?>,
						backgroundColor: 'rgba(90, 50, 300, 0.2)',
						borderColor: 'rgba(90, 50, 300, 1)',
						borderWidth: 1
					}, {
						type: 'line',
						label: 'New Deaths',
						data: <?php echo json_encode($new_deaths); ?>,
						backgroundColor: 'rgba(300, 99, 132, 0.8)',
						borderColor: 'rgba(300, 99, 132, 1)',
						borderWidth: 1
					}, {
						type: 'bar',
						label: 'Total Recovered',
						data: <?php echo json_encode($total_recovered); ?>,
						backgroundColor: 'rgba(150, 350, 82, 0.8)',
						borderColor: 'rgba(150, 350, 82, 1)',
						borderWidth: 1
					}, {
						type: 'line',
						label: 'New Recovered',
						data: <?php echo json_encode($new_recovered); ?>,
						backgroundColor: 'rgba(90, 50, 350, 0.8)',
						borderColor: 'rgba(90, 50, 350, 1)',
						borderWidth: 1
					}]
				},
				options:{
					scales:{
						yAxes:[{
							ticks:{
								beginAtZero:true
							}
						}]
					}
				}
			});

		</script>

</body>
</html>