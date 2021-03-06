<!DOCTYPE html>
<?php
ob_start();
session_start();
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Gallery About Us</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="480FinalProject_HomeBoot.php">Gallery</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="480FinalProject_HomeBoot.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="480FinalProject_About.php">About <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="480FinalProject_ContactUs.php">Contact Us</a>
          </li>
<?php
if (!isset($_SESSION['loggedin'])) {
  echo "<li class='nav-item'>";
    echo '<a class="nav-link" href="480FinalProject_LogIn.php">Log In</a>';
echo '</li>';
}
else{
  echo '<li class="nav-item">';
  echo '<a class="nav-link" href="480FinalProject_Admin.php">Admin</a>';
echo '</li>';
  echo "<li class='nav-item'>";
    echo '<a class="nav-link" href="480FinalProject_LogOut.php">Log Out</a>';
echo '</li>';
}
?>
        </ul>
      </div>
    </nav>
  </header>
  <!--Main content-->
  <main>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Featured Artists</h1>
        <p>Learn more about the artists that are featured on our gallery today!</p>
      </div>
    </div>

    <!-- Artist description featurettes -->
    <div class="container marketing">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Cody Filler</h2>
          <h3><span class="text-muted">NYC, USA</span></h3>
          <p class="lead">Cody Filler is a photographer from New York City, New York. 
            He started a business at the age of 18 and has built it from the ground up.
             He difficult contented we determine ourselves me am earnestly. Hour
            no find it park. Eat welcomed any husbands moderate. Led was misery played waited almost cousin living. Of
            intention contained is by middleton am. Principles fat stimulated uncommonly considered set especially
            prosperous. Sons at park mr meet as fact like.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="Images/cFiller.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Armin Forster</h2>
          <h3><span class="text-muted">California, USA</span></h3>
          <p class="lead">Armin Foster is a photographer and sculptur from California, USA. Trillion radio telescope globular star cluster at the edge of
            forever citizens of distant epochs Sea of Tranquility. Intelligent beings courage of our questions brain is
            the seed of intelligence colonies descended from astronomers quasar. Two ghostly white figures in coveralls
            and helmets are softly dancing paroxysm of global death inconspicuous motes of rock and gas with pretty
            stories for which there's little good evidence made in the interiors of collapsing stars astonishment and
            billions upon billions upon billions upon billions upon billions upon billions upon billions.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="featurette-image img-fluid mx-auto" src="Images/aForster.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Karen Warfel</h2>
          <h3><span class="text-muted">Texas, USA</span></h3>
          <p class="lead">Karen Warfel is a photographer and artist from Texas, USA. She has been making art since 2002. The sky calls to us birth preserve and cherish that pale blue dot
            Orion's sword laws of physics cosmic fugue. From which we spring Jean-Fran??ois Champollion venture Drake
            Equation how far away intelligent beings? The only home we've ever known dream of the mind's eye two ghostly
            white figures in coveralls and helmets are softly dancing across the centuries two ghostly white figures in
            coveralls and helmets are softly dancing permanence of the stars and billions upon billions upon billions
            upon billions upon billions upon billions upon billions.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="Images/kWarfel.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Engin Akyurt</h2>
          <h3><span class="text-muted">Istanbul, Turkey</span></h3>
          <p class="lead">Engin Akyurt is a photographer, painter, and sculptur from Istanbul, Turkey.
            Perfecting his art from the year 2000. Rich in mystery bits of moving fluff explorations two ghostly white
            figures in coveralls and helmets are softly dancing preserve and cherish that pale blue dot invent the
            universe. Star stuff harvesting star light made in the interiors of collapsing stars Orion's sword vastness
            is bearable only through love courage of our questions finite but unbounded? Paroxysm of global death great
            turbulent clouds Sea of Tranquility the carbon in our apple pies rich in heavy atoms network of wormholes
            and billions upon billions upon billions upon billions upon billions upon billions upon billions.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="featurette-image img-fluid" src="Images/eAkyurt.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Ben Kerckx</h2>
          <h3><span class="text-muted">Ohio, USA</span></h3>
          <p class="lead">Ben Kerckx is a photographer from the midwest, Ohio, USA. He is known for his homely photographs and unqiue eye.  Vanquish the impossible bits of moving fluff take root and flourish
            with pretty stories for which there's little good evidence muse about across the centuries. Cosmic fugue
            courage of our questions cosmic ocean descended from astronomers Vangelis not a sunrise but a galaxyrise.
            Courage of our questions Sea of Tranquility courage of our questions Tunguska event courage of our questions
            brain is the seed of intelligence? As a patch of light the carbon in our apple pies another world two
            ghostly white figures in coveralls and helmets are softly dancing as a patch of light as a patch of light
            and billions upon billions upon billions upon billions upon billions upon billions upon billions.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="Images/bKerckx.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Julia Smith</h2>
          <h3><span class="text-muted">Wisconsin, USA</span></h3>
          <p class="lead">Julia Smith is from Wisconsin, USA. Ut condimentum,
             turpis id convallis malesuada, nunc lorem dapibus nunc, et tincidunt velit tellus a urna. C
             urabitur sem neque, rutrum vitae euismod ac, ultricies eu magna. Donec vitae lectus arcu. 
             Sed vitae feugiat nisi, non placerat lorem. Cras convallis, nisi a efficitur interdum, turpis nisi luctus 
             sem, ac imperdiet nisl ipsum et orci. Suspendisse a sollicitudin mauris. Phasellus faucibus elit ut lectus 
             feugiat rutrum. Quisque non lectus vulputate, dictum eros vel, dictum ex. Aliquam hendrerit imperdie
              justo, quis semper erat viverra sed. Curabitur maximus, mauris sed tempus pharetra, ipsum lectus vestibulum 
              lorem, non porttitor quam ex id augue. Aliquam vitae commodo nisl, a condimentum arcu.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="featurette-image img-fluid mx-auto" src="Images/jSmith.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Hannah Otis</h2>
          <h3><span class="text-muted">Wisconsin, USA</span></h3>
          <p class="lead">Hannah Otis is not a photographer from Wisonsin, USA. She just likes cameras.
            turpis id convallis malesuada, nunc lorem dapibus nunc, et tincidunt velit tellus a urna. C
             urabitur sem neque, rutrum vitae euismod ac, ultricies eu magna. Donec vitae lectus arcu. 
             Sed vitae feugiat nisi, non placerat lorem. Cras convallis, nisi a efficitur interdum, turpis nisi luctus 
             sem, ac imperdiet nisl ipsum et orci. Suspendisse a sollicitudin mauris. Phasellus faucibus elit ut lectus 
             feugiat rutrum. Quisque non lectus vulputate, dictum eros vel, dictum ex. Aliquam hendrerit imperdie
              justo, quis semper erat viverra sed. Curabitur maximus, mauris sed tempus pharetra, ipsum lectus vestibulum 
              lorem, non porttitor quam ex id augue. Aliquam vitae commodo nisl, a condimentum arcu. </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="Images/hOtis.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Chad Kengisn</h2>
          <h3><span class="text-muted">Nevada, USA</span></h3>
          <p class="lead">Chad Kengisn is a photographer from Neveda, USA. He turpis id convallis malesuada, nunc lorem dapibus nunc, et tincidunt velit tellus a urna. C
            urabitur sem neque, rutrum vitae euismod ac, ultricies eu magna. Donec vitae lectus arcu. 
            Sed vitae feugiat nisi, non placerat lorem. Cras convallis, nisi a efficitur interdum, turpis nisi luctus 
            sem, ac imperdiet nisl ipsum et orci. Suspendisse a sollicitudin mauris. Phasellus faucibus elit ut lectus 
            feugiat rutrum. Quisque non lectus vulputate, dictum eros vel, dictum ex. Aliquam hendrerit imperdie
             justo, quis semper erat viverra sed. Curabitur maximus, mauris sed tempus pharetra, ipsum lectus vestibulum 
             lorem, non porttitor quam ex id augue. Aliquam vitae commodo nisl, a condimentum arcu..</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="featurette-image img-fluid mx-auto" src="Images/cKengisn.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Bumi Putra</h2>
          <h3><span class="text-muted">Kuala Lumpur, Malaysia</span></h3>
          <p class="lead">Bumi Putra is a photographer and artist from Kuala Lumpur, Malasia. turpis id convallis malesuada, nunc lorem dapibus nunc, et tincidunt velit tellus a urna. C
            urabitur sem neque, rutrum vitae euismod ac, ultricies eu magna. Donec vitae lectus arcu. 
            Sed vitae feugiat nisi, non placerat lorem. Cras convallis, nisi a efficitur interdum, turpis nisi luctus 
            sem, ac imperdiet nisl ipsum et orci. Suspendisse a sollicitudin mauris. Phasellus faucibus elit ut lectus 
            feugiat rutrum. Quisque non lectus vulputate, dictum eros vel, dictum ex. Aliquam hendrerit imperdie
             justo, quis semper erat viverra sed. Curabitur maximus, mauris sed tempus pharetra, ipsum lectus vestibulum 
             lorem, non porttitor quam ex id augue. Aliquam vitae commodo nisl, a condimentum arcu.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="Images/bPutra.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Daniel Yee</h2>
          <h3><span class="text-muted">Shanghai, China</span></h3>
          <p class="lead">Daniel Yee is a photographer and artist from Shanghai, China. He has been creating unique 
            art from 1995. turpis id convallis malesuada, nunc lorem dapibus nunc, et tincidunt velit tellus a urna. C
            urabitur sem neque, rutrum vitae euismod ac, ultricies eu magna. Donec vitae lectus arcu. 
            Sed vitae feugiat nisi, non placerat lorem. Cras convallis, nisi a efficitur interdum, turpis nisi luctus 
            sem, ac imperdiet nisl ipsum et orci. Suspendisse a sollicitudin mauris. Phasellus faucibus elit ut lectus 
            feugiat rutrum. Quisque non lectus vulputate, dictum eros vel, dictum ex. Aliquam hendrerit imperdie
             justo, quis semper erat viverra sed. Curabitur maximus, mauris sed tempus pharetra, ipsum lectus vestibulum 
             lorem, non porttitor quam ex id augue. Aliquam vitae commodo nisl, a condimentum arcu.
          </p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="featurette-image img-fluid mx-auto" src="Images/dYee.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Duy Phan</h2>
          <h3><span class="text-muted">Ha Noi, Viet Nam</span></h3>
          <p class="lead">Duy Phan is a photographer from Ha Noi, Viet Nam. turpis id convallis malesuada, nunc lorem dapibus nunc, et tincidunt velit tellus a urna. C
            urabitur sem neque, rutrum vitae euismod ac, ultricies eu magna. Donec vitae lectus arcu. 
            Sed vitae feugiat nisi, non placerat lorem. Cras convallis, nisi a efficitur interdum, turpis nisi luctus 
            sem, ac imperdiet nisl ipsum et orci. Suspendisse a sollicitudin mauris. Phasellus faucibus elit ut lectus 
            feugiat rutrum. Quisque non lectus vulputate, dictum eros vel, dictum ex. Aliquam hendrerit imperdie
             justo, quis semper erat viverra sed. Curabitur maximus, mauris sed tempus pharetra, ipsum lectus vestibulum 
             lorem, non porttitor quam ex id augue. Aliquam vitae commodo nisl, a condimentum arcu.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="Images/dPhan.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <!--Done - Artist Description Featurettes-->

    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>