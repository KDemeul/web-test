  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Eugen Barber</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Font awesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="css/global.css" rel="stylesheet">
    <link href="left-navbar/left-navbar.less" type="text/css" rel="stylesheet/less">
    <link href="home/home.less" type="text/css" rel="stylesheet/less">
  </head>
  <body>
    <?php include('left-navbar/left-navbar.php');?>

    <div id="customPanel">
      <div id="customTab-home" class="customTab">
          <?php include('home/home.php');?>
      </div>
      <div id="customTab-bio" class="customTab">
        <div class="row">
          <div class="col-md-offset-3 col-md-6" style="text-align: center;"> <h1> Bio </h1> </div>
        </div>
      </div>
      <div id="customTab-songs" class="customTab">
        <div class="row">
          <div class="col-md-offset-3 col-md-6" style="text-align: center;"> <h1> Songs </h1> </div>
        </div>
      </div>
      <div id="customTab-pic" class="customTab">
        <div class="row">
          <div class="col-md-offset-3 col-md-6" style="text-align: center;"> <h1> Pic </h1> </div>
        </div>
      </div>
      <div id="customTab-gold" class="customTab">
        <div class="row">
          <div class="col-md-offset-3 col-md-6" style="text-align: center;"> <h1> Gold </h1> </div>
        </div>
      </div>
    </div>
  </body>


  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <!-- LESS script -->
  <script src="js/less.js" type="text/javascript"></script>
  <script src="js/customscript.js" type="text/javascript"></script>
  </html>
