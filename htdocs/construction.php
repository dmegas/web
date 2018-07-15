<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Dimitra Megas</title>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/default.css" />
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <script src="js/modernizr.custom.js"></script>
</head>
<body>
  <div class="container">
    <header>
      <h1>Dimitra Megas <span>Portfolio</span></h1>
      <div style="max-width: 69em;">
      <nav class="codrops-demos">
        <a class="current-demo" href="#">Architecture</a>
        <a href="#">Drawings</a>
        <a href="#">Paintings</a>
      </nav>
      </div>
    </header>
    <ul class="grid effect-2" id="grid">
      <li style="width:100%; height: 200px;"><h2>interdisciplinary lab</h2></li>
      <?php

      function addImage($name) {
        echo "<li><a href=\"assets/".$name.".jpg\" target=\"_blank\"><img src=\"assets/".$name."_thumb.jpg\"></a></li>";
      }

      $names=array(
        "inter_lab_interviews",
        "inter_lab_model_over",
        "inter_lab_model_inside",
        "inter_lab_prom",
        "inter_lab_section",
        "inter_lab_site",
        "inter_lab_sketches",
        "inter_lab_axo");

      foreach ($names as $name) {
        addImage($name);
      }

      ?>
      <li style="width:100%; height: 200px;"><h2>Mauer Park</h2></li>
      <?php

      $names=array(
        "mauerpark_model",
        "mauerpark_dachbume",
        "mauerpark_kletterpflanzen",
        "mauerpark_kompensierungsm",
        "mauerpark_tiere",
        "mauerpark_sketch_1",
        "mauerpark_sketch_2",
        "mauerpark_sketch_3",
        "mauerpark_sketch_4");

      foreach ($names as $name) {
        addImage($name);
      }

       ?>
    </ul>
  </div>
  <script src="js/masonry.pkgd.min.js"></script>
  <script src="js/imagesloaded.js"></script>
  <script src="js/classie.js"></script>
  <script src="js/AnimOnScroll.js"></script>
  <script>
    new AnimOnScroll( document.getElementById( 'grid' ), {
      minDuration : 0.4,
      maxDuration : 0.7,
      viewportFactor : 0.2
    } );
  </script>
</body>
</html>
