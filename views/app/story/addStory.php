<?php include(VIEWS . '_partials/header.php'); ?>

<form action="<?= BASE_PATH . 'story/add'; ?>" method="POST" enctype="multipart/form-data">


    <?php if (isset($story)) : ?>
        <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
        <input type="hidden" name="photo" value="<?= $story['photo']; ?>">
        <div class="form-group">
            <label for="coverFile" class="form-label mt-4">Photo de couverture</label>
            <input name="photoCoverUpdate" onchange="loadFileCover(event)" class="form-control" type="file" id="coverFile">
            <small class="text-danger"><?= $error['photo'] ?? ""; ?></small>
            <img src="<?= BASE . 'upload/story/' . $story['photo']; ?>" height="300" alt="">
            <img id="cover" height="300" alt="">
        </div>
    <?php else : ?>
        <div class="form-group">
            <label for="oldCoverFile" class="form-label mt-4">Photo de couverture</label>
            <input name="photo" onchange="loadFileCover(event)" class="form-control" type="file" id="oldCoverFile">
            <img id="cover" height="300" alt="">
        </div>
    <?php endif; ?>

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
    <div class="mb-3">
        <label for="target_reader" class="form-label">Lectorat cible</label>
        <select name="target_reader" value="<?= $_POST['target_reader'] ?? $story['target_reader']; ?>" class="form-select" aria-label="Default select example">
            <option selected>Selectionner</option>
            <?php foreach ($targetReader as $target) : ?>
                <option <?php if (isset($story) && $story['target_reader'] == $target['title']) : echo 'selected';
                        endif; ?> value="<?= $target['title']; ?>"><?= $target['title']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <small class="text-danger"><?= $error['target_reader'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="title" class="form-label">Titre</label>
        <input name="title" value="<?= $story['title'] ?? ''; ?>" type="text" class="form-control" id="title">
        <small class="text-danger"><?= $error['title'] ?? ""; ?></small>
    </div>

    <div class="mb-3">
        <label for="synopsis" class="form-label">Synopsis</label>
        <textarea name="synopsis" class="form-control" id=""><?= $book['synopsis'] ?? ''; ?></textarea>
        <small class="text-danger"><?= $error['synopsis'] ?? ""; ?></small>
    </div>

</form>








<script>
    let loadFileCover = function(event) {
        let cover = document.getElementById('cover');
        cover.src = URL.createObjectURL(event.target.files[0]);
    }
</script>



<?php include(VIEWS . '_partials/footer.php'); ?>