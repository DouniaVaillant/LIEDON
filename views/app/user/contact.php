<?php include(VIEWS . '_partials/header.php'); ?>


<h1>Nous contacter</h1>

<form action="<?= BASE_PATH . 'contact'; ?>" method="POST">

    <label for="subject" class="label-control">Objet</label>
    <input id="subject" class="form-control" name="subject" type="text">

    <label for="content" class="label-control">Contenu</label>
    <textarea name="content" class="form-control" id="content" cols="30" rows="10"></textarea>

    <button type="submit" class="btn btn-success">Envoyer</button>
</form>




<?php include(VIEWS . '_partials/footer.php'); ?>