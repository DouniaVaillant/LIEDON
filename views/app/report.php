<?php include(VIEWS . '_partials/header.php'); ?>

<?php if (isset($_GET['id-user'])) : ?>


    <form action="<?= BASE_PATH . 'report?id=' . $_GET['id-user']; ?>" method="post">
        <input type="radio" name="reason" value="messages" id="message">
        <label for="message">Ses messages</label>
        // ! Voir l'appController report
        <label for="book"><input type="radio" name="reason" id="book"><input type="text" placeholder="Autre"></label>
        <button type="submit">Envoyer</button>
    </form>


<?php endif; ?>





















<?php include(VIEWS . '_partials/footer.php'); ?>