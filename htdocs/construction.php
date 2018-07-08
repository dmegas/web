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
    <div class="codrops-top clearfix">
      <span>: Page under construction</span>
    </div>
    <header>
      <h1>Dimitra Megas <span>Portfolio</span></h1>
      <nav class="codrops-demos">
        <a class="current-demo" href="#">Architecture</a>
        <a href="#">Drawings</a>
        <a href="#">Paintings</a>
      </nav>
    </header>
    <ul class="grid effect-6" id="grid">
      <?php

      $names=arracy("assets/mauerpark_sketch_1.jpg");
      foreach ($names as $name) {
        echo "<li><a href="$name" target="_blank"><img src="$name"></a></li>"
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
