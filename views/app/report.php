<?php include(VIEWS . '_partials/header.php'); ?>

<?php if (isset($_GET['id-user'])) : ?>


    <form action="<?= BASE_PATH . 'user/profile?id=' . $_GET['id-user']; ?>" method="post">
        <select name="reason" id="">
            <option value="message">message</option>
            <option value="livre">livre</option>
            <option value="histoire">histoire</option>
            <input type="text" placeholder="Autre">
        </select>
    </form>


<?php endif; ?>





















<?php include(VIEWS . '_partials/footer.php'); ?>