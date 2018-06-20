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
  </style>
  <body>
    <header>
      <div class="navbar navbar-light bg-light box-shadow fixed-top">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <img src="public/img/logo.png" alt="BA" style="width: 90px">
          </a>
          <ul class="nav justify-content-end ">
            <li class="nav-item">
              <a class="nav-link active text-dark" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">Postularse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">Listado</a>
            </li>
          </ul>
        </div>
      </div>
    </header>
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
    </div>
  </body>
  <script type="text/javascript" src="public/js/bootstrap.js"></script>
  <script type="text/javascript" src="public/js/jquery.mask.js"></script>
  <script type="text/javascript" src="public/js/datepicker/bootstrap-datepicker.js"></script>
  <script  type="text/javascript" src="public/js/datepicker/locales/bootstrap-datepicker.es.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.phone').mask('+0000 0000-0000');
      $('.dni').mask('000000000000');
  $('.datepicker').datepicker({
  format: "dd-mm-yyyy",
  language: "es",
  });
    });
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
  'use strict';
  window.addEventListener('load', function() {
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.getElementsByClassName('needs-validation');
  // Loop over them and prevent submission
  var validation = Array.prototype.filter.call(forms, function(form) {
  form.addEventListener('submit', function(event) {
  if (form.checkValidity() === false) {
  event.preventDefault();
  event.stopPropagation();
  }
  form.classList.add('was-validated');
  }, false);
  });
  }, false);
  })();
  // This example displays an address form, using the autocomplete feature
  // of the Google Places API to help users fill in the information.
  // This example requires the Places library. Include the libraries=places
  // parameter when you first load the API. For example:
  // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
  var placeSearch, autocomplete;
  var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
  };
  function initAutocomplete() {
  // Create the autocomplete object, restricting the search to geographical
  // location types.
  autocomplete = new google.maps.places.Autocomplete(
  /** @type {!HTMLInputElement} */(document.getElementById('direccion')),
  {types: ['geocode']});
  // When the user selects an address from the dropdown, populate the address
  // fields in the form.
  autocomplete.addListener('place_changed', fillInAddress);
  }
  function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();
  for (var component in componentForm) {
  document.getElementById(component).value = '';
  document.getElementById(component).disabled = false;
  }
  // Get each component of the address from the place details
  // and fill the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
  var addressType = place.address_components[i].types[0];
  if (componentForm[addressType]) {
  var val = place.address_components[i][componentForm[addressType]];
  document.getElementById(addressType).value = val;
  }
  }
  }
  // Bias the autocomplete object to the user's geographical location,
  // as supplied by the browser's 'navigator.geolocation' object.
  function geolocate() {
  if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(function(position) {
  var geolocation = {
  lat: position.coords.latitude,
  lng: position.coords.longitude
  };
  var circle = new google.maps.Circle({
  center: geolocation,
  radius: position.coords.accuracy
  });
  autocomplete.setBounds(circle.getBounds());
  });
  }
  }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwyoxuyZwXuxBwuLLiLRp_oqObqhPU46o&libraries=places&callback=initAutocomplete"
  async defer></script>
</html>