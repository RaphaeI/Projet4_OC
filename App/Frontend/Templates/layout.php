<!DOCTYPE html>
<html>
  <head>
    <title>Mon super site</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src ="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=26ywukqer0d0dfv9zm2c0nuvp0szg6glxts0nynvfxm28aui"></script>
    <script>tinymce.init(
      {selector:'textarea', content_css:'css/style.css', width: "100%", backgroundcolor: "white"
      })</script>
    <script src='https://www.google.com/recaptcha/api.js'></script> 
  </head>
  
  <body>
      <?php include('header.php')?>
      <div id="brand">
        <h1><span class="topBrand">Billet simple pour</span>l'Alaska <span class="botBrand">Jean Forteroche</span></h1>
        
      </div>
    	<main class="container">
          <?= $content ?>
    	</main>
  </body>
  <script type="text/javascript" src="/js/app.js"></script>
</html>