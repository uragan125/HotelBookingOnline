<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tidal Lodge - УСЛУГИ</title>
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
    Tidal Lodge предлагает спокойный отдых у моря с роскошными удобствами, включая элегантно оформленные номера, ресторан на территории с местной кухней и расслабляющий спа-салон для восстановления сил. Гости могут расслабиться у открытого бассейна, насладиться прямым доступом к пляжу или исследовать местные достопримечательности с помощью нашего преданного консьержа. Идеально подходит для небольших мероприятий и встреч, Tidal Lodge предлагает универсальные пространства для событий и персонализированные услуги планирования. Сочетание расслабления и приключений, Tidal Lodge — это идеальное место для незабываемого отдыха у побережья.
    </p>
  </div>
  <div class="container my-5">
    
    <div class="row g-4">
        <!-- Карточка услуги 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
            <i class="bi bi-router-fill" style="font-size: 4rem;"></i> 
                <h5 class="mt-3">Бесплатный Wi-Fi</h5>
                <p>Оставайтесь на связи с нашим бесплатным высокоскоростным Wi-Fi, доступным по всему отелю.</p>
            </div>
        </div>

        <!-- Карточка услуги 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
              <i class="bi bi-cup-hot-fill" style="font-size: 4rem;"></i>
                <h5 class="mt-3">Ресторан и Бар</h5>
                <p>Наслаждайтесь разнообразием местных и международных блюд в нашем ресторане и баре.</p>
            </div>
        </div>

        <!-- Карточка услуги 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
              <i class="bi bi-water" style="font-size: 4rem;"></i>
                <h5 class="mt-3">Бассейн</h5>
                <p>Расслабьтесь и наслаждайтесь отдыхом в нашем роскошном открытом бассейне с обслуживанием у бассейна.</p>
            </div>
        </div>

        <!-- Карточка услуги 4 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
              <i class="bi bi-heart-pulse-fill" style="font-size: 4rem;"></i>
                <h5 class="mt-3">Спа и Вэлнес</h5>
                <p>Восстановитесь с помощью различных спа-процедур, массажей и оздоровительных терапий.</p>
            </div>
        </div>

        <!-- Карточка услуги 5 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
                <i class="bi bi-car-front-fill" style="font-size: 4rem;"></i>
                <h5 class="mt-3">Бесплатная парковка</h5>
                <p>Удобная парковка на территории отеля без дополнительных затрат для всех гостей.</p>
            </div>
        </div>

        <!-- Карточка услуги 6 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
                <i class="bi bi-hdd-rack facility-icon" style="font-size: 4rem;"></i>
                <h5 class="mt-3">Бизнес-центр</h5>
                <p>Пользуйтесь полностью оборудованным бизнес-центром для встреч, презентаций и рабочих нужд.</p>
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
