<?php include(VIEWS . '_partials/header.php'); ?>

<h1>Inscrits à la newsletter</h1>

<div class="container-fluid mt-5 pageListNewsletter">


    <form action="<?= BASE_PATH . 'admin/newsletter/list'; ?>" method="GET" class="mt-4 col-lg-3">
        <select name="age" class="form-select">
            <option value="adult">Majeurs</option>
            <option value="kid">Mineurs</option>
        </select>
        <button class="btn btn-light border border-warning" type="submit">Filtrer</button>
        <a href="<?= BASE_PATH . 'admin/newsletter/list'; ?>" class="btn btn-light border-warning">Réinitialiser</a>
    </form>

    <table class="table  ">

        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Age</th>
            </tr>
        </thead>



        <tbody>
            <?php foreach ($users as $user) :
                $report = Report::findUserById(['id_reported' => $user['id']]);
            ?>
                <?php if ($report && $report['fixed'] != 1) : ?>
                    <tr class="bg-danger">
                    <?php else : ?>
                    <tr class="<?php if ($user['roles'] == 'ROLE_ADMIN') : ?> text-light bg-lightGreen<?php elseif ($user['roles'] == 'ROLE_MODO') : ?>bg-lightBrown<?php elseif ($user['roles'] == 'ROLE_USER') : ?>bg-sun<?php endif; ?>">
                    <?php endif; ?>
                    <th scope="row"><?= $user['id']; ?></th>

                    <td><?= $user['lastname']; ?></td>

                    <td><?= $user['firstname']; ?></td>

                    <td><?= $user['email']; ?></td>

                    <td><?= $user['age']; ?></td>
                    </tr>
                <?php endforeach; ?>
        </tbody>
    </table>



</div>



<?php include(VIEWS . '_partials/footer.php'); ?>