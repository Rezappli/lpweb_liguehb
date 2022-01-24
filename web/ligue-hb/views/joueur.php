<?php include_once('header.php'); ?>
<style>
    td a {
        display:block;
        text-decoration:none;
        width:100%;
    }
</style>
<main class="container-fluid">    
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><img class="rounded-circle " src="<?= $joueur['img'] ?>" width="150" height="150" alt=" <?= $joueur['nom'] ?>"></th>
                    <th><h1 class="text-center">Club de Handball de <?= utf8_encode($joueur['ville']) ?> <br> Catégorie "<?= utf8_encode($joueur['nomCategorie']) ?>"</h1></th>
                </tr>
            
            </thead>

            <tbody>
            
                    <tr>
                        <th scope="col">Nom</th>
                        <td>
                            <?= utf8_encode($joueur['nom']) ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Prénom</th>
                        <td>
                            <?= utf8_encode($joueur['prenom']) ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Date naissance</th>
                        <td>
                            <?= utf8_encode($joueur['naissance'])?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">email</th>
                        <td>
                            <?= utf8_encode($joueur['email']) ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Licence</th>
                        <td>
                            <?= $joueur['licence'] ?>
                        </td>
                    </tr>
                </a>
            </tbody>
        </table>
    </div>
</main>

<?php include_once('footer.php'); ?>
