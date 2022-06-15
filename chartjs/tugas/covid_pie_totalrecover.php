<?php
include'koneksi.cvd.php';
$ttlrcvr = mysqli_query($conn, "SELECT * FROM tb_covid");
while($row = mysqli_fetch_array($ttlrcvr)){
    $country[] = $row['Country'];
    $query = mysqli_query($conn, "SELECT SUM(Total_Recovered) as Covid from tb_covid WHERE nomor='".$row['nomor']."'");
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
    <title>Covid Total Recovered Pie Chart</title>
    <script type="text/javascript" src="chart.js"></script>
</head>
<body>
    <h1 style="margin-left:200px;">Total Recovered of Covid</h1>
    <h2 style="margin-left:330px; font-weight:lighter;">Pie Chart</h2>
    <br>
    <div id="canvas-holder" style="width:50%">
    <a style="padding: 10px 15px; text-decoration:none; color:white; background-color:black; margin-left:310px;" href="index.php">Back To Menu</a>
    <br><br><br>
    <canvas id="chart-area"></canvas>
</div>
<script>
    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: <?php echo json_encode($total_recover);?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 0, 0, 0.7)',
                    'rgba(0, 255, 124, 0.5)',
                    'rgba(255, 248, 0, 0.5)',
                    'rgba(255, 115, 0, 0.3)',
                    'rgba(72, 0, 255, 0.3)',
                    'rgba(60, 60, 60, 0.4)',
                    'rgba(168, 115, 65, 0.5)',
                ],
                borderColor:    [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                ],
                label: 'Presentase Penjualan Barang'
            }],
            labels: <?php echo json_encode($country);?>
        }, options: {
            responsive: true
        }
    };
    window.onload = function(){
    var ctx = document.getElementById('chart-area').getContext('2d');  
    window.myPie = new Chart (ctx, config)  ;
    };

    document.getElementById('randomizeData').addEventListener('click', function(){
        config.data.datasets.forEach(function(dataset){
            dataset.data = dataset.data.map(function(){
                return randomScallingFactor();
            });
        });
        window.myPie.update();
    });

    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset').addEventListener('click', function(){
        var newDataset = {
            backgroundColor: [],
            data: [],
            label: 'New Dataset' + config.data.datasets.length,
        };
        for(var index = 0; index < config.data.datasets.length; ++index){
            newDataset.data.push(randomScallingFactor());
            var colorName = colorNames[index % colorNames.length];
            var newColor = window.chartColors[colorName];
            newDataset.backgroundColor.push(newColor);
        }
        config.data.datasets.push(newDataset);
        window.myPie.update();
    });
    document.getElementById('removeDataset').addEventListener('click', function(){
        config.data.datasets.splice(0, 1);
        window.myPie.update();
    });
</script>
</body>
</html>