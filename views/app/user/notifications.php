<?php include(VIEWS . '_partials/header.php'); ?>


<h1>Notifications</h1>








<div class="notif bg-lightBrown p-2">
    <?php if ($notifs) : ?>
        <?php foreach ($notifs as $notif) : ?>

            <?= $notif['sent_by']; ?>
            <?= $notif['content']; ?>

        <?php endforeach; ?>
    <?php else : ?>
        <h4>Aucune notification</h4>
    <?php endif; ?>
</div>






















<?php include(VIEWS . '_partials/footer.php'); ?>