<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portfolio Michiel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="main.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="margin-bottom:0px;">
  <div class="container">
    <a class="navbar-brand" href="/index.php">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact.php">Contact</a>
        </li>    
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-sm-4">
            <img src="/img/document.jpeg" alt="Document" class="d-block" style=" width:100%">
          </div>
          <div class="col">
            <h1 style="overflow: hidden; white-space:nowrap;display:block;text-overflow: ellipsis;max-width:50%;">Dit is een plaatjeeeeeeeeeeeeeee eeeeeeeeeeeeeeee eeeeeeeeeee eeeeeeeeee van:</h1>
            <p>Een papier met 2 pennen.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-sm-4">
            <img src="/img/files.jpeg" alt="Files" class="d-block" style="width:100%">
          </div>
          <div class="col">
            <h1>Dit is een plaatje van:</h1>
            <p>Een paar mappen boven op elkaar.</p>
            <p>Een paar mappen boven op elkaar.</p>
            <p>Een paar mappen boven op elkaar.</p>
            <p>Een paar mappen boven op elkaar.</p>
            <p>Een paar mappen boven op elkaar.</p>
            <p>Een paar mappen boven op elkaar.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-sm-4">
            <img src="/img/pen.jpeg" alt="Pen and paper" class="d-block" style="width:100%">
          </div>
          <div class="col">
            <h1>Dit is een plaatje van:</h1>
            <p>Een pen boven op een kladblok of zo.</p>
          </div>
        </div>
      </div>
    </div>
                                                
  
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</div>






<div class="container mt-3">
  <h3>Collapsible Navbar</h3>
  <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).</p>
  <p>Only when the button is clicked, the navigation bar will be displayed.</p>
  <p>Tip: You can also remove the .navbar-expand-md class to ALWAYS hide navbar links and display the toggler button.</p>
</div>

</body>
</html>
