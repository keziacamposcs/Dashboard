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

?>

<!DOCTYPE html>
<html>

<head>
</head>

<body>
<!-- Card Body -->
<div class="card-body">
  <div class="chart-area">
	<canvas id="pie"></canvas>
 </div>
</div>
                                

<?php   include'rodape.php';?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script> 


<script>
      var ctx = document.getElementById('pie').getContext('2d');
      var pie = new Chart(ctx, {
          type: 'pie',
          data: {
            labels: ["ETJ","Base"],
            datasets: [{ 
                data: [<?php echo number_format($tetj,2, ',', '.')?>, <?php echo number_format($tbase,2, ',', '.') ?>],
                borderColor:[
                  "#3cba9f",
                  "#ffa500",
                  "#c45850",
                ],
                backgroundColor: [
                  "rgb(60,186,159,0.1)",
                  "rgb(255,165,0,0.1)",
                  "rgb(196,88,80,0.1)",
                ],
                borderWidth:2,
              }]
          },
        options: {
          responsive: true,

          scales: {
            xAxes: [{ 
               display: false,
            }],
            yAxes: [{
               display: false,
            }],
          }
        },
      });

    </script>
</body>
</html>