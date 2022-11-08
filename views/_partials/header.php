<!doctype html>
<html lang="en">

<head>
    <title><?= CONFIG['app']['name'] ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css" integrity="sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= BASE . 'assets/style.css'; ?>">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light" style="background: #EECE9F;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?= BASE . "assets/images/logo.svg"; ?>" alt="" style="height: 70px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Livres papiers
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Au partage</a></li>
                            <li><a class="dropdown-item" href="#">Au don</a></li>
                            <li><a class="dropdown-item" href="#">Documentés</a></li>
                            <li><a class="dropdown-item" href="#">Tous</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Histoires numériques</a>
                    </li>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="<?= BASE . "assets/images/library.svg"; ?>" alt="" style="height: 30px;">
                        </a>
                    </li>
                    <?php if (isset($_SESSION['user'])) : ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profil
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Profil</a></li>
                                <hr class="hr">
                                <li><a class="dropdown-item" href="#">Mes histoires</a></li>
                                <li><a class="dropdown-item" href="#">Mes livres</a></li>
                                <li><a class="dropdown-item" href="#">Mes emprunts</a></li>
                                <hr class="hr">
                                <li><a class="dropdown-item" href="#">Ajouter un livre</a></li>
                                <li><a class="dropdown-item" href="#">Créer une histoire</a></li>
                                <hr class="hr">
                                <li><a class="dropdown-item" href="#">Paramètres</a></li>
                                <li><a class="dropdown-item" href="#">Déconnexion</a></li>
                            </ul>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_PATH . "registration"; ?>">Inscription</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>