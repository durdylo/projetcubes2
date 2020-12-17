<?php

$head = "<!doctype html>
    <html lang='en'>
    
    <head>
        <!-- Required meta tags -->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    
        <!-- Bootstrap CSS -->
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1' crossorigin='anonymous'>
    
        <title>Hello, world!</title>
    </head>";

function buildNav($get)
{
    $nav = "
<nav class='navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light'>
  <div class='container'>
    <a class='navbar-brand' href='index.php'>Navbar</a>
    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarNav'>
      <ul class='navbar-nav'>
        <li class='nav-item'>
          <a class='nav-link " . ($get == '' ? 'active' : '') . "' aria-current='page' href='index.php'>Home</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link " . ($get == 'graphique' ? 'active' : '') . "' href='index.php?p=graphique'>Graphique</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<body>
<main class='container'> ";
    return $nav;
}


$body = "
<h1>Accueil</h1>
";
$bodyGraph = "<body> 
<h1>Page du graphique</h1>";
$footer = "<footer></footer>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js' integrity='sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW' crossorigin='anonymous'></script>
    </main>
    </body>
    
    </html>";
