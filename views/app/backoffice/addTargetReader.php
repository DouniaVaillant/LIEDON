<?php include(VIEWS . '_partials/header.php'); ?>


<div class="alert alert-dismissible alert-warning">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <h4 class="alert-heading">Attention</h4>
  <p class="mb-0">Merci d'entrer une cible au format: "age - age", "-age" ou "+age" <br><strong> exemple</strong>: "5-10 ans", "-5 ans", "+50 ans".</p>
</div>



<form action="<?php if (isset($_GET['id'])) {
                    echo BASE_PATH . 'admin/target-reader/edit';
                } else {
                    echo BASE_PATH . 'admin/target-reader/add';
                } ?>" method="POST">
    <div class="mb-3">
        <?php if (isset($targetReader)) : ?>
            <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
        <?php endif; ?>
        <label for="title" class="form-label">Lectorat ciblé</label>
        <input name="title" type="text" value="<?= $targetReader['title'] ?? ''; ?>" class="form-control" id="">
        <small class="text-danger"><?= $error['title'] ?? ""; ?></small>
    </div>
    <button type="submit" class="btn btn-success">Enregistrer</button>
</form>

















<?php include(VIEWS . '_partials/footer.php'); ?>