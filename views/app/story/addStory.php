<?php include(VIEWS . '_partials/header.php'); ?>


<div class="pageAddStory">

    <h1>Créer une nouvelle histoire</h1>

    <form action="<?php if (isset($_GET['id'])) : echo BASE_PATH . 'user/story/edit?id=' . $_GET['id'];
                    else : echo BASE_PATH . 'story/add';
                    endif; ?>" method="POST" enctype="multipart/form-data">

        <div class="row">

            <?php if (isset($story)) : ?>
                <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
                <input type="hidden" name="photo" value="<?= $story['photo']; ?>">
                <div class="col-lg-5 my-4">
                    <label for="coverFile" class="form-label">Photo de couverture</label>
                    <input name="photoCoverUpdate" onchange="loadFileCover(event)" class="form-control" type="file" id="coverFile">
                    <small class="text-danger"><?= $error['photo'] ?? ""; ?></small>
                    <img src="<?php if ($story['photo'] == 'Pas de couverture') {
                                    echo BASE . 'assets/images/coverDefault.png';
                                } else {
                                    echo BASE . 'upload/story/' . $story['photo'];
                                } ?>" class="coverStory" alt="Couverture">
                    <img id="cover" class="coverStory" alt="Couverture">
                </div>
            <?php else : ?>
                <div class="col-lg-6 my-4">
                    <label for="oldCoverFile" class="form-label">Photo de couverture</label>
                    <input name="photo" onchange="loadFileCover(event)" class="form-control" type="file" id="oldCoverFile">
                    <img id="cover" class="coverStory" alt="Couverture">
                </div>
            <?php endif; ?>



            <div class="my-4 col-lg-6">
                <label for="title" class="form-label">Titre</label>
                <input name="title" value="<?= $story['title'] ?? ''; ?>" type="text" class="form-control" id="title">
                <small class="text-danger"><?= $error['title'] ?? ""; ?></small>
            </div>
        </div>


        <div class="row">

            <div class="my-4">
                <label for="synopsis" class="form-label">Synopsis</label>
                <textarea name="synopsis" class="form-control" id=""><?= $story['synopsis'] ?? ''; ?></textarea>
                <small class="text-danger"><?= $error['synopsis'] ?? ""; ?></small>
            </div>



            <div class="my-4 col-lg-3">
                <label for="category" class="form-label">Genre littéraire</label>
                <select name="category" class="form-select" aria-label="Default select example">
                    <option selected>Selectionner</option>
                    <?php foreach ($categories as $category) : ?>
                        <option <?php if (isset($story) && $story['category'] == $category['title']) : echo 'selected';
                                endif; ?> value="<?= $category['title']; ?>"><?= $category['title']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <small class="text-danger"><?= $error['category'] ?? ""; ?></small>
            </div>



            <div class="my-4 col-lg-3">
                <label for="target_reader" class="form-label">Public cible</label>
                <select name="target_reader" class="form-select" aria-label="Default select example">
                    <option selected>Selectionner</option>
                    <?php foreach ($targetReader as $target) : ?>
                        <option <?php if (isset($story) && $story['target_reader'] == $target['title']) {
                                    echo 'selected';
                                } ?> value="<?= $target['title']; ?>"><?= $target['title']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <small class="text-danger"><?= $error['target_reader'] ?? ""; ?></small>
            </div>



            <?php if (isset($_GET['id']) && $story['status'] != 'ban') : ?>
                <div class="my-4 col-lg-3">
                    <label for="status" class="form-label">statut</label>
                    <select name="status" class="form-select" aria-label="Default select example">
                        <option <?php if (isset($story) && $story['status'] == 'En cours') {
                                    echo 'selected';
                                } ?> value="En cours" selected>En cours</option>
                        <option <?php if (isset($story) && $story['status'] == 'En réecriture') {
                                    echo 'selected';
                                } ?> value="En réecriture">En réecriture</option>
                        <option <?php if (isset($story) && $story['status'] == 'Terminé') {
                                    echo 'selected';
                                } ?> value="Terminé">Terminé</option>
                    </select>
                    <small class="text-danger"><?= $error['status'] ?? ""; ?></small>
                </div>
            <?php endif; ?>


            <div class="my-4 col-lg-3">
                <label for="language" class="form-label">Langue</label>
                <select name="language" class="form-select">
                    <option selected>Selectionner</option>
                    <option <?php if (isset($story) && $story['language'] == 'Allemand') {
                                echo 'selected';
                            } ?> value="Allemand">Allemand</option>
                    <option <?php if (isset($story) && $story['language'] == 'Anglais') {
                                echo 'selected';
                            } ?> value="Anglais">Anglais</option>
                    <option <?php if (isset($story) && $story['language'] == 'Espagnol') {
                                echo 'selected';
                            } ?> value="Espagnol">Espagnol</option>
                    <option <?php if (isset($story) && $story['language'] == 'Français') {
                                echo 'selected';
                            } ?> value="Français">Français</option>
                    <option <?php if (isset($story) && $story['language'] == 'Italien') {
                                echo 'selected';
                            } ?> value="Italien">Italien</option>
                    <option <?php if (isset($story) && $story['language'] == 'Portugais') {
                                echo 'selected';
                            } ?> value="Portugais">Portugais</option>
                </select>
            </div>

        </div>



        <button type="submit" class="btn btn-success">Enregistrer</button>
        <!-- <a href="<?= BASE_PATH . 'story/chapter/add?story=' . $story['id']; ?>" class="btn bg-lightBrown">Ajouter un chapitre</a> -->

    </form>




</div>




<script>
    let loadFileCover = function(event) {
        let cover = document.getElementById('cover');
        cover.src = URL.createObjectURL(event.target.files[0]);
    }
</script>



<?php include(VIEWS . '_partials/footer.php'); ?>