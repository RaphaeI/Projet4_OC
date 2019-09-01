<!DOCTYPE html>
<html>
  <head>
    <title>Mon super site</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
      <script src="https://cdn.tiny.cloud/1/26ywukqer0d0dfv9zm2c0nuvp0szg6glxts0nynvfxm28aui/tinymce/5/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
  </head>
  
  <body>
      <?php include('header.php')?>
      <div id="brand">
        <h1>Le blog de l'écrivain</h1>
      </div>
    	<main class="container">
          <?= $content ?>
    	</main>
      <?php include('footer.php')?>
  </body>
</html>