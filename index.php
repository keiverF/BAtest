<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EXPO_BA</title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <script type="text/javascript" src="public/js/jQuery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="public/js/datepicker/datepicker3.css">
  </head>
  <style type="text/css" media="screen">
      table {
          font-size: 12px;
      }
      #loading{
          position: fixed;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          z-index: 1040;
          background-color: #0000008a;
          overflow: hidden !important;
      }
      #loading img{
        position: relative;
        left: calc(100% - 55%);
        top: calc(100% - 55%);
        margin: 0 auto;
        width: 120px;
      }
      #loading p {
        position: fixed;
        color: white;
        top: calc(100% - 55%);
        left: calc(100% - 53%);        
        margin: 0 auto;
      }
  </style>
  <body>
    <div id="loading" style="display: none">
      <img src="public/img/loading.gif" alt="loading">
      <p>Cargando...</p>
    </div>
    <header>
      <div class="navbar navbar-light bg-light box-shadow fixed-top">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <img src="public/img/logo.png" alt="BA" style="width: 90px">
          </a>
          <ul class="nav justify-content-end ">
            <li class="nav-item">
              <a class="nav-link active text-dark" href="#inicio">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#postularse">Postularse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#listado">Listado</a>
            </li>
          </ul>
        </div>
      </div>
    </header>
<p id="inicio"></p>

    <div class="jumbotron mb-0" style="background: url(public/img/header-bg.jpg); background-position: center; background-repeat: no-repeat;background-size: cover; margin-top: 7%">
      <div class="container  text-white" >
        <h1 class="display-5">Gobierno de la Ciudad Autónoma de Buenos Aires</h1>
        <p>Ven a probar tú talento como desarrollador confines de formar parte nuestro equipo
        de trabajo.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
      </div>
    </div>
    <div class="container-fluid text-white bg-dark py-3">
      <div class="container">
        <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div>
      </div>
      </div>
    </div>
    <div class="container pt-3">
      <?php  Include("partials/postulanteView.php"); ?>
      <?php  Include("partials/deletePostuView.php"); ?>
    </div>
  </body>
  <script type="text/javascript" src="public/js/bootstrap.js"></script>
  <script type="text/javascript" src="public/js/jquery.mask.js"></script>
  <script type="text/javascript" src="public/js/datepicker/bootstrap-datepicker.js"></script>
  <script  type="text/javascript" src="public/js/datepicker/locales/bootstrap-datepicker.es.js"></script>
  <script type="text/javascript" src="public/js/main.js"></script>
  <script type="text/javascript" src="public/js/function.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwyoxuyZwXuxBwuLLiLRp_oqObqhPU46o&libraries=places&callback=initAutocomplete"
  async defer></script>
</html>