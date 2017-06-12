<!DOCTYPE html>
<html lang="pt-br">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../logo.ico">
    <script language="javascript">
    <!--
    function Popup(){

      varWindow = window.open('https://webchat.botframework.com/embed/OperaBot?s=fNQEHPwxi7E.cwA.JiI.paL7yCsWP5xYqd5dSQ4vTCJ9FtfJqd-dA-pMPeOEvOM', "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=1, left=1, width=1, height=500");
      notifyMe();
    }

    function notifyMe()
    {
        varWindow.alert("Se precisar de ajuda escreva 'oi bot' no chat ao lado");
    }
    </script>
    <title>Home</title>
      <?php
        include("generics.php");
        session_start();
        $interop = new InterOperadores();
        $interop->timer(); 
      ?>

    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="bootstrap-3.3.7/docs/examples/dashboard/dashboard.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <link href="theme.css" rel="stylesheet">

  </head>

  <body>

    <!-- Fixed navbar -->
    <?php include("../Front-end/menu.php"); ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-5 col-md-offset-1 main">
          <h1 class="page-header"><br>Dashboards</h1>
            <div class="row placeholders">
              <div class="col-xs-6 col-sm-6 placeholder">
                <a href="dash.php"><img src="http://10.0.0.97/pics/pic_1.JPG" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
                <h4>Adesao</h4>
                <span class="text-muted">Relatório de adesões</span>
              </div>

              <div class="col-xs-6 col-sm-6 placeholder">
                <a href="cancelados.php"><img src="http://10.0.0.97/pics/pic_2.JPG" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
                <h4>Cancelados</h4>
                <span class="text-muted">Relatorio de cancelamento</span>
              </div>

              <div class="col-xs-6 col-sm-6 placeholder">
                <a href="protect_parcel.php"><img src="http://10.0.0.97/pics/pic_3.JPG" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
                <h4>Parcela Protegida</h4>
                <span class="text-muted">Relatorio de parcelas protegidas</span>
              </div>

              <div class="col-xs-6 col-sm-6 placeholder">
                <a href="bolsa.php"><img src="http://10.0.0.97/pics/pic_4.JPG" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
                <h4>Bolsa Premiada</h4>
                <span class="text-muted">Relatorio de bolsa premiada</span>
              </div>

              <div class="col-xs-6 col-sm-6 col-md-offset-0 placeholder">
                <a href="casa_tranquila.php"><img src="http://10.0.0.97/pics/pic_5.JPG" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
                <h4>Casa Tranquila</h4>
                <span class="text-muted">Relatorio casa tranquila</span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-9 col-sm-offset-3 col-md-5 col-md-offset-0 main">
              <h1 class="page-header"><br>Relatorios analiticos</h1>

              <div class="col-xs-6 col-sm-6 placeholder">
                <a href="resumo.php"><img src="http://10.0.0.97/pics/pic_6.JPG" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
                <h4>Faturamento</h4>
                <span class="text-muted">Relatorio analítco de faturamento</span>
              </div>

              <div class="col-xs-6 col-sm-6 placeholder">
                <a href="log.php"><img src="http://10.0.0.97/pics/pic_7.JPG" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
                <h4>Erros</h4>
                <span class="text-muted">Relatorio analítico de erros</span>
              </div>

              <div class="col-xs-6 col-sm-6 placeholder">
                <a href="adesao_analytics.php"><img src="http://10.0.0.97/pics/pic_8.JPG" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
                <h4>Adesões</h4>
                <span class="text-muted">Relatorio analitíco de adesão</span>
              </div>

              <div class="col-xs-6 col-sm-6 placeholder">
                <a href="cancel_analytics.php"><img src="http://10.0.0.97/pics/pic_9.JPG" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
                <h4>Cancelados</h4>
                <span class="text-muted">Relatorio analitíco de cancelamento</span>
              </div>

              <div class="col-xs-6 col-sm-6 col-md-offset-6 placeholder">
                <a href="cobranca_analytics.php"><img src="http://10.0.0.97/pics/pic_10.JPG" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
                <h4>Cobrança</h4>
                <span class="text-muted">Relatorio analitíco de cobrança</span>
              </div>

            </div>
          </div>
        </div>
      </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        <script>
      var teste = angular.module('teste',[]);
      teste.controller('Ctrl',
        function($scope, $http)
        {
          $http.get('file.json').then(function(response){
            $scope.teste =  response.data.logs;
          });
        });</script>
  </body>
</html>
