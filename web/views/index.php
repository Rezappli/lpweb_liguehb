<?php include_once('header.php'); ?>

<main class="container">    
    <div>
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
                    <td><?php echo $club['num'] ?></td>
                    <td><?php echo $club['club'] ?></td>
                    <td><?php echo $club['licencies']?></td>
                    <td><?php echo $club['categorie'] ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</main>

<?php include_once('footer.php'); ?>
