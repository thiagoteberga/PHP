<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="shortcut icon" href="../img/favicon.ico">

    <title>Aula de PHP</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
    body {
      height:100%;
      width:100%;
      background: url(../img/bg.png) repeat center center;
 
    }
  </style>
  <body>
<?
session_start();

if(isset($_SESSION['pageviews']))
$_SESSION['pageviews']++;
else
$_SESSION['pageviews'] = 1;
?>
    <div class="container">
      <div class="login">
        <form class="form-signin" name="form1" action="login.php" method="post">
            <h2 class="form-signin-heading"><b>Clique no botão abaixo:</b></h2>
            <h3 class="form-signin-heading">(Setou Session = Session + 1)</h3>
            <br><br>
            <a href='versao_18_view.php' class='btn btn-lg btn-primary btn-block' role='button'>Ir para a View <span class='glyphicon glyphicon-folder-open' aria-hidden='true'></span> </a>
        </form>
      </div>
    </div> <!-- /container -->
  </body>
</html>