<!--
 =========================================================
 Material Kit PRO - v2.2.0
 =========================================================

 Product Page: https://www.creative-tim.com/product/material-kit-pro
 Copyright 2019 Creative Tim (https://www.creative-tim.com)

 Coded by Creative Tim

 =========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php

if (isset($_POST['submit'])) {


    $host       = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "hack"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
  
 
  function escape($html) {
  return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

  try {
    $connection = new PDO($dsn, $username, $password, $options);



if ( $_POST['vehicle1'] == "true") {
  $q1=1; }
  else {
  $q1=0;
  }
  if ( $_POST['vehicle2'] == "true") {
  $q2=1; }
  else {
  $q2=0;
  }
  if ( $_POST['vehicle3'] == "true") {
  $q3=1; }
  else {
  $q3=0;
  } 

    $new_user = array(
      "streetnumber" => $_POST['street_number'],
      "streetname"  => $_POST['route'],
      "city"     => $_POST['locality'],
      "state"       => $_POST['administrative_area_level_1'],
      "country"  => $_POST['country'],
      "zipcode" => $_POST['postal_code'],
      "question1" => $q1,
      "question2" => $q2,
      "question3" => $q3,
      "comments" => $_POST['comments']
    );

    $sql = sprintf(
"INSERT INTO %s (%s) values (%s)",
"tagdetails",
implode(", ", array_keys($new_user)),
":" . implode(", :", array_keys($new_user))
    );

    $statement = $connection->prepare($sql);
    $statement->execute($new_user);
  } catch(PDOException $error) {
    
    echo $sql . "<br>" . $error->getMessage();
  }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Contrac
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-kit.css?v=2.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <link href="assets/demo/vertical-nav.css" rel="stylesheet" />
</head>

<body class="contact-page sidebar-collapse">
  <nav class="navbar  navbar-expand-lg bg-dark" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a href="home-page.html" class="navbar-brand">
          <h3><b>Contrac</b></h3> </a>
          <!-- <a class="navbar-brand" href="file:///C:/Users/payAu/Desktop/Adi/material-kit-pro-html-v2.2.0/examples/about-us-page.html">
          About Us </a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

       <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">apps</i> Tag Locations
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="sign-up-volunteer.html" class="dropdown-item">
                <i class="material-icons">line_style</i> Sign Up
              </a>
              <a href="tag-location.php" class="dropdown-item">
                <i class="material-icons">layers</i> Tag Locations
              </a>
              <a href="review-history.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Tag History
              </a>
            </div>
          </li>
        
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">view_carousel</i>Review Locations
            </a>
            <div class="dropdown-menu dropdown-with-icons">
             <!--  <a href="signup-donor.html" class="dropdown-item">
                <i class="material-icons">account_balance</i> Sign Up
              </a> -->
              <a href="review-location.php" class="dropdown-item">
              <a href="review-location.php" class="dropdown-item">
                <i class="material-icons">location_on</i> Retail Space
              </a>
              <a href="review-location.php" class="dropdown-item">
                <i class="material-icons">art_track</i> Parks
              </a>
              <a href="review-location.php" class="dropdown-item">
                <i class="material-icons">view_quilt</i> Restaurants 
              </a>
               </div>
            
         </li>
         <li class="dropdown nav-item">
          
          </li>
          <li class="button-container nav-item iframe-extern">
            <a href="login-C-Trac.html" target="_blank" class="btn  btn-success   btn-round btn-block">
              <i class="material-icons"></i> Login
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('assets/img/Pending.jpg');"> -->
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3156.7126021992844!2d-121.85606838438326!3d37.70294807977248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fe92e42faa8f9%3A0xebc526296c29c632!2sTarget!5e0!3m2!1sen!2sus!4v1592595546227!5m2!1sen!2sus" width="100%" height="450" frameborder="10" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
   <!--  <div class="container">
      <div class="row">       
      </div>
    </div> -->
  </div>
 
      <div class="col-md-8 ml-auto mr-auto text-center">  
              <h2 class=""><b>Tag Locations Visited</b></h2>    
      </div>          
      <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
       {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <style>
      #locationField, #controls {
        position: ab;
        width: 380px;
      }
      #autocomplete {
        position: relative;
        top: 0px;
        left: 0px;
        width: 99%;
      }
      .label {
        text-align: right;
        font-weight: bold;
        width: 100px;
        color: #303030;
        font-family: "Roboto";
      }
      #address {
        border: 1px solid #000090;
        background-color: #f0f9ff;
        width: 380px;
        padding-right: 2px;
      }
      #address td {
        font-size: 10pt;
      }
      .field {
        width: 99%;
      }
      .slimField {
        width: 80px;
      }
      .wideField {
        width: 200px;
      }
      #locationField {
        height: 20px;
        margin-bottom: 2px;
      }
    </style>
  

  
    <div id="locationField"  style="margin-left:auto;margin-right:auto;">
      <input id="autocomplete" 
             placeholder="Enter your address";  style="margin-left:auto;margin-right:auto"
             onFocus="geolocate()"
            

             >
            
    

    <!-- Note: The address components in this sample are typical. You might need to adjust them for
               the locations relevant to your app. For more information, see
         https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform
    -->
    <form method="post">
    <table id="address"; style="margin-left:auto;margin-right:auto;">
      <tr>
        <td class="label">Street address</td>
        <td class="slimField"><input type="text" name="street_number" class="field" id="street_number" disabled="false"/></td>
        <td class="wideField" colspan="2"><input class="field" name="route" id="route" disabled="true"/></td>
      </tr>
      <tr>
        <td class="label">City</td>
        <td class="wideField" colspan="3"><input class="field" name="locality" id="locality" disabled="true"/></td>
      </tr>
      <tr>
        <td class="label">State</td>
        <td class="slimField"><input class="field" name="administrative_area_level_1" id="administrative_area_level_1" disabled="true"/></td>
        <td class="label">Zip code</td>
        <td class="wideField"><input class="field" name="postal_code" id="postal_code" disabled="true"/></td>
      </tr>
      <tr>
        <td class="label">Country</td>
        <td class="wideField" colspan="3"><input class="field" name="country" id="country" disabled="true"/></td>
      </tr>
    </table>

     <div class="form">
            
      <br><br>
     <label style="left:10%"><b>Enter information on the location's safety and click on the checkboxes based on your preferance</b></label>
      
      <input type="checkbox" id="vehicle1" name="vehicle1" value="true" style="margin-left:auto;margin-right:auto">
<label for="vehicle1"> People were social-distancing</label><br>
<input type="checkbox" style="margin-left:auto;margin-right:auto" id="vehicle2" name="vehicle2" value="true">
<label for="vehicle2"> People were wearing a mask</label><br>
<input type="checkbox" id="vehicle3" name="vehicle3" value="true">
<label for="vehicle3">People were not in groups above 6 people</label><br>
<br><br>
<H3><b>Any Other Comments?</b></H3>

      <input  type="text" spellcheck="true" id="comments" name="comments" contenteditable="true" style="margin-left:auto;margin-right:auto; width: 400px">
      <br><br>
       <!-- <a href="accept-pickup.html" class="btn  btn-success   btn-round btn-block">
              <i class="material-icons"></i> Submit</a>
 -->
              <input type="submit" name="submit" value="Submit" class="btn  btn-success   btn-round btn-block">
</form>


    </div>
    </div>
    <script>
// This sample uses the Autocomplete widget to help the user select a
// place, then it retrieves the address components associated with that
// place, and then it populates the form fields with those details.
// This sample requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script
// src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

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
  // Create the autocomplete object, restricting the search predictions to
  // geographical location types.
  autocomplete = new google.maps.places.Autocomplete(
      document.getElementById('autocomplete'), {types: ['geocode']});

  // Avoid paying for data that you don't need by restricting the set of
  // place fields that are returned to just the address components.
  autocomplete.setFields(['address_component']);

  // When the user selects an address from the drop-down, populate the
  // address fields in the form.
  autocomplete.addListener('place_changed', fillInAddress);
}

function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();

  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }

  // Get each component of the address from the place details,
  // and then fill-in the corresponding field on the form.
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
      var circle = new google.maps.Circle(
          {center: geolocation, radius: position.coords.accuracy});
      autocomplete.setBounds(circle.getBounds());
    });
  }
}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAf7Z9aiNKzhYjERV-OwVMoU0ytMnlhwU&libraries=places&callback=initAutocomplete"
        async defer></script> 
 <!--        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br> -->









  <!--    
   <style>
.form {
    margin: 0 auto;
    width: 210px;
  }
  .form label{
    display: inline-block;
    text-align: right;
    float: left;
  }
  .form input{  
    display: inline-block;
    text-align: left;
    float: right;
  }
     
  </style> -->


     
       
  
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
  <!--	Plugin for Small Gallery in Product Page -->
  <script src="assets/js/plugins/jquery.flexisel.js" type="text/javascript"></script>
  <!-- Plugins for presentation and navigation  -->
  <script src="assets/demo/modernizr.js" type="text/javascript"></script>
  <script src="assets/demo/vertical-nav.js" type="text/javascript"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
  <script src="assets/demo/demo.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-kit.js?v=2.2.0" type="text/javascript"></script>
</body>

</html>