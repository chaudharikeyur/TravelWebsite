<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">MakeMyVisit</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#service">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
     
      
    </ul>
    <!--
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
-->
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/i1.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="images/i2.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="images/i3.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<section class="my-5" >
    <div class="py-5">
        <h3 class="text-center">ABOUT US</h3>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="images/i4.jpg" class="img-fluid ab" alt="" srcset="">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h4 class="py-3">- Welcome to the MakeMyVisit -</h4>
          <p class="py-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis ipsam iusto qui sequi laudantium architecto! Voluptatum amet aperiam fugiat perspiciatis tenetur molestiae tempora ut provident dolores praesentium mollitia impedit similique accusamus cum, obcaecati veniam voluptate qui autem labore rerum ab.</p>
          <a class="btn btn-sm btn-success" href="about.php">Check More</a>
        </div>
    </div>
    </div>

</section>

<section class="my-5" id="service">
    <div class="py-5">
        <h3 class="text-center">OUR SERVICES</h3>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
  <img class="card-img-top" src="images/i5.webp" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">RECIDIENCY</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="card" >
  <img class="card-img-top" src="images/i6.webp" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">DAILY MEALS</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="card" >
  <img class="card-img-top" src="images/i7.webp" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">TRAVEL GUIDE</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>
           
        </div>
    </div>
</section>

<section class="my-5" >
    <div class="py-5">
        <h3 class="text-center">OUR GALLERY</h3>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
<img src="images/i8.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/i9.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/i10.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/i10.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/i8.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/i9.jpg" class="img-fluid pb-3">
</div>
</div>
</div>
</section>     

<section class="my-5" id="contact" >
    <div class="py-5">
        <h3 class="text-center">CONTACT US</h3>
    </div>
    <div class="w-50 m-auto py-2 my-2">
    <form class="" action="aboutinfo.php" method="post">
        <div class="form-group py-2">
    <label for="name">Name:</label>
  <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
  <label for="email">Email address:</label>
  <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
  <label for="pwd">Mobile Number:</label>
  <input type="text" class="form-control" placeholder="Enter mobile number" id="phone" name="phone">
  <button type="submit" class="btn btn-primary my-3 py-2">Submit</button>
  </div>
</form>
            </div>

</section>

<footer class="text-center bg-dark">
    <h6 style="color:white">@travelbookfoeme@1999.com</h6>
    
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>