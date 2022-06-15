<?php
include'koneksi.php';
$ttlrcvr = mysqli_query($conn, "SELECT * FROM covidspread");
while($row = mysqli_fetch_array($ttlrcvr)){
    $country[] = $row['Country'];
    $query = mysqli_query($conn, "SELECT SUM(TotalRecovered) as Covid from covidspread WHERE id='".$row['id']."'");
    $row = $query->fetch_array();
    $total_recover[] = $row['Covid'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Grafik ChartJS</title>
    <script type="text/javascript" src="chart.js"></script>
</head>
<body>
    <div style="width:800px; height:800px">
    <canvas id="mychart"></canvas>
</div>
<script>
var ctx = document.getElementById("mychart").getContext('2d');
var mychart = new Chart(ctx, {
    type:'bar',
    data:   {
        labels: <?php echo json_encode($country);?>,
        datasets:[{
            label: 'Grafik Penjualan',
            data: <?php echo json_encode($total_recover);?>,
            backgroundColor: 'rgba(255,99,132,0.2)',
            borderColor: 'rgba(255,99,132,1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes:[{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }


});

</script>
</body>
</html>