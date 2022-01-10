<?php include_once('header.php'); ?>
<style>
    td a {
        display:block;
        text-decoration:none;
        width:100%;
    }
</style>
<main class="container"> 
<a href="creer_joueur.php" class="btn btn-primary m-3"> Ajouter un joueur</a>   
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th colspan="4"><h1>Ligue de Bretagne de Handball - Comité 22</h1></th>
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
                        <td>
                            <a href="club.php?id=<?=$club['num']?>&categ=<?=$club['idCateg']?>">
                                <?= utf8_encode($club['num']) ?>
                            </a>
                        </td>
                        <td>
                            <a href="club.php?id=<?=$club['num']?>&categ=<?=$club['idCateg']?>">
                                <?= utf8_encode($club['club']) ?>
                            </a>
                        </td>
                        <td>
                            <a href="club.php?id=<?=$club['num']?>&categ=<?=$club['idCateg']?>">
                                <?= utf8_encode($club['licencies'])?>
                            </a>
                        </td>
                        <td>
                            <a href="club.php?id=<?=$club['num']?>&categ=<?=$club['idCateg']?>">
                                <?= utf8_encode($club['categorie']) ?>
                            </a>
                        </td>
                    </tr>
                </a>
            <?php } ?>
            </tbody>
        </table>
    </div>
</main>

<?php include_once('footer.php'); ?>
