<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking Online - Главная</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="icon" type="image/x-icon" href="fav.JPEG">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <style>
  

  </style>
</head>
<body class="bg-light">

<!-- Header -->
<?php require('header.php');?>

<!-- Main Content -->
<div class="container-fluid px-lg-4 mt-4">
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/7.PNG" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/8.PNG" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/9.PNG" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/10.PNG" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/11.PNG" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/6.PNG" class="w-100 d-block">
      </div>
    </div>
  </div>
</div>
<!-- Наши номера -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">НАШИ НОМЕРА</h2>
<div class="container">
    <div class="row">
        <!-- Номер 1 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="room-card card border-0 shadow">
                <img src="images/rooms/1.WEBP" class="img-fluid rounded-top" style="height: 200px; object-fit: cover;">
                <div class="card-body" style="min-height: 200px;">
                    <h5 class="card-title">Гостевой номер</h5>
                    <p class="card-text">Особенности: 1 большая кровать | Мраморная ванная комната | Открытая зона</p>
                    <p class="card-text">Удобства: Высокоскоростной Wi-Fi | Электрическая розетка | Кофеварка/чайник | Мини-бар</p>
                    <p class="card-text">Взрослые: 2 | Дети: 1</p>
                    <h6 class="mb-3">10225р за ночь</h6>
                    <a href="booking.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-3" style="background-color: #4ee6bc;">Забронировать</a>
                </div>
            </div>
        </div>

        <!-- Номер 6 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="room-card card border-0 shadow">
                <img src="images/rooms/11.png" class="img-fluid rounded-top" style="height: 200px; object-fit: cover;">
                <div class="card-body" style="min-height: 200px;">
                    <h5 class="card-title">Превосходный вид на океан</h5>
                    <p class="card-text">Особенности: 2 маленькие кровати | Отдельная ванна и душ | Смежные номера</p>
                    <p class="card-text">Удобства: Высокоскоростной Wi-Fi | Электрическая розетка | Кофеварка/чайник | Мини-бар</p>
                    <p class="card-text">Взрослые: 2 | Дети: 2</p>
                    <h6 class="mb-3">15575р за ночь</h6>
                    <a href="booking.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-3" style="background-color: #4ee6bc;">Забронировать</a>
                </div>
            </div>
        </div>

        <!-- Номер 7 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="room-card card border-0 shadow">
                <img src="images/rooms/3.avif" class="img-fluid rounded-top" style="height: 200px; object-fit: cover;">
                <div class="card-body" style="min-height: 200px;">
                    <h5 class="card-title">Президентский люкс</h5>
                    <p class="card-text">Особенности: 1 большая кровать | Отдельная ванна и душ | Смежный номер</p>
                    <p class="card-text">Удобства: Высокоскоростной Wi-Fi | Электрическая розетка | Кофеварка/чайник | Мини-бар</p>
                    <p class="card-text">Взрослые: 4 | Дети: 2</p>
                    <h6 class="mb-3">20975р за ночь</h6>
                    <a href="booking.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-3" style="background-color: #4ee6bc;">Забронировать</a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
          <a href="rooms.php" class="btn btn-sm text-white border-0" style="background-color: black;">Подробнее >></a>
    </div>
</div>
<!-- Удобства -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">УДОБСТВА</h2>
<div class="container-fluid px-lg-4 mt-4">
    
    <div class="row g-4">
        <!-- Удобство 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
            <i class="bi bi-router-fill" style="font-size: 4rem;"></i> 
                <h5 class="mt-3">Бесплатный Wi-Fi</h5>
                <p>Будьте всегда на связи с миром благодаря нашему высокоскоростному бесплатному Wi-Fi, доступному на всей территории отеля.</p>
            </div>
        </div>

        <!-- Удобство 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
              <i class="bi bi-cup-hot-fill" style="font-size: 4rem;"></i>
                <h5 class="mt-3">Ресторан и бар</h5>
                <p>Откройте для себя изысканные блюда местной и мировой кухни в уютной атмосфере нашего ресторана и бара.</p>
            </div>
        </div>

        <!-- Удобство 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
              <i class="bi bi-water" style="font-size: 4rem;"></i>
                <h5 class="mt-3">Бассейн</h5>
                <p>Погрузитесь в атмосферу отдыха и комфорта в нашем просторном открытом бассейне с возможностью обслуживания прямо у воды.</p>
            </div>
        </div>
        <div class="text-center">
          <a href="facilities.php" class="btn btn-sm text-white border-0" style="background-color: black;">Подробнее >></a>
    </div>
  </div>
</div>  

<!-- Связаться с нами -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">СВЯЖИТЕСЬ С НАМИ</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
    <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89895.6504762946!2d73.25208421215184!3d54.98934222631078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43aaf0b5b1f3b6e3%3A0x5cb6a1c2bcd1a2b2!2z0J7RgdGC0YDQvtC90YHQuiDQk9C10L3RgtGA0L7QtNGB0YzQutC-0LPQviwg0KDQtdGB0L_RgNC-0LLQsCwg0LrRgNCw0Lk!5e0!3m2!1sru!2sru!4v1722861867885!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-lg-4 col-md-4 p-4 bg-white rounded">
      <h5 class="mb-3">Адрес</h5>
      <p>Россия, Город, Улица</p>
      <h5 class="mt-4 mb-3">Телефон</h5>
      <p>+78005553535</p>
      <h5 class="mt-4 mb-3">Электронная почта</h5>
      <p>info@gmail.com</p>
    </div>
  </div>
</div>

<!-- Footer -->
<?php require('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0z5GoyzX9oU4EwP3RvmYUP4XI5T8MkPA72hQrd1OTYIm4+4G" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper('.swiper-container', {
    loop: true,
    autoplay: {
      delay: 3000,
    },
  });
</script>
</body>
</html>
