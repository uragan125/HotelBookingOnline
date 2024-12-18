<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking Online - УСЛУГИ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <?php require('links.php');?>
  <style>
    .pop:hover{
      border-top-color: var(--teal) !important;
      transform: scale(1.03);
      transition: all 0.3s;
    }
  </style>
</head>
<body class="bg-light">
<!--header-->
<?php require('header.php');?>
<!--header-->

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">УСЛУГИ</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
    Hotel Booking Online предлагает идеальное место для спокойного отдыха у моря с роскошными удобствами. Гостям предоставляются элегантно оформленные номера, ресторан с местной кухней и спа-салон для восстановления сил. Наслаждайтесь отдыхом у открытого бассейна, прямым доступом к пляжу и возможностью исследовать местные достопримечательности с помощью нашего внимательного консьержа. Для небольших мероприятий и встреч Hotel Booking Online предлагает универсальные пространства и индивидуальные услуги планирования. Сочетая отдых и приключения, Hotel Booking Online — это идеальный выбор для незабываемого побережного отдыха.
    </p>
  </div>
  <div class="container my-5">
    
    <div class="row g-4">
        <!-- Карточка услуги 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
            <i class="bi bi-router-fill" style="font-size: 4rem;"></i> 
                <h5 class="mt-3">Бесплатный Wi-Fi</h5>
                <p>Будьте всегда на связи с миром благодаря нашему высокоскоростному бесплатному Wi-Fi, доступному на всей территории отеля.</p>
            </div>
        </div>

        <!-- Карточка услуги 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
              <i class="bi bi-cup-hot-fill" style="font-size: 4rem;"></i>
                <h5 class="mt-3">Ресторан и Бар</h5>
                <p>Откройте для себя изысканные блюда местной и мировой кухни в уютной атмосфере нашего ресторана и бара.</p>
            </div>
        </div>

        <!-- Карточка услуги 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
              <i class="bi bi-water" style="font-size: 4rem;"></i>
                <h5 class="mt-3">Бассейн</h5>
                <p>Погрузитесь в атмосферу отдыха и комфорта в нашем просторном открытом бассейне с возможностью обслуживания прямо у воды.</p>
            </div>
        </div>

        <!-- Карточка услуги 4 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
              <i class="bi bi-heart-pulse-fill" style="font-size: 4rem;"></i>
                <h5 class="mt-3">Спа и Вэлнес</h5>
                <p>Восстановите силы с помощью разнообразных спа-процедур, массажей и оздоровительных терапий.</p>
            </div>
        </div>

        <!-- Карточка услуги 5 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
                <i class="bi bi-car-front-fill" style="font-size: 4rem;"></i>
                <h5 class="mt-3">Бесплатная парковка</h5>
                <p>Бесплатная парковка на территории отеля для всех гостей.</p>
            </div>
        </div>

        <!-- Карточка услуги 6 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
                <i class="bi bi-hdd-rack facility-icon" style="font-size: 4rem;"></i>
                <h5 class="mt-3">Бизнес-центр</h5>
                <p>Используйте полностью оснащённый бизнес-центр для встреч, презентаций и рабочих задач.</p>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
<?php require('footer.php');?>
<!--Footer-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
