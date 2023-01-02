<?php include(VIEWS . '_partials/header.php'); ?>


<h1>Notifications</h1>


<div class="row">

    <aside class="col-3">
        <ul>
            <?php foreach ($notifs as $notif) :
                $receiver = User::findById(['id' => $notif['receiver']]);
                $sentBy = User::findById(['id' => $notif['sent_by']]);
            ?>
                <li class="notifsUser-list bg-lightBrown text-center p-2 mb-3">
                    <a href="<?= BASE_PATH . 'notifications?id=' . $notif['id'] . '?seen=ok'; ?>">
                        <?= $notif['subject']; ?><br>
                        <?php
                        if ($sentBy) {
                            if ($sentBy['roles'] == 'ROLE_MODO') {
                                echo 'Equipe Liedon';
                            } elseif ($sentBy['roles'] == 'ROLE_ADMIN') {
                                echo 'Administration';
                            } else {
                                echo $sentBy['pseudo'];
                            }
                        } else {
                            echo '<i>Utilisateur supprimé</i>';
                        }
                        ?> → <?php if ($receiver) {
                                    echo $receiver['pseudo'];
                                } else {
                                    echo '<i>Utilisateur supprimé</i>';
                                } ?>
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>
    </aside>

    <div class="col-6 notifsUser-message">
        <!-- <div class=""> -->
        <?php if (isset($message)) :
            $receiver = User::findById(['id' => $message['receiver']]);
            $sentBy = User::findById(['id' => $message['sent_by']]);
        ?>
            <p>
                <?php if ($sentBy) {
                    echo $sentBy['pseudo'];
                } else {
                    echo '<i>Utilisateur supprimé</i>';
                } ?><br>
                <?= $message['content']; ?><br>
                <?= $message['date_created']; ?><br>
                <?php if ($message['seen'] == 0) {
                    echo 'non vu';
                } else {
                    echo 'vu';
                }; ?>
            </p>
        <?php else :  ?>
            <p>
                Retrouvez ici l'historique de vos notifications. <br>
                Selectionnez un message pour voir son détail.
            </p>
        <?php endif; ?>

        <!-- </div> -->
    </div>

</div>





















<?php include(VIEWS . '_partials/footer.php'); ?>