<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
      
      <form action="" method="post" name="file_save" enctype="multipart/form-data">
          <input type="file" name="myfile">
          <input type="submit">
      </form>
      
<!--    <div id="map"></div>
    <script>

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 8
  });
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAoQKZO_RC6V2FUsSISFhE72Sx5A6YQoCI&callback=initMap"
        async defer></script>-->
  </body>
</html>


<?php
echo 'Некоторая отладочная информация:';
print_r($_FILES['myfile']);

echo '<pre>';
$uploaddir = "/file/{$_FILES['myfile']['name']}";
echo 'Некоторая отладочная информация: $uploaddir='.$uploaddir;
echo 'Некоторая отладочная информация: $_FILES[myfile][tmp_name]='.$_FILES['myfile']['tmp_name'];

echo '<pre>';
if (move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}

echo '<br>';

?>
