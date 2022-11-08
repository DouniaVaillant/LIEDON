<?php include(VIEWS . '_partials/header.php'); ?>


<form method="POST" action="<?= BASE_PATH . "registration"; ?>">
    <div class="mb-3">
        <label for="lastname" class="form-label">Nom</label>
        <input name="lastname" type="text" class="form-control" id="lastname" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="firstame" class="form-label">Prénom</label>
        <input name="firstname" type="text" class="form-control" id="firstame" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="pseudo" class="form-label">Pseudo</label>
        <input name="pseudo" type="text" class="form-control" id="pseudo" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="birthday" class="form-label">Date de naissance</label>
        <input name="birthday" type="date" class="form-control" id="birthday" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="way" class="form-label">Adresse (n° de voie)</label>
        <input name="way" type="text" class="form-control" id="way" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Adresse (voie)</label>
        <input name="address" type="text" class="form-control" id="address" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="city" class="form-label">Ville</label>
        <input name="city" type="text" class="form-control" id="city" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="postal_code" class="form-label">Code postal</label>
        <input name="postal_code" type="number" class="form-control" id="postal_code" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="country" class="form-label">Pays</label>
        <input name="country" type="text" class="form-control" id="country" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input name="password" type="text" class="form-control" id="password">
    </div>

    <div class="mb-3">
        <select name="gender" class="form-select" aria-label="Default select example">
            <option selected>Genre</option>
            <option value="h">Homme</option>
            <option value="f">Femme</option>
            <option value="autre">Autre</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>





<?php include(VIEWS . '_partials/footer.php'); ?>