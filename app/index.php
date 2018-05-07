<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Proyecto-LigaMX</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <style type="text/css">

      html,
      body,
      header,
      .carousel {
        height: 40vh;
      }

      @media (max-width: 740px) {
        html,
        body,
        header,
        .carousel {
          height: 100vh;
        }
      }

      @media (min-width: 800px) and (max-width: 850px) {
        html,
        body,
        header,
        .carousel {
          height: 100vh;
        }
      }

      @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #929FBA!important;
              }
          }
    </style>
</head>

<body>

  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">
          <strong>Base de Datos Avanzada - TC3041</strong>
        </a>

      </div>
    </nav>
    <!-- Navbar -->

    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
          <div class="view" style="background-image: url('http://static.gigapan.org/gigapans0/162132/images/162132-900x360.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4 rounded">
                  <strong>¿Qué equipo ganará la Liga BBVA Bancomer MX?</strong>
                </h1>

                <p>
                  <strong>Torneo Clausura 2017 - 2018</strong>
                </p>

              </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
        <!--/First slide-->

      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->

  </header>

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Main info-->
      <section class="mt-2 wow fadeIn">

        <!--Main chart-->
        <div class="main_chart">
          <center>
            <canvas id="mainChart" style="max-width: 750px;"></canvas>
          </center>
        </div>
        <!--Main chart-->

      </section>
      <!--Section: Main info-->

      <hr class="my-5">

      <!--Section: Twitter Views-->
      <section>

        <h3 class="h3 text-center mb-5">Tweets</h3>

        <div class="row">

          <div class="col-lg-3">
            <a class="twitter-timeline" data-height="500" data-theme="light" href="https://twitter.com/LIGABancomerMX?ref_src=twsrc%5Etfw">Tweets by LIGABancomerMX</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>

          <div class="col-lg-3">
            <a class="twitter-timeline"  href="https://twitter.com/hashtag/LigaMX" data-widget-id="991152186867449860">Tweets sobre #LigaMX</a>
            <script>
              !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
            </script>
          </div>

          <div class="col-lg-3">
            <a class="twitter-timeline"  href="https://twitter.com/hashtag/LIGABancomerMX" data-widget-id="991152409689894912">Tweets sobre #LIGABancomerMX</a>
            <script>
              !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
            </script>
          </div>

          <div class="col-lg-3">
            <a class="twitter-timeline"  href="https://twitter.com/hashtag/LiguillaMX" data-widget-id="991145489495183365">Tweets sobre #LiguillaMX</a>
            <script>
              !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
            </script>
          </div>

        </div>

      </section>
      <!--Section: Twitter Views-->

      <hr class="my-5">

      <!--Section: Acerca de este proyecto-->
      <section>

        <h2 class="my-5 h3 text-center">Acerca de este proyecto</h2>

        <div class="mb-4">
          <h4>Criterios a evaluar</h4>
          <ul>
            <li>Posición en la tabla</li>
            <li>Partidos Ganados</li>
            <li>Diferencia de Goles</li>
            <li>Partidos Ganados en los últimos 5 juegos</li>
            <li>Porcentaje de tweets positivos</li>
          </ul>
        </div>

      </section>
      <!--Section: Acerca de este proyecto-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="py-4">
      <a class="btn btn-outline-white" href="https://developer.fantasydata.com/documentation" target="_blank" role="button">Fantasy Data
        <i class="fa fa-soccer-ball-o ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="https://www.mongodb.com//" target="_blank" role="button">MongoDB
        <i class="fa fa-leaf ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="http://www.tweepy.org/" target="_blank" role="button">Tweepy
        <i class="fa fa-twitter ml-2"></i>
      </a>
    </div>
    <!--/.Call to action-->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      Juan Carlos Sánchez Cruz
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
      <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>

  <script>
  <?php
  require 'vendor/autoload.php';
  $client = new MongoDB\Client("mongodb://localhost:27017");
  $collection = $client->ligamx->equipos;

  $query = array('pos' => array( '$lte' => 8 ));
  $result = $collection->find($query);
  $teams = array();
  $teams_perc = array();
  $i = 0;
  foreach ($result as $entry) {
    $teams[$i] = $entry['nombre'];
    $teams_perc[$i] = $entry['porcentaje'];
    $i++;
  }
  echo "var ctx = document.getElementById(\"mainChart\").getContext('2d');
  var mainChart = new Chart(ctx, {
  type: 'bar',
  data: {
      labels: [\"".$teams[0]."\", \"".$teams[1]."\", \"".$teams[2]."\", \"".$teams[3]."\", \"".$teams[4]."\", \"".$teams[5]."\", \"".$teams[6]."\", \"".$teams[7]."\"],
      datasets: [{
          label: 'Porcentaje',
          data: [".$teams_perc[0].", ".$teams_perc[1].", ".$teams_perc[2].", ".$teams_perc[3].", ".$teams_perc[4].", ".$teams_perc[5].", ".$teams_perc[6].", ".$teams_perc[7]."],
          backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(255, 159, 64, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(153, 102, 51, 0.2)',
              'rgba(255, 206, 86, 0.2)'
          ],
          borderColor: [
              'rgba(255,99,132,1)',
              'rgba(255, 206, 86, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(255, 159, 64, 1)',
              'rgba(255,99,132,1)',
              'rgba(153, 102, 51, 1)',
              'rgba(255, 206, 86, 1)'
          ],
          borderWidth: 1
      }]
  },
  options: {
      scales: {
          yAxes: [{
              ticks: {
                  beginAtZero:true
              }
          }]
      }
  }
  });"
  ?>
  </script>

</body>

</html>
