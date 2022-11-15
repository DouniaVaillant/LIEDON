<?php include(VIEWS . '_partials/header.php'); ?>


<h1>Modifier son profil</h1>

<form method="POST" action="<?= BASE_PATH . "user/profil/edit?id=" . $user['id']; ?>" enctype="multipart/form-data">


    <!-- BANNIERE -->
    <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
    <input type="hidden" name="photo_banner" value="<?= $user['photo_banner']; ?>">
    <div class="form-group newPhotoProfil">
        <label for="bannerFile" class="form-label mt-4">Photo de bannière</label>
        <input name="photoBannerUpdate" onchange="loadFileBanner(event)" class="form-control" type="file" id="bannerFile">
        <img src="<?= BASE . 'upload/photos/banner' . $user['photo_banner']; ?>" width="300" alt="" class="input-file">
        <img id="banner" alt="" width="300" border-radius>
    </div>

    <!-- PROFIL -->
    <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
    <input type="hidden" name="photo_profil" value="<?= $user['photo_profil']; ?>">
    <div class="form-group newPhotoProfil">
        <label for="photoFile" class="form-label label-file labelNewPhotoProfil mt-4">Photo de profil</label>
        <input name="photoProfilUpdate" onchange="loadFileProfil(event)" class="form-control inputNewPhotoProfil" type="file" id="photoFile">
        <img src="<?= BASE . 'upload/photos/profil' . $user['photo_profil']; ?>" width="300" alt="" class="input-file imgNewPhotoProfil">
        <img id="profil" alt="" width="300" border-radius>
    </div>

    <div class="mb-3">
        <label for="lastname" class="form-label">Nom</label>
        <input name="lastname" value="<?= $_POST['lastname'] ?? $user['lastname']; ?>" type="text" class="form-control" id="lastname" aria-describedby="emailHelp">
        <small class="text-danger"><?= $error['lastname'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="firstame" class="form-label">Prénom</label>
        <input name="firstname" value="<?= $_POST['firstname'] ?? $user['firstname']; ?>" type="text" class="form-control" id="firstame" aria-describedby="emailHelp">
        <small class="text-danger"><?= $error['firstname'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="pseudo" class="form-label">Pseudo</label>
        <input name="pseudo" value="<?= $_POST['pseudo'] ?? $user['pseudo']; ?>" type="text" class="form-control" id="pseudo" aria-describedby="emailHelp">
        <small class="text-danger"><?= $error['pseudo'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" value="<?= $_POST['email'] ?? $user['email']; ?>" type="email" class="form-control" id="email" aria-describedby="emailHelp">
        <small class="text-danger"><?= $error['email'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="birthday" class="form-label">Date de naissance</label>
        <input name="birthday" value="<?= $_POST['birthday'] ?? $user['birthday']; ?>" type="date" class="form-control" id="birthday" aria-describedby="emailHelp">
        <small class="text-danger"><?= $error['birthday'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="way" class="form-label">Adresse (n° de voie)</label>
        <input name="way" value="<?= $_POST['way'] ?? $user['way']; ?>" type="text" class="form-control" id="way" aria-describedby="emailHelp">
        <small class="text-danger"><?= $error['way'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Adresse (voie)</label>
        <input name="address" value="<?= $_POST['address'] ?? $user['address']; ?>" type="text" class="form-control" id="address" aria-describedby="emailHelp">
        <small class="text-danger"><?= $error['address'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="city" class="form-label">Ville</label>
        <input name="city" value="<?= $_POST['city'] ?? $user['city']; ?>" type="text" class="form-control" id="city" aria-describedby="emailHelp">
        <small class="text-danger"><?= $error['city'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="postal_code" class="form-label">Code postal</label>
        <input name="postal_code" value="<?= $_POST['postal_code'] ?? $user['postal_code']; ?>" type="number" class="form-control" id="postal_code" aria-describedby="emailHelp">
        <small class="text-danger"><?= $error['postal_code'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="country" class="form-label">Pays</label>
        <input name="country" value="<?= $_POST['country'] ?? $user['country']; ?>" type="text" class="form-control" id="country" aria-describedby="emailHelp">
        <small class="text-danger"><?= $error['country'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="gender" class="form-label">Genre</label>
        <select name="gender" value="<?= $_POST['gender'] ?? $user['gender']; ?>" class="form-select" aria-label="Default select example">
            <option selected>Selectionner</option>
            <option <?php if (isset($user) && $user['gender'] == 'h') : echo 'selected';
                    endif; ?> value="h">Homme</option>
            <option <?php if (isset($user) && $user['gender'] == 'f') : echo 'selected';
                    endif; ?> value="f">Femme</option>
            <option <?php if (isset($user) && $user['gender'] == 'autre') : echo 'selected';
                    endif; ?> value="autre">Autre</option>
        </select>
        <small class="text-danger"><?= $error['gender'] ?? ""; ?></small>
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>


<script>
    let loadFileBanner = function(event) {
        let banner = document.getElementById('banner');
        banner.src = URL.createObjectURL(event.target.files[0]);
    }
    let loadFileProfil = function(event) {
        let profil = document.getElementById('profil');
        profil.src = URL.createObjectURL(event.target.files[0]);
    }
</script>

<?php include(VIEWS . '_partials/footer.php'); ?>