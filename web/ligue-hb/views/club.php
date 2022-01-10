<?php include_once('header.php'); ?>

<style>
    td a {
        display:block;
        text-decoration:none;
        width:100%;
    }
</style>

<main class="container">    
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th colspan="4"><h1>Club de Handball de <?=$club[0]['ville']?> - <?=utf8_encode($club[0]['categ'])?></h1></th>
                </tr>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Joueur</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach ($club as $joueur) { ?>
                <form action="index.php">
                    <tr>
                        <td>
                            <a href="joueur.php?id=<?=$joueur['idJoueur']?>">
                                <?= utf8_encode($joueur['idJoueur']) ?>
                            </a>
                        </td>
                        <td>
                            <a href="joueur.php?id=<?=$joueur['idJoueur']?>">
                                <?= utf8_encode($joueur['prenomJoueur'])." " ?><?= utf8_encode($joueur['nomJoueur']) ?>
                            </a>
                        </td>
                    </tr>
                </form>
            <?php } ?>
            </tbody>
        </table>
    </div>
</main>

<?php include_once('footer.php'); ?>
