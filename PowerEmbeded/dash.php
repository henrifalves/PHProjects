<!DOCTYPE html>
<html lang="pt-br">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../logo.ico">
    <title>Dash</title>
    <?php
        include("generics.php");
        session_start();
        $interop = new InterOperadores();
        $interop->timer(); 
    ?>
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../../dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php include("../Front-end/menu.php"); ?>
      <div class="container theme-showcase" role="main">
    	  <div id="Adesao" class="page-header">
    	    <h1></br>Adesao</h1>
    	    <iframe width="1200" height="900" src="https://app.powerbi.com/view?r=eyJrIjoiYzZhMWI0MGYtNzIyZC00ZTE5LWI1NmYtNTRiOWI5MTEzY2YyIiwidCI6ImY4OTA4NmUwLTczMGEtNDA3NC05MWE0LWNkMzc0ZTNkMDJmZSJ9" frameborder="0" allowFullScreen="true"></iframe>
        </div>
      </div> <!-- /container -->
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
