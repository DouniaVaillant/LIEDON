<?php include(VIEWS . '_partials/header.php'); ?>



<div class="container-fluid mt-5">

    <a href="<?= BASE_PATH . 'admin/add/user'; ?>" class="btn btn-warning">Ajouter un membre</a>
    
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Rôles</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Pseudo</th>
            <th>Email</th>
            <th>Genre</th>
            <th>Date de naissance</th>
            <th>N° de voie</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code postal</th>
            <th>Pays</th>
            <th>Date d'inscription</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
            <tr class="<?php if($user['roles'] == 'ROLE_ADMIN'): ?> text-light bg-lightGreen<?php elseif ($user['roles'] == 'ROLE_MODO'): ?>bg-lightBrown<?php elseif($user['roles'] == 'ROLE_USER'): ?>bg-sun<?php endif; ?>">
                <th scope="row"><?= $user['id']; ?></th>
                <?php if ($user['roles'] == 'ROLE_USER') : ?>
                    <?php if ($user['gender'] == 'f') : ?>
                        <td>Utilisatrice</td>
                        <?php else : ?>
                            <td>Utilisateur</td>
                            <?php endif; ?>
                            <?php elseif ($user['roles'] == 'ROLE_ADMIN') : ?>
                                <?php if ($user['gender'] == 'f') : ?>
                                    <td>Administratrice</td>
                                    <?php else : ?>
                                        <td>Administrateur</td>
                    <?php endif; ?>
                <?php elseif ($user['roles'] == 'ROLE_MODO') : ?>
                    <?php if ($user['gender'] == 'f') : ?>
                        <td>Modératrice</td>
                        <?php else : ?>
                            <td>Modérateur</td>
                            <?php endif; ?>
                            <?php endif; ?>
                            <td><?= $user['lastname']; ?></td>
                            <td><?= $user['firstname']; ?></td>
                            <td><?= $user['pseudo']; ?></td>
                            <td><?= $user['email']; ?></td>
                            <?php if ($user['gender'] == 'h') : ?>
                    <td>Homme</td>
                <?php elseif ($user['gender'] == 'f'): ?>
                    <td>Femme</td>
                    <?php else: ?>
                        <td>Autre</td>
                        <?php endif; ?>
                            <td><?= $user['birthday']; ?></td>
                        <td><?= $user['way']; ?></td>
                        <td><?= $user['address']; ?></td>
                        <td><?= $user['city']; ?></td>
                        <td><?= $user['postal_code']; ?></td>
                        <td><?= $user['country']; ?></td>
                        <td><?= $user['date_registration']; ?></td>
                        <td>
                            <a href="<?= BASE_PATH . 'user/profil?id=' . $user['id']; ?>" class=""><i class="fa-solid soil fa-eye"></i></a>
                            <a href="<?= BASE_PATH . 'admin/edit?id=' . $user['id']; ?>" class=""><i class="fa-solid soil fa-pen"></i></a>
                            <a href="<?= BASE_PATH . 'admin/delete?id=' . $user['id']; ?>" class=""><i class="fa-solid soil fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
            
            
            
            
            
            
            
            

        </div>
            
            











<?php include(VIEWS . '_partials/footer.php'); ?>