<?php include(VIEWS . '_partials/header.php'); ?>


<h1>Notifications</h1>

<?php foreach ($notifs as $notif) : ?>
    <div class="notif bg-lightBrown p-2 mb-1">

        <?= $notif['sent_by']; ?>
        <?= $notif['content']; ?>




    </div>
<?php endforeach; ?>






















<?php include(VIEWS . '_partials/footer.php'); ?>