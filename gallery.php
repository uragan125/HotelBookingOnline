<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking Online - ГАЛЕРЕЯ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <?php require('links.php');?>
  <style>

    html {
            scroll-behavior: smooth; 
        }
     
        .gallery-container {
            max-height: 80vh; /* Set a maximum height */
            overflow-y: auto; 
        }
  </style>
</head>
<!--header-->
<body class="bg-light">
<?php require('header.php');?>
<!--header-->

<div class=" lg-12 md-6 my-5 px-4  ">
    <h2 class="fw-bold h-font text-center">ГАЛЕРЕЯ</h2>
    <div class="h-line bg-dark"></div>
   
<!--nav Bar2-->

    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" >
    
        <div class="container-fluid justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-dark me-3" href="#hotel-view">Вид отеля</a></li>
                <li class="nav-item"><a class="nav-link text-dark me-3" href="#guest-rooms">Гостевые номера</a></li>
                <li class="nav-item"><a class="nav-link text-dark me-3" href="#suite">Люксы и улучшенные номера</a></li>
                <li class="nav-item"><a class="nav-link text-dark me-3" href="#presidential-suite">Президентский люкс</a></li>
                <li class="nav-item"><a class="nav-link text-dark me-3" href="#fitness">Рекреации и фитнес</a></li>
                <li class="nav-item"><a class="nav-link text-dark me-3" href="#activities">Активности</a></li>
                <li class="nav-item"><a class="nav-link text-dark me-3" href="#events">Мероприятия</a></li>
                <li class="nav-item"><a class="nav-link text-dark me-3" href="#nearby-attraction">Достопримечательности поблизости</a></li>
            </ul>
        </div>
        
    </nav>

  </div>
   

<div class="container my-5 px-4  gallery-container">
    <div id="hotel-view" class="row mb-5">
        <h6 class="text-center">Вид отеля</h6>
        <hr>
        <div class="col-md-4 mb-3"><img src="images/gallery/1.WEBP" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/4.4.WEBP" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/4.5.avif" class="img-fluid rounded-start"></div>
    </div>
    <div id="guest-rooms" class="row mb-5">
        <h6 class="text-center">Гостевые номера</h6>
        <hr>
        <div class="col-md-4 mb-3"><img src="images/gallery/2.1.avif" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/2.2.WEBP" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/2.3.avif" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/2.4.avif" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/2.5.avif" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/2.6.avif" class="img-fluid rounded-start"></div>
    </div>
    <div id="suite" class="row mb-5">
        <h6 class="text-center">Люксы и улучшенные номера</h6>
        <hr>
        <div class="col-md-4 mb-3"><img src="images/gallery/3.1.WEBP" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/3.3.WEBP" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/3.2.avif" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/3.4.avif" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/3.6.avif" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/3.5.jpeg" class="img-fluid rounded-start"></div>
    </div>
    <div id="presidential-suite" class="row mb-5">
        <h6 class="text-center">Президентский люкс</h6>
        <hr>
        <div class="col-md-4 mb-3"><img src="images/gallery/7.1.jpg" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/7.4.png" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/7.3.png" class="img-fluid rounded-start"></div>        
        <div class="col-md-4 mb-3"><img src="images/gallery/7.2.jpg" class="img-fluid rounded-start"></div>
    </div>
    <div id="fitness" class="row mb-5">
        <h6 class="text-center">Рекреации и фитнес</h6>
        <hr>
        <div class="col-md-4 mb-3"><img src="images/gallery/5.1.WEBP" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/5.2.WEBP" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/5.4.avif" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/5.3.WEBP" class="img-fluid rounded-start"></div>
    </div>
    <div id="activities" class="row mb-5">
        <h6 class="text-center">Активности</h6>
        <hr>
        <div class="col-md-4 mb-3"><img src="images/gallery/1.WEBP" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/4.4.WEBP" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/4.5.avif" class="img-fluid rounded-start"></div>
    </div>
    <div id="events" class="row mb-5">
        <h6 class="text-center">Мероприятия</h6>
        <hr>
        <div class="col-md-4 mb-3"><img src="images/gallery/6.2.WEBP" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/6.3.WEBP" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/6.4.avif" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/6.1.avif" class="img-fluid rounded-start"></div>
    </div>
    <div id="nearby-attraction" class="row mb-5">
        <h6 class="text-center">Достопримечательности поблизости</h6>
        <hr>
        
        <div class="col-md-4 mb-3"><img src="images/gallery/8.8.jpg" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/8.3.jpg" class="img-fluid rounded-start"></div>         
        <div class="col-md-4 mb-3"><img src="images/gallery/8.9.avif" class="img-fluid rounded-start"></div>
        <div class="col-md-4 mb-3"><img src="images/gallery/8.4.jpg" class="img-fluid rounded-start"></div> 
        
        <div class="col-md-4 mb-3"><img src="images/gallery/8.2.jpg" class="img-fluid rounded-start"></div>     
    </div>
</div>
 
<!--Footer-->
<?php require('footer.php');?>
<!--Footer-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
