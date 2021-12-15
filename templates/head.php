<!doctype html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $title; ?></title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <script src="./js/bootstrap.min.js"></script>
        <!-- Font Awesome für Icons -->
        <script src="https://kit.fontawesome.com/2e22fe1ba2.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header class="py-4 mb-2">
            <div class="container d-flex flex-wrap justify-content-center">
                <div class="mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                    <h2>Network Spy</h2>
                    <p class="fs-4">Network Monitoring Tool</p>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user-secret fa-5x"></i>
                </div>
            </div>
        </header>
        <nav class="py-2 bg-light border-bottom">
            <div class="container d-flex flex-wrap">
                <ul class="nav me-auto">
                    <li class="nav-item"><a href="./" class="nav-link link-dark px-2" aria-current="page">Monitor</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Geräteverwaltung</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Benutzerkonto</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Login</a></li>
                </ul>
            </div>
        </nav>