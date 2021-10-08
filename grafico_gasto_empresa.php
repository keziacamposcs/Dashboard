<?php

include 'conexao/conexao.php';

//Quantidade de empresas cadastradas
$sqlempresa = "SELECT COUNT(DISTINCT(empresa_fatura)) AS quant_empresa FROM fatura";
$buscaempresa = mysqli_query($conexao, $sqlempresa);                              
$dadosempresa = mysqli_fetch_array($buscaempresa);
$quant_empresa = $dadosempresa['quant_empresa'];


//Gastos por empresa
$sql = "SELECT SUM(valor_fatura) AS totfat FROM fatura";
$busca = mysqli_query($conexao, $sql);                              
$dados = mysqli_fetch_array($buscajan);
$totfat = $dados['totfat'];
?>

<!DOCTYPE html>
<html>

<head>
</head>

<body>
<!-- Card Body -->
<div class="card-body">
  <div class="chart-area">
  <canvas id="empresa"></canvas>
 </div>
</div>
                                

<?php   include'rodape.php';?>


<script type="text/javascript">
var ctx = document.getElementById("empresa");
var empresa = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
    datasets: [{
      label: 'R$',
      data: [<?php 
                for ($i = 0; $i < $quant_empresa; $i++) {

                while ($dados = mysqli_fetch_array($busca)
                {
                    echo number_format($totfat,2, ',', '.');
                }
                }
            ?>],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    scales: {
      xAxes: [{
        ticks: {
          
        },
          gridLines: {
          offsetGridLines: true // à rajouter
        }
      },],

      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});
</script>
</body>
</html>