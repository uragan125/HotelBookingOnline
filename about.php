<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tidal Lodge - О НАС</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require('links.php');?>
  <style>
    .box{
      border-top-color: var(--teal) !important;
    }
  </style>
</head>
<body class="bg-light">
<!--header-->

<?php require('header.php');?>
<!--header-->
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">О НАС</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
    В Tidal Lodge мы предлагаем спокойный отдых на берегу с индивидуальным обслуживанием, элегантными номерами и отличными удобствами. Наша команда стремится создавать незабываемые моменты, приглашая вас расслабиться, восстановить силы и насладиться комфортом побережья в его лучшем виде.
    </p>
  </div>
  
  <div class="container my-5">
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 mb-4">
            <img src="images/about/about.jpg" class="img-fluid" alt="Tidal Lodge">
        </div>
        <div class="col-lg-6 col-md-6 mb-4">
            <h3 class="mb-3">Миссия</h3>
            <p>
                Наша миссия в Tidal Lodge - предоставить гостям приют, где они могут насладиться гармонией уюта, гостеприимства и природной красоты. Мы стремимся создавать незабываемые и значимые моменты через исключительное обслуживание, устойчивые практики и приверженность преодолению ожиданий.
            </p>
            <h3 class="mb-3">Видение</h3>
            <p>
                Стать ведущим направлением в Велига, предоставляя непревзойденный опыт, который гармонично сочетает роскошь, комфорт и природную красоту побережья. Мы стремимся создавать долговечные воспоминания для наших гостей через исключительное обслуживание, устойчивые практики и дружелюбную атмосферу, обеспечивая, чтобы каждый визит в Tidal Lodge был не просто посещением, а ценным опытом.
            </p>
        </div>
    </div>
</div>
  

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/hotel.svg" width="70px">
          <h4 class="mt-3">100+ НОМЕРОВ</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/customers.svg" width="70px">
          <h4 class="mt-3">200+ КЛИЕНТОВ</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/rating.svg" width="70px">
          <h4 class="mt-3">150+ ОТЗЫВОВ</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/staff.svg" width="70px">
          <h4 class="mt-3">200+ СОТРУДНИКОВ</h4>
        </div>
      </div>
    </div>
  </div>

  <h3 class="my-5 fw-bold h-font text-center">КОМАНДА УПРАВЛЕНИЯ</h3>
  <div class="container mt-5">
    <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
          <img src="images/team/1.jpg" width="300px">
          <h5 class="mt-3 text-center">Менеджер</h5>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
          <img src="images/team/2.jpg" width="300px">
          <h5 class="mt-3 text-center">Финансовый менеджер</h5>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
      <img src="images/team/3.JPEG" width="300px" height="200px">
      <h5 class="mt-3 text-center">Техническая команда</h5>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
      <img src="images/team/4.jpg" width="300px">
      <h5 class="mt-3 text-center">HR отдел</h5>
      </div>
    </div>
  </div>


  <div class="container px-4">
    
    </div>
  </div>
<!--Footer-->
<?php require('footer.php');?>
<!--Footer-->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  

  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>


</body>
</html>
