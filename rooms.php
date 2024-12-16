<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tidal Lodge - НОМЕРА</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require('links.php');?>
    <style>
        /* Custom styling */
        .filter-panel {
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .clear-button {
            margin-top: 5px;
        }
        .room-cards .room-card {
            margin-bottom: 20px;
            display: flex;
        }

        .room-image {
            width: 10px; /* Set width of the image */
            border-radius: 8px;
            margin-left: 20px;
        }
    </style>
</head>

<body class="bg-light">
<!--header-->

<?php require('header.php');?>
<!--header-->



 <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">НОМЕРА</h2>
    <div class="h-line bg-dark"></div>
</div> 
    <div class="container mt-5">
        <!-- Панель фильтров -->
        <div class="filter-panel">
            <h5>Фильтровать Номера</h5>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="features">Особенности</label>
                    <select id="features" class="form-control">
                        <option value="">Все особенности</option>
                        <option value="Garden View">Вид на сад</option>
                        <option value="Ocean View">Вид на океан</option>
                        <option value="Superior Ocean View">Превосходный вид на океан</option>
                        <option value="1 King Bed">1 кровать King-size</option>
                        <option value="2 Queen Beds">2 кровати Queen-size</option>
                        <option value="Marble Bathroom">Мраморная ванная</option>
                        <option value="Separate Bathtub and Shower">Отдельная ванна и душ</option>
                        <option value="Connecting Rooms">Соединенные номера</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="guestAdult">Взрослые</label>
                    <input type="number" class="form-control" id="guestAdult" min="0" placeholder="Количество взрослых">
                </div>
                <div class="form-group col-md-4">
                    <label for="guestChildren">Дети</label>
                    <input type="number" class="form-control" id="guestChildren" min="0" placeholder="Количество детей">
                </div>
            </div>
            <button class="btn mt-1" onclick="filterRooms()" style="background-color: #4ee6bc; color: white;">Фильтровать</button>
            <button class="btn btn-secondary clear-button" onclick="clearFilters()">Очистить фильтры</button>
        </div>

        <!-- Карточки номеров -->
        <div class="room-cards">
            <!-- Пример номера -->
            <!-- Номер 1 -->
            <div class="room-card card mb-4 border-0 shadow" data-features="1 King Bed, Marble Bathroom" data-adults="2" data-children="1">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="images/rooms/1.WEBP" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Гостевой номер</h5>
                            <p class="card-text">Особенности: 1 кровать King-size | Мраморная ванная</p>
                            <p class="card-text">Удобства: Высокоскоростной Wi-Fi | Электрическая розетка | Кофеварка/чайник | Мини-бар</p>
                            <p class="card-text">Взрослые: 2 | Дети: 1</p>
                            <h6 class="mb-3">$225 за ночь</h6>
                            <a href="booking.php" class="btn btn-sm w-10 text-white custom-bg shadow-none mb-3" style="background-color: #4ee6bc;">Забронировать</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Номер 2 -->
            <div class="room-card card mb-4 border-0 shadow" data-features="Garden View,2 Queen Beds,Marble bathroom" data-adults="2" data-children="1">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/rooms/2.WEBP" class="img-fluid rounded-start" >
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Гостевой номер - Вид на сад</h5>
                            <p class="card-text">Особенности: Вид на сад | 2 кровати Queen-size | Мраморная ванная</p>
                            <p class="card-text">Удобства: Высокоскоростной Wi-Fi | Электрическая розетка | Кофеварка/чайник | Мини-бар</p>
                            <p class="card-text">Взрослые: 2 | Дети: 1</p>
                            <h6 class="mb-3">$275 за ночь</h6>
                            <a href="booking.php" class="btn btn-sm w-10 text-white custom-bg shadow-none mb-3" style="background-color: #4ee6bc;">Забронировать</a>
                        </div>
                    </div>
                </div>
            </div>
          <!-- Номер 3 -->
          <div class="room-card card mb-4 border-0 shadow" data-features="1 King Bed, Ocean View, Marble Bathroom" data-adults="2" data-children="1">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/rooms/6.avif" class="img-fluid rounded-start" >
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Гостевой номер - Вид на океан</h5>
                            <p class="card-text">Особенности: 1 кровать King-size | Мраморная ванная</p>
                            <p class="card-text">Удобства: Высокоскоростной Wi-Fi | Электрическая розетка | Кофеварка/чайник | Мини-бар</p>
                            <p class="card-text">Взрослые: 2 | Дети: 2</p>
                            <h6 class="mb-3">$345 за ночь</h6>
                            <a href="booking.php" class="btn btn-sm w-10 text-white custom-bg shadow-none mb-3" style="background-color: #4ee6bc;">Забронировать</a>
                        </div>
                    </div>
                </div>
            </div>

          <!-- Номер 4 -->
          <div class="room-card card mb-4 border-0 shadow" data-features="1 King Bed,Superior Ocean View, Marble Bathroom,Connecting Rooms" data-adults="2" data-children="1">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="images/rooms/4.WEBP" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Гостевой номер - Превосходный вид на океан</h5>
                            <p class="card-text">Особенности: 1 кровать King-size | Мраморная ванная | Соединенные номера</p>
                            <p class="card-text">Удобства: Высокоскоростной Wi-Fi | Электрическая розетка | Кофеварка/чайник | Мини-бар</p>
                            <p class="card-text">Взрослые: 2 | Дети: 1</p>
                            <h6 class="mb-3">$399 за ночь</h6>
                            <a href="booking.php" class="btn btn-sm w-10 text-white custom-bg shadow-none mb-3" style="background-color: #4ee6bc;">Забронировать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function filterRooms() {
        const features = document.getElementById("features").value.toLowerCase();
        const guestAdult = document.getElementById("guestAdult").value;
        const guestChildren = document.getElementById("guestChildren").value;
        const rooms = document.querySelectorAll(".room-card");

        rooms.forEach((room) => {
            const roomFeatures = room.getAttribute("data-features").toLowerCase();
            const roomAdults = room.getAttribute("data-adults");
            const roomChildren = room.getAttribute("data-children");

            if (
                (features === "" || roomFeatures.includes(features)) &&
                (guestAdult === "" || roomAdults == guestAdult) &&
                (guestChildren === "" || roomChildren == guestChildren)
            ) {
                room.style.display = "flex"; 
            } else {
                room.style.display = "none"; 
            }
        });
    }

    function clearFilters() {
        document.getElementById("features").value = "";
        document.getElementById("guestAdult").value = "";
        document.getElementById("guestChildren").value = "";
        const rooms = document.querySelectorAll(".room-card");
        rooms.forEach((room) => {
            room.style.display = "flex"; 
        });
    }
</script>
</body>
</html>
