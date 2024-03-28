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
      <div class="container text-center">
         <a href="https://www.facebook.com/dgibson74" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
               <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
            </svg>
         </a>
         <a href="https://twitter.com/DanGibsonMe" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
               <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
            </svg>
         </a>
         <a href="https://www.linkedin.com/in/dangibsonme/" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
               <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
            </svg>
         </a>
      </div>
      <hr>
      <footer class="text-center">
         <!-- Footer content -->
         <div>&copy;2024 DanGibson.Me <br> All rights reserved</div>
      </footer>
      <script> document.getElementById('reason').addEventListener('change', function() { var otherReasonField = document.getElementById('otherReasonField'); var otherReasonTextarea = document.getElementById('other_reason'); if (this.value === 'other') { otherReasonField.style.display = 'block'; otherReasonTextarea.setAttribute('required', 'required'); } else { otherReasonField.style.display = 'none'; otherReasonTextarea.removeAttribute('required'); } });</script><script>$(document).ready(function(){ var url = "articles.php"; $.ajax({ type: "GET", url: url, dataType: "xml",success: function(xml) {$('#articles-list').html('<li></li>'); $(xml).find('item').each(function(){ var title = $(this).find('title').text(); var path = $(this).find('path').text(); var created = $(this).find('created').text(); $('#articles-list').append('<li><a href="' + path + '">' + title + '</a> (' + created + ')</li>'); }); }, error: function(xhr, status, error) { console.error('Error:', status, error); } });});</script> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
   </body>
</html>