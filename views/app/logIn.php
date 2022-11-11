<?php include(VIEWS . '_partials/header.php'); ?>


<form action="<?= BASE_PATH . 'user/logIn'; ?>" method="post" class="w-50 mx-auto border border-dark rounded p-5 mt-5">
    <h4 class="text-center">Connexion</h4>

    <div>
        <label for="email" class="form-label">Email</label>
        <input name="email" value="<?= $_POST['email'] ?? ''; ?>" type="text" class="form-control" id="email">
    </div>
    <div>
        <label for="password" class="form-label">Mot de passe</label>
        <input name="password" value="<?= $_POST['password'] ?? ''; ?>" type="password" class="form-control" id="password">
    </div>

    <button class="mt-4 btn btn-warning text-light" type="submit">Se connecter</button>

</form>








<?php include(VIEWS . '_partials/footer.php'); ?>