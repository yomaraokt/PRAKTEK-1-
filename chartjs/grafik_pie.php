<?php
include ('koneksi.php');
$produk = mysqli_query($conn, "SELECT * FROM TB_BARANG");
while($row = mysqli_fetch_array($produk)){
    $nama_produk[] = $row['barang'];
    $query = mysqli_query($conn, "SELECT SUM(jumlah) as jumlah from tb_penjualan WHERE id_barang='".$row['id_barang']."'");
    $row = $query->fetch_array();
    $jumlah_produk[] = $row['jumlah'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik Pie ChartJS</title>
    <script type="text/javascript" src="chart.js"></script>
</head>
<body>
    <div id="canvas-holder" style="width:50%">
    <canvas id="chart-area"></canvas>
</div>
<script>
    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: <?php echo json_encode($jumlah_produk);?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                ],
                borderColor:    [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                ],
                label: 'Presentase Penjualan Barang'
            }],
            labels: <?php echo json_encode($nama_produk);?>,
        }, options: {
            responsive: true
        }
    };
    window.onload = function(){
    var ctx = document.getElementById('chart-area').getContext('2d');  
    window.myPie = new Chart (ctx, config)  ;
    };

    // document.getElementById('randomizeData').addEventListener('click', function(){
    //     config.data.datasets.forEach(function(dataset){
    //         dataset.data = dataset.data.map(function(){
    //             return randomScallingFactor();
    //         });
    //     });
    //     window.myPie.update();
    // });

    // var colorNames = Object.keys(window.chartColors);
    // document.getElementById('addDataset').addEventListener('click', function(){
    //     var newDataset = {
    //         backgroundColor: [],
    //         data: [],
    //         label: 'New Dataset' + config.data.datasets.length,
    //     };
    //     for(var index = 0; index < config.data.datasets.length; ++index){
    //         newDataset.data.push(randomScallingFactor());
    //         var colorName = colorNames[index % colorNames.length];
    //         var newColor = window.chartColors[colorName];
    //         newDataset.backgroundColor.push(newColor);
    //     }
    //     config.data.datasets.push(newDataset);
    //     window.myPie.update();
    // });
    // document.getElementById('removeDataset').addEventListener('click', function(){
    //     config.data.datasets.splice(0, 1);
    //     window.myPie.update();
    // });
</script>
</body>
</html>