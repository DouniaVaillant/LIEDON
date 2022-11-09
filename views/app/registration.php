<?php include(VIEWS . '_partials/header.php'); ?>


<form method="POST" action="<?= BASE_PATH . "user/registration"; ?>">
    <div class="mb-3">
        <label for="lastname" class="form-label">Nom</label>
        <input name="lastname" type="text" class="form-control" id="lastname" aria-describedby="emailHelp">
        <small class="text-danger"><?= $error['lastname'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="firstame" class="form-label">Prénom</label>
        <input name="firstname" type="text" class="form-control" id="firstame" aria-describedby="emailHelp">
        <small class="text-danger"><?= $error['firstname'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="pseudo" class="form-label">Pseudo</label>
        <input name="pseudo" type="text" class="form-control" id="pseudo" aria-describedby="emailHelp">
        <small class="text-danger"><?= $error['pseudo'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
        <small class="text-danger"><?= $error['email'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="birthday" class="form-label">Date de naissance</label>
        <input name="birthday" type="date" class="form-control" id="birthday" aria-describedby="emailHelp">
        <small class="text-danger"><?= $error['birthday'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="way" class="form-label">Adresse (n° de voie)</label>
        <input name="way" type="text" class="form-control" id="way" aria-describedby="emailHelp">
        <small class="text-danger"><?= $error['way'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Adresse (voie)</label>
        <input name="address" type="text" class="form-control" id="address" aria-describedby="emailHelp">
        <small class="text-danger"><?= $error['address'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="city" class="form-label">Ville</label>
        <input name="city" type="text" class="form-control" id="city" aria-describedby="emailHelp">
        <small class="text-danger"><?= $error['city'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="postal_code" class="form-label">Code postal</label>
        <input name="postal_code" type="number" class="form-control" id="postal_code" aria-describedby="emailHelp">
        <small class="text-danger"><?= $error['postal_code'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="country" class="form-label">Pays</label>
        <input name="country" type="text" class="form-control" id="country" aria-describedby="emailHelp">
        <small class="text-danger"><?= $error['country'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input name="password" type="password" class="form-control" id="password">
        <small class="text-danger"><?= $error['password'] ?? ""; ?></small>
    </div>
    <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirmation du mot de passe</label>
        <input name="confirmPassword" type="password" class="form-control" id="confirmPassword">
        <small class="text-danger"><?=  $error['confirmMdp'] ?? '' ; ?></small>
    </div>
    <div class="form-check form-switch ms-4">
        <input class="form-check-input" onclick="passwordRegistration(event)"  type="checkbox" id="button" >
        <label class="form-check-label" id="label" for="button">Afficher les mots de passe</label>
    </div>

    <div class="mb-3">
        <label for="gender" class="form-label">Genre</label>
        <select name="gender" class="form-select" aria-label="Default select example">
            <option selected>Selectionner</option>
            <option value="h">Homme</option>
            <option value="f">Femme</option>
            <option value="autre">Autre</option>
        </select>
        <small class="text-danger"><?= $error['gender'] ?? ""; ?></small>
    </div>
    <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>



<script>

    let passwordRegistration = function (event)
    {
        let passwordRegistration = document.getElementById('password');
        let confirmPassword = document.getElementById('confirmPassword');
        let button = document.getElementById('button');
        let label = document.getElementById('label');

        if (label.innerText === 'Cacher les mots de passe'){
            passwordRegistration.setAttribute('type', 'password');
            confirmPassword.setAttribute('type', 'password');
            button.setAttribute('checked', false);
            label.innerText = 'Afficher les mots de passe';


        } else {
            passwordRegistration.setAttribute('type', 'text');
            confirmPassword.setAttribute('type', 'text');
            button.setAttribute('checked', true);
            label.innerText = 'Cacher les mots de passe';


        }





    }


</script>




<?php include(VIEWS . '_partials/footer.php'); ?>