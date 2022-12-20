<!doctype html>
<html lang="en">

<head>
    <title><?= CONFIG['app']['name'] ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= BASE . 'assets/images/logo.svg'; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css" integrity="sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= BASE . 'assets/css/style.css'; ?>">

</head>

<body class="darkMode" id="body">

    <nav>
        <ul>
            <li class="">
                <a href="<?= BASE_PATH; ?>">
                    <img src="<?= BASE . "assets/images/logo.svg"; ?>" alt="Logo_light" style="height: 70px;">
                </a>
            </li>
            <li class="">
                <a href="<?= BASE_PATH; ?>">
                    Accueil
                </a>
            </li>
            <li class="dropdownBook">
                <button id="btn" class="btn-deco-none" onclick="document.getElementById('dropdown-book-nav').classList.toggle('hide');">
                    <i class="fa-solid fa-caret-down"></i>
                </button>
                <a href="<?= BASE_PATH . 'books'; ?>">
                    Livres Papiers
                    <ul class="hide" id="dropdown-book-nav">
                        <li class="">
                            <a class="" href="<?= BASE_PATH . 'books?status=partage'; ?>">Au partage</a>
                        </li>
                        <li class="">
                            <a class="" href="<?= BASE_PATH . 'books?status=don'; ?>">Au don</a>
                        </li>
                        <li class="">
                            <a class="" href="<?= BASE_PATH . 'books?status=documentation'; ?>">Documentés</a>
                        </li>
                        <li class="">
                            <a class="" href="<?= BASE_PATH . 'books'; ?>">Tous</a>
                        </li>
                    </ul>
                </a>
            </li>
            <li class="">
                <a href="<?= BASE_PATH . 'stories'; ?>">
                    Histoires numériques
                </a>
            </li>
            <?php if (isset($_SESSION['user'])) : ?>
                <li class="">
                    <form action="<?= BASE_PATH . 'search'; ?>" method="POST" class="d-flex searchNavForm" role="search">
                        <input class="searchNavInput" id="searchNav" type="search" aria-label="Search" name="search">
                        <button class="btn-deco-none" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </li>
                <li class="">
                    <a href="<?= BASE_PATH . 'library'; ?>">
                        <img src="<?= BASE . "assets/images/library.svg"; ?>" alt="Icone-bibliothèque" style="height: 30px;">
                    </a>
                </li>
                <?php if (isset($_SESSION['user']) && ($_SESSION['user']['roles'] == 'ROLE_ADMIN' || $_SESSION['user']['roles'] == 'ROLE_MODO')) : ?>
                    <li class="">
                        <a class="nav-link" href="<?= BASE_PATH . "admin/backoffice"; ?>">Backoffice</a>
                    </li>
                <?php endif; ?>
            <?php endif; ?>
            <?php if (isset($_SESSION['user'])) : ?>
                <li class="dropdownProfile">
                    <button id="btn" class="btn-deco-none" onclick="document.getElementById('dropdown-profile-nav').classList.toggle('hide');">
                        <i class="fa-solid fa-caret-down"></i>
                    </button>
                    <a href="<?= BASE_PATH . 'user/profile'; ?>">
                        <img class="roundProfile" src="<?= BASE . 'upload/photos/profile/' . $_SESSION['user']['photo_profile']; ?>" alt="Photo-de-profil">
                        <ul class="hide" id="dropdown-profile-nav">
                            <li class=""> <a class="" href="<?= BASE_PATH . "user/profile"; ?>"> Profil</a></li>
                            <hr>
                            <li class=""> <a class="" href="<?= BASE_PATH . 'user/stories'; ?>">Mes histoires</a></li>
                            <li class=""> <a class="" href="<?= BASE_PATH . 'user/books'; ?>">Mes livres</a></li>
                            <li class=""> <a class="" href="#">Mes emprunts</a></li>
                            <hr>
                            <li class=""> <a class="" href="<?= BASE_PATH . 'book/add'; ?>">Ajouter un livre</a></li>
                            <li class=""> <a class="" href="<?= BASE_PATH . 'story/add'; ?>">Créer une histoire</a></li>
                            <hr>
                            <li class=""> <a class="" href="#">Paramètres</a></li>
                            <li class=""> <a class="" href="<?= BASE_PATH . "user/logOut"; ?>">Déconnexion</a></li>
                        </ul>
                    </a>
                </li>
            <?php else : ?>
                <li class="">
                    <a class="" href="<?= BASE_PATH . "user/registration"; ?>">Inscription</a>
                </li>
                <li class="">
                    <a class="" href="<?= BASE_PATH . "user/logIn"; ?>">Connexion</a>
                </li>
            <?php endif; ?>
            <li>
                <div class="bg">
                    <button class="circle btn-deco-none" onclick="document.getElementById('body').classList.toggle('darkMode');">
                        <div class="inCircle">
                            <div class="moon"></div>
                        </div>
                    </button>

                </div>
            </li>
        </ul>
    </nav>


    <div class="container-fluid mt-4 testHeader">
        <!-- <div class="position-relative text-center position-absolute z-index-2"> -->

        <?php if (isset($_SESSION['messages'])) :
            foreach ($_SESSION['messages'] as $type => $messages) :
                foreach ($messages as $message) :
        ?>
                    <div class="w-50 text-center mx-auto alert alert-<?= $type ?>"><?= $message; ?></div>

        <?php endforeach;
            endforeach;
            unset($_SESSION['messages']);
        endif; ?>
        <!-- </div> -->