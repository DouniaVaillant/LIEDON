<?php include(VIEWS . '_partials/header.php'); ?>


<h1>Envoyer un message</h1>

<form action="<?= BASE_PATH . 'admin/notification/add'; ?>" method="post">

    <label for="receiver" class="label-control">Destinataire</label>
    <select name="receiver" class="form-select">
        <?php if ($_GET['id']) : ?>
            <option class="form-control" id="receiver" name="receiver" value="<?= $_GET['id']; ?>"><?= $user['pseudo']; ?></option>
        <?php else : ?>
            <?php foreach ($users as $user) : ?>
                <option value="<?= $user['id']; ?>"><?= $user['pseudo']; ?></option>
            <?php endforeach; ?>
        <?php endif; ?>
    </select>

    <label for="subject" class="label-control">Objet</label>
    <input id="subject" class="form-control" name="subject" type="text">

    <label for="content" class="label-control">Contenu</label>
    <textarea name="content" class="form-control" id="content" cols="30" rows="10"></textarea>

    <button type="submit" class="btn btn-success">Envoyer</button>
</form>




















<?php include(VIEWS . '_partials/footer.php'); ?>