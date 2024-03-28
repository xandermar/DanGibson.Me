<?php
   // Directory containing your PHP function files
   $directory = 'functions/';
   
   // Get all PHP files in the directory
   $files = glob($directory . '*.php');
   
   // Include each PHP file
   foreach ($files as $file) {
       include_once $file;
   }
   
   ?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Dan Gibson | Drupal Developer</title>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!--favicon--> 
      <link rel="apple-touch-icon" sizes="180x180" href="https://www.xandermar.com/themes/custom/xandermar_bootstrap/favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="https://www.xandermar.com/themes/custom/xandermar_bootstrap/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="https://www.xandermar.com/themes/custom/xandermar_bootstrap/favicon/favicon-16x16.png">
      <link rel="manifest" href="https://www.xandermar.com/themes/custom/xandermar_bootstrap/favicon/site.webmanifest">
      <link rel="mask-icon" href="https://www.xandermar.com/themes/custom/xandermar_bootstrap/favicon/safari-pinned-tab.svg" color="#5bbad5">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="theme-color" content="#ffffff">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
      <link href="style.css" rel="stylesheet">
      <script src="scripts.js"></script>
   </head>
   <body>
      <div class="container text-center mt-5">
         <div class="row mb-5">
            <div class="col">
               <h1>:: Dan Gibson ::</h1>
               <h2>Drupal Developer</h2>
            </div>
            <?php print msg($_GET['m']); ?>
         </div>
         <div class="row mb-5">
            <div class="col-sm-3 mb-3"><?php print modal('Request Resume',false); ?></div>
            <div class="col-sm-3 mb-3"><?php print modal('Phone Appointment',true); ?></div>
            <div class="col-sm-3 mb-3"><?php print modal('Articles/Case Studies',true); ?></div>
            <div class="col-sm-3 mb-3"><?php print modal('Email Me',false); ?></div>
         </div>
      </div>
      <div class="container text-center">Find me: 
         <a href="https://www.facebook.com/dgibson74" target="_blank">Facebook</a>
         <a href="https://twitter.com/DanGibsonMe" target="_blank">X</a>
         <a href="https://www.linkedin.com/in/dangibsonme/" target="_blank">LinkedIn</a>
      </div>
      <hr>
      <footer class="text-center">
         <!-- Footer content -->
         <div>&copy;2024 DanGibson.Me <br> All rights reserved</div>
      </footer>
      <script> document.getElementById('reason').addEventListener('change', function() { var otherReasonField = document.getElementById('otherReasonField'); var otherReasonTextarea = document.getElementById('other_reason'); if (this.value === 'other') { otherReasonField.style.display = 'block'; otherReasonTextarea.setAttribute('required', 'required'); } else { otherReasonField.style.display = 'none'; otherReasonTextarea.removeAttribute('required'); } });</script><script>$(document).ready(function(){ var url = "articles.php"; $.ajax({ type: "GET", url: url, dataType: "xml",success: function(xml) {$('#articles-list').html('<li></li>'); $(xml).find('item').each(function(){ var title = $(this).find('title').text(); var path = $(this).find('path').text(); var created = $(this).find('created').text(); $('#articles-list').append('<li><a href="' + path + '">' + title + '</a> (' + created + ')</li>'); }); }, error: function(xhr, status, error) { console.error('Error:', status, error); } });});</script> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
   </body>
</html>