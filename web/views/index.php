<?php include_once('header.php'); ?>

<main role="main" class="container">    
    <div>
    <?php if ($clubs && count($clubs) > 0) { ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><h1>Ligue de Bretagne de Handball - Comité 22</h1></th>
                </tr>
                <tr>
                    <th scope="col">Num</th>
                    <th scope="col">Club</th>
                    <th scope="col">Licenciés</th>
                    <th scope="col">Catégorie</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach ($clubs as $club) { ?>
                <tr>
                    <th scope="row"><?php echo $post['id'] ?></th>
                    <td><?php echo $post['title'] ?></td>
                    <td><?php echo $post['description'] ?></td>
                    <td><?php echo $post['active'] ? 'Oui' : 'Non' ?></td>
                    <td><?php echo $post['created_at'] ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    <?php } ?>
    </div>
</main>

<?php include_once('footer.php'); ?>
