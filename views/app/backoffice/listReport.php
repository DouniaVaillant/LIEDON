<?php include(VIEWS . '_partials/header.php'); ?>

<div class="container-fluid mt-5">

    <div class="filters" style="display: flex;">
        <a href="<?= BASE_PATH . 'admin/report/list'; ?>" class="mx-2 btn btn-light border-warning">Réinitialiser</a>
        <form action="<?= BASE_PATH . 'admin/report/list'; ?>" method="GET" class="mx-2">
            <button class="btn btn-light border-warning" name="fixed" value="yes" type="submit">Résolus</button>
        </form>
        <form action="<?= BASE_PATH . 'admin/report/list'; ?>" method="GET" class="mx-2">
            <button class="btn btn-light border-warning" name="fixed" value="no" type="submit">Non résolus</button>
        </form>
        <form action="<?= BASE_PATH . 'admin/report/list'; ?>" method="GET" class="mx-2">
            <button class="btn btn-light border-warning" name="list" value="user" type="submit">Utilisateurs</button>
        </form>
        <form action="<?= BASE_PATH . 'admin/report/list'; ?>" method="GET" class="mx-2">
            <button class="btn btn-light border-warning" name="list" value="book" type="submit">Livres</button>
        </form>
        <form action="<?= BASE_PATH . 'admin/report/list'; ?>" method="GET" class="mx-2">
            <button class="btn btn-light border-warning" name="list" value="story" type="submit">Histoires</button>
        </form>
        <form action="<?= BASE_PATH . 'admin/report/list'; ?>" method="GET" class="mx-2">
            <button class="btn btn-light border-warning" name="list" value="chapter" type="submit">Chapitres</button>
        </form>
    </div>


    <?php if (isset($_GET['fixed'])) : ?>

        <!-- TABLEAU DE TOUS LES RESOLUS -->
        <?php if ($_GET['fixed'] == 'yes') : ?>

            <table class="table  ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Signalé par</th>
                        <th>Élément</th>
                        <th>Raison</th>
                        <th>Etat</th>
                        <th>Date</th>
                        <!-- <th>Actions</th> -->
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($reports as $report) :
                        $reporter = User::findById(['id' => $report['id_reporter']]);
                        $reported = User::findById(['id' => $report['id_reported']]);
                        $book = Book::findById(['id' => $report['id_book']]);
                        $story = Story::findById(['id' => $report['id_story']]);
                        $chapter = Chapter::findById(['id' => $report['id_chapter']]);
                    ?>

                        <?php if ($report['fixed'] == '1') : ?>
                            <tr class="bg-sun">
                                <th scope="row"><?= $report['id']; ?></th>

                                <td><?= $reporter['pseudo']; ?></td>

                                <td>
                                    <?php if ($report['id_reported'] != 0) : ?>
                                        <strong>Utilisateur: </strong><?= $reported['pseudo']; ?>
                                    <?php elseif ($report['id_book'] != 0) : ?>
                                        <strong>Livre: </strong><?= $book['title']; ?>
                                    <?php elseif ($report['id_story'] != 0) : ?>
                                        <strong>Histoire: </strong><?= $story['title']; ?>
                                    <?php elseif ($report['id_chapter'] != 0) : ?>
                                        <strong>Chapitre: </strong><?= $chapter['title']; ?>
                                    <?php endif; ?>
                                </td>

                                <td><?= $report['reason']; ?></td>

                                <td>Résolu</td>

                                <td><?= $report['date_created']; ?></td>
                            </tr>
                        <?php endif; ?>

                    <?php endforeach; ?>
                </tbody>
            </table>

        <?php endif; ?>

        <!-- TABLEAU DE TOUS LES RESOLUS -->
        <?php if ($_GET['fixed'] == 'no') : ?>

            <table class="table  ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Signalé par</th>
                        <th>Élément</th>
                        <th>Raison</th>
                        <th>Etat</th>
                        <th>Date</th>
                        <!-- <th>Actions</th> -->
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($reports as $report) :
                        $reporter = User::findById(['id' => $report['id_reporter']]);
                        $reported = User::findById(['id' => $report['id_reported']]);
                        $book = Book::findById(['id' => $report['id_book']]);
                        $story = Story::findById(['id' => $report['id_story']]);
                        $chapter = Chapter::findById(['id' => $report['id_chapter']]);
                    ?>

                        <?php if ($report['fixed'] == '0') : ?>
                            <tr class="bg-sun">
                                <th scope="row"><?= $report['id']; ?></th>

                                <td><?= $reporter['pseudo']; ?></td>

                                <td>
                                    <?php if ($report['id_reported'] != 0) : ?>
                                        <strong>Utilisateur: </strong><?= $reported['pseudo']; ?>
                                    <?php elseif ($report['id_book'] != 0) : ?>
                                        <strong>Livre: </strong><?= $book['title']; ?>
                                    <?php elseif ($report['id_story'] != 0) : ?>
                                        <strong>Histoire: </strong><?= $story['title']; ?>
                                    <?php elseif ($report['id_chapter'] != 0) : ?>
                                        <strong>Chapitre: </strong><?= $chapter['title']; ?>
                                    <?php endif; ?>
                                </td>

                                <td><?= $report['reason']; ?></td>

                                <td>En attente de vérification</td>

                                <td><?= $report['date_created']; ?></td>
                            </tr>
                        <?php endif; ?>

                    <?php endforeach; ?>
                </tbody>
            </table>

        <?php endif; ?>

    <?php endif; ?>


    <?php if (isset($_GET['list'])) : ?>

        <!-- TABLEAU DES UTILISATEURS SIGNALES -->
        <?php if ($_GET['list'] == 'user') : ?>

            <table class="table  ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Signalé par</th>
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
                        <?php if ($report['fixed'] == 0) : ?>
                            <tr class="bg-sun">
                                <th scope="row"><?= $report['id']; ?></th>

                                <?php if ($reporter) : ?>
                                    <td><a href="<?= BASE_PATH . 'user/profile?id=' . $reporter['id']; ?>"><?= $reporter['pseudo']; ?></a></td>
                                <?php else : ?>
                                    <td><i>Utilisateur supprimé ou inexistant</i></td>
                                <?php endif; ?>

                                <?php if ($reported) : ?>
                                    <td><a href="<?= BASE_PATH . 'user/profile?id=' . $reported['id']; ?>">#<?= $report['id_reported'] . ' ' . $reported['pseudo']; ?><br><?= $reported['email']; ?></a></td>
                                <?php else : ?>
                                    <td><i>Utilisateur supprimé ou inexistant</i></td>
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

                                    <a href="<?= BASE_PATH . 'admin/notification/add?id=' . $report['id_reported']; ?>" class="btn-deco-none"><i class="fa-regular fa-message"></i></a>

                                    <form action="<?= BASE_PATH . 'admin/report/ban?u=' . $report['id_reported'] . '&report=' . $report['id']; ?>" method="POST">
                                        <button name="status" type="submit" class="btn-deco-none"><i class="fa-solid fa-ban"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        <?php endif; ?>


        <!-- TABLEAU DES LIVRES SIGNALES -->
        <?php if ($_GET['list'] == 'book') : ?>

            <table class="table  ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Signalé par</th>
                        <th>Livre signalé</th>
                        <th>Raison</th>
                        <th>Etat</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($bookReports as $report) :
                        $reporter = User::findById(['id' => $report['id_reporter']]);
                        $book = Book::findById(['id' => $report['id_book']]);
                    ?>
                        <?php if ($report['fixed'] == 0) : ?>
                            <tr class="bg-sun">
                                <th scope="row"><?= $report['id']; ?></th>

                                <?php if ($reporter) : ?>
                                    <td><a href="<?= BASE_PATH . 'user/profile?id=' . $reporter['id']; ?>"><?= $reporter['pseudo']; ?></a></td>
                                <?php else : ?>
                                    <td><i>utilisateur supprimé ou inexistant</i></td>
                                <?php endif; ?>

                                <?php if ($book) : ?>
                                    <td><a href="<?= BASE_PATH . 'book/show?id=' . $book['id']; ?>">#<?= $report['id_book']; ?><br><?= $book['title']; ?></a></td>
                                <?php else : ?>
                                    <td><i>Supprimé ou inexistant</i></td>
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

                                    <a href="<?= BASE_PATH . 'admin/notification/add?id=' . $book['id_user']; ?>" class="btn-deco-none"><i class="fa-regular fa-message"></i></a>

                                    <form action="<?= BASE_PATH . 'admin/report/ban?b=' . $book['id'] . '&report=' . $report['id']; ?>" method="POST">
                                        <button name="status" type="submit" class="btn-deco-none"><i class="fa-solid fa-ban"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        <?php endif; ?>


        <!-- TABLEAU DES HISTOIRES SIGNALES -->
        <?php if ($_GET['list'] == 'story') : ?>

            <table class="table  ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Signalé par</th>
                        <th>Histoire signalé</th>
                        <th>Raison</th>
                        <th>Etat</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($storyReports as $report) :
                        $reporter = User::findById(['id' => $report['id_reporter']]);
                        $story = Story::findById(['id' => $report['id_story']]);
                    ?>
                        <?php if ($report['fixed'] == 0) : ?>
                            <tr class="bg-sun">
                                <th scope="row"><?= $report['id']; ?></th>

                                <?php if ($reporter) : ?>
                                    <td><a href="<?= BASE_PATH . 'user/profile?id=' . $reporter['id']; ?>"><?= $reporter['pseudo']; ?></a></td>
                                <?php else : ?>
                                    <td><i>Utilisateur supprimé ou inexistant</i></td>
                                <?php endif; ?>

                                <?php if ($story) : ?>
                                    <td><a href="<?= BASE_PATH . 'story/show?id=' . $story['id']; ?>">#<?= $report['id_story']; ?><br><?= $story['title']; ?></a></td>
                                <?php else : ?>
                                    <td><i>Supprimé ou inexistant</i></td>
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

                                    <a href="<?= BASE_PATH . 'admin/notification/add?id=' . $story['id_user']; ?>" class="btn-deco-none"><i class="fa-regular fa-message"></i></a>

                                    <form action="<?= BASE_PATH . 'admin/report/ban?s=' . $story['id'] . '&report=' . $report['id']; ?>" method="POST">
                                        <button name="status" type="submit" class="btn-deco-none"><i class="fa-solid fa-ban"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        <?php endif; ?>


        <!-- TABLEAU DES CHAPITRES SIGNALES -->
        <?php if ($_GET['list'] == 'chapter') : ?>

            <table class="table  ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Signalé par</th>
                        <th>Histoire</th>
                        <th>Chapitre signalé</th>
                        <th>Raison</th>
                        <th>Etat</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($chapterReports as $report) :
                        $reporter = User::findById(['id' => $report['id_reporter']]);
                        $chapter = Chapter::findById(['id' => $report['id_chapter']]);
                        $story = Story::findById(['id' => $chapter['id_story']]);
                    ?>
                        <?php if ($report['fixed'] == 0) : ?>
                            <tr class="bg-sun">
                                <th scope="row"><?= $report['id']; ?></th>

                                <?php if ($reporter) : ?>
                                    <td><a href="<?= BASE_PATH . 'user/profile?id=' . $reporter['id']; ?>"><?= $reporter['pseudo']; ?></a></td>
                                <?php else : ?>
                                    <td><i>Utilisateur supprimé ou inexistant</i></td>
                                <?php endif; ?>

                                <?php if ($story) : ?>
                                    <td><a href="<?= BASE_PATH . 'story/show?id=' . $story['id']; ?>">#<?= $story['id']; ?><br><?= $story['title']; ?></a></td>
                                <?php else : ?>
                                    <td><i>Supprimé ou inexistant</i></td>
                                <?php endif; ?>

                                <?php if ($chapter) : ?>
                                    <td><a href="<?= BASE_PATH . 'story/chapter/show?id=' . $chapter['id']; ?>">#<?= $chapter['id']; ?><br><?= $chapter['title']; ?></a></td>
                                <?php else : ?>
                                    <td><i>Supprimé ou inexistant</i></td>
                                <?php endif; ?>

                                <td><?= $report['reason']; ?></td>

                                <td><?php if ($report['fixed'] == 0) {
                                        echo 'en attente de vérification';
                                    } elseif ($report['fixed'] == 1) {
                                        echo 'résolu';
                                    }; ?></td>

                                <td><?= $report['date_created']; ?></td>

                                <td>
                                    <form action="<?= BASE_PATH . 'admin/report/edit?id=' . $report['id']; ?>" method="POST">
                                        <button name="fixed" type="submit" class="btn-deco-none"><i class="fa-solid fa-check"></i></button>
                                    </form>

                                    <a href="<?= BASE_PATH . 'admin/notification/add?id=' . $chapter['id']; ?>" class="btn-deco-none"><i class="fa-regular fa-message"></i></a>

                                    <form action="<?= BASE_PATH . 'admin/report/ban?c=' . $story['id_user'] . '&report=' . $report['id_chapter']; ?>" method="POST">
                                        <button name="status" type="submit" class="btn-deco-none"><i class="fa-solid fa-ban"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        <?php endif; ?>

    <?php endif; ?>





</div>





<?php include(VIEWS . '_partials/footer.php'); ?>