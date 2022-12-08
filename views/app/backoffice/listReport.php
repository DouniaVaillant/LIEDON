<?php include(VIEWS . '_partials/header.php'); ?>

<div class="container-fluid mt-5">

<!-- <div class="filters"> -->
    <form action="<?= BASE_PATH . 'admin/report/list?fixed=show'; ?>" method="GET" class="mt-4 col-lg-3">
        <button class="btn btn-light border-warning" type="submit">Résolus</button>
    </form>
    <form action="<?= BASE_PATH . 'admin/report/list?list=user'; ?>" method="GET" class="mt-4 col-lg-3">
        <button class="btn btn-light border-warning" type="submit">Membres</button>
    </form>
    <form action="<?= BASE_PATH . 'admin/report/list?list=book'; ?>" method="GET" class="mt-4 col-lg-3">
        <button class="btn btn-light border-warning" type="submit">Livres</button>
    </form>
    <form action="<?= BASE_PATH . 'admin/report/list?list=story'; ?>" method="GET" class="mt-4 col-lg-3">
        <button class="btn btn-light border-warning" type="submit">Histoires</button>
    </form>
    <a href="<?= BASE_PATH . 'admin/report/list'; ?>" class="btn btn-light border-warning">Réinitialiser</a>
<!-- </div> -->

    <?php if (isset($_GET['list'])) : ?>
        <!-- TABLEAU DES UTILISATEURS SIGNALES -->
        <?php if ($_GET['list'] == 'user') : ?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Signalement de</th>
                        <th>Signalé</th>
                        <th>Raison</th>
                        <th>Etat</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($userReports as $report) :
                        $reporter = User::findById(['id' => $report['id_reporter']]);
                        $reported = User::findById(['id' => $report['id_reported']]);
                    ?>
                        <tr class="bg-sun">
                            <th scope="row"><?= $report['id']; ?></th>

                            <?php if ($reporter) : ?>
                                <td><a href="<?= BASE_PATH . 'user/profile?id=' . $reporter['id']; ?>"><?= $reporter['pseudo']; ?></a></td>
                            <?php else : ?>
                                <td>utilisateur supprimé ou inexistant</td>
                            <?php endif; ?>

                            <?php if ($reported) : ?>
                                <td><a href="<?= BASE_PATH . 'user/profile?id=' . $reported['id']; ?>">#<?= $report['id_reported'] . ' ' . $reported['pseudo']; ?><br><?= $reported['email']; ?></a></td>
                            <?php else : ?>
                                <td>utilisateur supprimé ou inexistant</td>
                            <?php endif; ?>

                            <td><?= $report['reason']; ?></td>

                            <td><?php if ($report['fixed'] == 0) {
                                    echo 'en attente de vérification';
                                } elseif ($report['fixed'] == 1) {
                                    echo 'résolu';
                                }; ?></td>

                            <td><?= $report['date_created']; ?></td>

                            <td>
                                <form action="<?= BASE_PATH . 'admin/report/edit?id=' . $report['id']; ?>" method="post">
                                    <button name="fixed" type="submit" class="btn-deco-none"><i class="fa-solid fa-check"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        <?php endif; ?>


    <?php else : ?>
        BLABLA EXPLICATIONS DU ROLE DE MODO

    <?php endif; ?>





</div>













<?php include(VIEWS . '_partials/footer.php'); ?>