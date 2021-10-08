<?php

include 'conexao/conexao.php';

//Janeiro
$sqljan = 'SELECT SUM(valor_fatura) AS totjan FROM fatura WHERE mes_fatura ="Jan" ';
$buscajan = mysqli_query($conexao, $sqljan);                              
$dadosjan = mysqli_fetch_array($buscajan);
$totjan = $dadosjan['totjan'];

//Fevereiro
$sqlfev = 'SELECT SUM(valor_fatura) AS totfev FROM fatura WHERE mes_fatura ="Fev" ';
$buscafev = mysqli_query($conexao, $sqlfev);                              
$dadosfev = mysqli_fetch_array($buscafev);
$totfev = $dadosfev['totfev'];

//Marco
$sqlmar = 'SELECT SUM(valor_fatura) AS totmar FROM fatura WHERE mes_fatura ="Mar" ';
$buscamar = mysqli_query($conexao, $sqlmar);                              
$dadosmar = mysqli_fetch_array($buscamar);
$totmar = $dadosmar['totmar'];

//Abril
$sqlabr = 'SELECT SUM(valor_fatura) AS totabr FROM fatura WHERE mes_fatura ="Abr" ';
$buscaabr = mysqli_query($conexao, $sqlabr);                              
$dadosabr = mysqli_fetch_array($buscaabr);
$totabr = $dadosabr['totabr'];

//Maio
$sqlmai = 'SELECT SUM(valor_fatura) AS totmai FROM fatura WHERE mes_fatura ="Mai" ';
$buscamai = mysqli_query($conexao, $sqlmai);                              
$dadosmai = mysqli_fetch_array($buscamai);
$totmai = $dadosmai['totmai'];

//Junho
$sqljun = 'SELECT SUM(valor_fatura) AS totjun FROM fatura WHERE mes_fatura ="Jun" ';
$buscajun = mysqli_query($conexao, $sqljun);                              
$dadosjun = mysqli_fetch_array($buscajun);
$totjun = $dadosjun['totjun'];

//Julho
$sqljul = 'SELECT SUM(valor_fatura) AS totjul FROM fatura WHERE mes_fatura ="Jul" ';
$buscajul = mysqli_query($conexao, $sqljul);                              
$dadosjul = mysqli_fetch_array($buscajul);
$totjul = $dadosjul['totjul'];

//Agosto
$sqlago = 'SELECT SUM(valor_fatura) AS totago FROM fatura WHERE mes_fatura ="Ago" ';
$buscaago = mysqli_query($conexao, $sqlago);                              
$dadosago = mysqli_fetch_array($buscaago);
$totago = $dadosago['totago'];

//Setembro
$sqlset = 'SELECT SUM(valor_fatura) AS totset FROM fatura WHERE mes_fatura ="Set" ';
$buscaset = mysqli_query($conexao, $sqlset);                              
$dadosset = mysqli_fetch_array($buscaset);
$totset = $dadosset['totset'];

//Outubro
$sqlout = 'SELECT SUM(valor_fatura) AS totout FROM fatura WHERE mes_fatura ="Out" ';
$buscaout = mysqli_query($conexao, $sqlout);                              
$dadosout = mysqli_fetch_array($buscaout);
$totout = $dadosout['totout'];

//Novembro
$sqlnov = 'SELECT SUM(valor_fatura) AS totnov FROM fatura WHERE mes_fatura ="Nov" ';
$buscanov = mysqli_query($conexao, $sqlnov);                              
$dadosnov = mysqli_fetch_array($buscanov);
$totnov = $dadosnov['totnov'];

//Dezembro
$sqldez = 'SELECT SUM(valor_fatura) AS totdez FROM fatura WHERE mes_fatura ="Dez" ';
$buscadez = mysqli_query($conexao, $sqldez);                              
$dadosdez = mysqli_fetch_array($buscadez);
$totdez = $dadosdez['totdez'];
?>

<!DOCTYPE html>
<html>

<head>
</head>

<body>
<!-- Card Body -->
<div class="card-body">
  <div class="chart-area">
  <canvas id="myChart"></canvas>
 </div>
</div>
                                

<?php   include'rodape.php';?>


<script type="text/javascript">
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
    datasets: [{
      label: 'R$',
      data: [<?php echo number_format($totjan,2, ',', '.')?>, <?php echo number_format($totfev,2, ',', '.') ?>, <?php echo number_format($totmar,2, ',', '.')?>, <?php echo number_format($totabr,2, ',', '.')?>, <?php echo number_format($totmai,2, ',', '.')?>, <?php echo number_format($totjun,2, ',', '.')?>, <?php echo number_format($totjul,2, ',', '.')?>, <?php echo number_format($totago,2, ',', '.')?>, <?php echo number_format($totset,2, ',', '.')?>, <?php echo number_format($totout,2, ',', '.')?>, <?php echo number_format($totnov,2, ',', '.')?>, <?php echo number_format($totdez,2, ',', '.')?>],
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