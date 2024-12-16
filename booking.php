<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tidal Lodge - БРОНИРОВАНИЕ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    
    <?php require('links.php');?>
    <style>
        .pop:hover {
            border-top-color: var(--teal)!important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
</head>
<!--header-->
<body class="bg-light">
    
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid px-lg-4 mt-4">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Tidal Lodge<br><span class="h-font fw-bold fs-5">Велигама</span></a>        
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active me-2" aria-current="page" href="index.php">Главная</a></li>
                    <li class="nav-item me-2"><a class="nav-link" href="rooms.php">Номера</a></li>
                    <li class="nav-item me-2"><a class="nav-link" href="facilities.php">Услуги</a></li>
                    <li class="nav-item me-2"><a class="nav-link" href="contact.php">Контакты</a></li>
                    <li class="nav-item me-2"><a class="nav-link" href="about.php">О нас</a></li>
                    <li class="nav-item me-2"><a class="nav-link" href="gallery.php">Галерея</a></li>
                    <li class="nav-item me-2"><a class="nav-link" href="booking.php">Забронировать</a></li>
                </ul>
            </div>
        </div>
    </nav>
<!--header-->

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ЗАБРОНИРОВАТЬ СЕЙЧАС</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-4">Добро пожаловать в Tidal Lodge - Велигама, где комфорт встречается с удобством. Мы предлагаем исключительный отдых, будь то для бизнеса или отдыха.</p>
    </div>  

    <!-- Форма бронирования -->
    <div class="container my-4">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="firstName" class="form-label mb-2">Имя</label>
                    <input type="text" id="firstName" name="fName" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label mb-2">Фамилия</label>
                    <input type="text" id="lastName" name="lName" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="emailAddress" class="form-label mb-2 mt-3">Электронная почта</label>
                    <input type="email" id="emailAddress" name="email" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="contactNumber" class="form-label mb-2 mt-3">Контактный номер</label>
                    <input type="number" id="contactNumber" name="contactNo" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label mb-2 mt-3">Адрес</label>
                    <input type="text" id="address" name="address" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="id" class="form-label mb-2 mt-3">Сканированная копия удостоверения личности (Паспорт/ Водительские права)</label>
                    <input type="file" id="id" name="scanCopy" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="checkin" class="form-label mb-2 mt-3">Дата заезда</label>
                    <input type="date" id="checkin" name="checkIn" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="checkout" class="form-label mb-2 mt-3">Дата выезда</label>
                    <input type="date" id="checkout" name="checkOut" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="adults" class="form-label mb-2">Взрослые</label>
                    <input type="number" id="adults" name="adults" class="form-control" min="1" required>
                </div>
                <div class="col-md-6">
                    <label for="children" class="form-label mb-2">Дети</label>
                    <input type="number" id="children" name="children" class="form-control" min="0">
                </div>
                <div class="col-12">
                    <label for="room-type" class="form-label mb-2 mt-3">Тип номера</label>
                    <select id="room-type" name="roomType" class="form-control" required>
                        <option value="">Выберите тип номера</option>
                        <option value="Guest Room">Гостевая комната</option>
                        <option value="Guest Room - Ocean View">Гостевая комната с видом на океан</option>
                        <option value="Guest Room - Garden View">Гостевая комната с видом на сад</option>
                        <option value="Guest Room - Superior Ocean View">Гостевая комната с улучшенным видом на океан</option>
                        <option value="Suite - Garden View">Сuite с видом на сад</option>
                        <option value="Suite - Superior Ocean View">Сuite с улучшенным видом на океан</option>
                        <option value="Presidential Suite">Президентский люкс</option>
                    </select>
                </div>
            </div>
            <p class="text-center mt-4 text-muted font-weight-bold">После подтверждения вашей брони, наша команда свяжется с вами для уточнения деталей и помощи в специальных запросах.</p>
            <div class="text-center">
                <button type="submit" name="send" class="btn btn-sm w-10 text-white" style="background-color: #4ee6bc;">Подтвердить бронирование</button>
            </div>
        </form>
    </div>

    <?php
    $connection = mysqli_connect('HotelBookingOnline', 'root', '', 'HotelBookingOnline');

    if (isset($_POST['send'])) {
        $fName = $_POST["fName"];
        $lName = $_POST["lName"];
        $email = $_POST["email"];
        $contactNo = $_POST["contactNo"];
        $address = $_POST["address"];
        $checkIn = $_POST["checkIn"];
        $checkOut = $_POST["checkOut"];
        $adults = $_POST["adults"];
        $children = $_POST["children"];
        $roomType = $_POST["roomType"];
        
        $scanCopy = addslashes(file_get_contents($_FILES["scanCopy"]["tmp_name"]));

        $sql = "INSERT INTO `book` (`fName`, `lName`, `email`, `contactNo`, `address`, `scanCopy`, `checkIn`, `checkOut`, `adults`, `children`, `roomType`) 
                VALUES ('$fName', '$lName', '$email', '$contactNo', '$address', '$scanCopy', '$checkIn', '$checkOut', '$adults', '$children', '$roomType')";

        if (mysqli_query($connection, $sql)) {
            echo "<script>alert('Бронирование успешно!');</script>";
        } else {
            echo "<script>alert('Сервер не работает! Попробуйте позже');</script>";
        }

        mysqli_close($connection);
    }
    ?>
</body>
</html>
