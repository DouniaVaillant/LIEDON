<?php include(VIEWS . '_partials/header.php'); ?>


<form method="POST" class="pageRegistration" action="<?= BASE_PATH . "user/registration"; ?>">

    <h1 class="text-center my-5">Inscription</h1>

    <div class="row">
        <div class="mb-3 col-lg-4">
            <label for="lastname" class="form-label">Nom</label>
            <input name="lastname" value="<?= $_POST['lastname'] ?? ''; ?>" type="text" class="form-control" id="lastname" aria-describedby="emailHelp">
            <small class="text-danger"><?= $error['lastname'] ?? ""; ?></small>
        </div>

        <div class="mb-3 col-lg-4">
            <label for="firstame" class="form-label">Prénom</label>
            <input name="firstname" value="<?= $_POST['firstname'] ?? ''; ?>" type="text" class="form-control" id="firstame" aria-describedby="emailHelp">
            <small class="text-danger"><?= $error['firstname'] ?? ""; ?></small>
        </div>

        <div class="mb-3 col-lg-4">
            <label for="pseudo" class="form-label">Pseudo</label>
            <input name="pseudo" value="<?= $_POST['pseudo'] ?? ''; ?>" type="text" class="form-control" id="pseudo" aria-describedby="emailHelp">
            <small class="text-danger"><?= $error['pseudo'] ?? ""; ?></small>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="mb-3 col-lg-8">
            <label for="email" class="form-label">Email</label>
            <input name="email" value="<?= $_POST['email'] ?? ''; ?>" type="email" class="form-control" id="email" aria-describedby="emailHelp">
            <small class="text-danger"><?= $error['email'] ?? ""; ?></small>
        </div>

            <div class="mb-3 col-lg-2">
                <label for="birthday" class="form-label">Date de naissance</label>
                <input name="birthday" value="<?= $_POST['birthday'] ?? ''; ?>" type="date" class="form-control" id="birthday" aria-describedby="emailHelp">
                <small class="text-danger"><?= $error['birthday'] ?? ""; ?></small>
            </div>

            <div class="mb-3 col-lg-2">
                <label for="gender" class="form-label">Genre</label>
                <select name="gender" value="<?= $_POST['gender'] ?? ''; ?>" class="form-select" aria-label="exemple de select par défaut">
                    <option selected>Selectionner</option>
                    <option value="h">Homme</option>
                    <option value="f">Femme</option>
                    <option value="autre">Autre</option>
                </select>
                <small class="text-danger"><?= $error['gender'] ?? ""; ?></small>
            </div>
    </div>

    <div class="registration-address my-5 p-4 bg-lightBrown">
        <legend class="text-center">Adresse</legend>
        <p class="text-center col-12">Elle sera nécessare si vous proposez au don ou au prêt certains de vos livres. <span class="lightGreen">Dans le cas contraire votre adresse ne sera pas partagée</span>.</p>

        <div class="row justify-content-center">
            <div class="mb-3 col-lg-1">
                <label for="way" class="form-label">N° de voie</label>
                <input name="way" value="<?= $_POST['way'] ?? ''; ?>" type="text" class="form-control" id="way" aria-describedby="emailHelp">
                <small class="text-danger"><?= $error['way'] ?? ""; ?></small>
            </div>

            <div class="mb-3 col-lg-4">
                <label for="address" class="form-label">Adresse (voie)</label>
                <input name="address" value="<?= $_POST['address'] ?? ''; ?>" type="text" class="form-control" id="address" aria-describedby="emailHelp">
                <small class="text-danger"><?= $error['address'] ?? ""; ?></small>
            </div>

            <div class="mb-3 col-lg-3">
                <label for="city" class="form-label">Ville</label>
                <input name="city" value="<?= $_POST['city'] ?? ''; ?>" type="text" class="form-control" id="city" aria-describedby="emailHelp">
                <small class="text-danger"><?= $error['city'] ?? ""; ?></small>
            </div>

            <div class="mb-3 col-lg-2">
                <label for="postal_code" class="form-label">Code postal</label>
                <input name="postal_code" value="<?= $_POST['postal_code'] ?? ''; ?>" type="number" class="form-control" id="postal_code" aria-describedby="emailHelp">
                <small class="text-danger"><?= $error['postal_code'] ?? ""; ?></small>
            </div>

            <div class="mb-3 col-lg-2">
                <label for="country" class="form-label">Pays</label>
                <input name="country" value="<?= $_POST['country'] ?? ''; ?>" type="text" class="form-control" id="country" aria-describedby="emailHelp">
                <small class="text-danger"><?= $error['country'] ?? ""; ?></small>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="mb-3 col-lg-6">
            <label for="password" class="form-label">Mot de passe</label>
            <input name="password" value="<?= $_POST['password'] ?? ''; ?>" type="password" class="form-control" id="password">
            <small class="text-danger"><?= $error['password'] ?? ""; ?></small>
        </div>
        <div class="mb-3 col-lg-6">
            <label for="confirmPassword" class="form-label">Confirmation du mot de passe</label>
            <input name="confirmPassword" value="<?= $_POST['confirmPassword'] ?? ''; ?>" type="password" class="form-control" id="confirmPassword">
            <small class="text-danger"><?= $error['confirmMdp'] ?? ''; ?></small>
        </div>
    </div>
    <div class="form-check form-switch ms-4">
        <input class="form-check-input" type="checkbox" id="button">
        <label class="form-check-label" id="label" for="button">Afficher les mots de passe</label>
    </div>

    <div class="row justify-content-center my-5">
        <button type="submit" class="btn bg-lightGreen col-lg-4 sun">S'inscrire</button>
    </div>
</form>


<script>
    // $ Afficher/masquer le mot de passe sur l'inscription
    let passwordReg = document.getElementById("password");
    let confirmPassword = document.getElementById("confirmPassword");
    let button = document.getElementById("button");
    let label = document.getElementById("label");

    let passwordRegistration = function(event) {

        if (label.innerText === "Cacher les mots de passe") {
            passwordReg.setAttribute("type", "password");
            confirmPassword.setAttribute('type', 'password');
            button.setAttribute("checked", false);
            label.innerText = "Afficher les mots de passe";
        } else {
            passwordReg.setAttribute("type", "text");
            confirmPassword.setAttribute('type', 'text');
            button.setAttribute("checked", true);
            label.innerText = "Cacher les mots de passe";
        }
    };

    button.addEventListener('click', passwordRegistration);
</script>

<?php include(VIEWS . '_partials/footer.php'); ?>