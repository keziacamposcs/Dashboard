<?php

include 'conexao/conexao.php';
//Base
$sqlbase = "SELECT SUM(valor_fatura) as tbase FROM fatura WHERE centro_custo_fatura = 'Base' ";
$busca1 = mysqli_query($conexao, $sqlbase);                              

$dados1 = mysqli_fetch_array($busca1);
$tbase = $dados1['tbase'];

//ETJ
$sqletj = "SELECT SUM(valor_fatura) as tetj FROM fatura WHERE centro_custo_fatura = 'ETJ' ";
$busca2 = mysqli_query($conexao, $sqletj);                              

$dados2 = mysqli_fetch_array($busca2);
$tetj = $dados2['tetj'];

/*Matriz
$sqlbase = "SELECT SUM(valor_fatura) as tbase FROM fatura WHERE centro_custo_fatura = 'Matriz' ";
$busca1 = mysqli_query($conexao, $sqlbase);                              
$dados1 = mysqli_fetch_array($busca1);
$tbase = $dados1['tbase'];
*/
?>

<!DOCTYPE html>
<html>

<head>
</head>

<body>
<!-- Pie Chart -->
<!-- Card Body -->
<div class="card-body">
  <div class="chart-pie pt-4 pb-2">
    <canvas id="myPieChart"></canvas>
  </div>
        
  <div class="mt-4 text-center small">
    <span class="mr-2">
      <i class="fas fa-circle text-primary"></i> Base
    </span>
    <span class="mr-2">
      <i class="fas fa-circle text-success"> </i> ETJ
    </span>
  </div>
</div>
                                

<?php   include'rodape.php';?>


<script type="text/javascript">
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Base", "ETJ"],
    datasets: [{
      data: [<?php echo $tbase ?>, <?php echo $tetj ?>],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
</script>
</body>
</html>