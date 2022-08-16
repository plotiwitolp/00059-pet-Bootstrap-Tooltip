<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>00059-pet-Bootstrap-Tooltip</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="container">
        <a href="#" data-toggle="tooltip" title="Something tooltip text">Hover on me</a>
    </div>
    <div class="container mt-5">
        <a href="#" data-toggle="tooltip" title="Something another tooltip text">Hover on me</a>
    </div>
    <div class="container mt-3">
        <button class="p-2 rounded" href="#" data-toggle="tooltip" data-bs-placement="right" title="Something another tooltip right">Hover on me</button>
    </div>
    <div class="container mt-3">
        <button class="p-2 rounded" href="#" data-toggle="tooltip" data-bs-placement="left" title="Something another tooltip left">Hover on me</button>
    </div>
    <div class="container mt-3">
        <button class="p-2 rounded" href="#" data-toggle="tooltip" data-bs-placement="bottom" title="Something another tooltip bottom">Hover on me</button>
    </div>


    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>