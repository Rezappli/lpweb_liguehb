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
                    <th><img src="<?= $joueur['img'] ?>" height="200" alt=" <?= $joueur['nom'] ?>"></th>
                    <th><h1 class="text-center">Club de Handball de <?= $joueur['ville'] ?> <br> Catégorie "<?= $joueur['nomCategorie'] ?>"</h1></th>
                </tr>
            
            </thead>

            <tbody>
            
                    <tr>
                        <th scope="col">Nom</th>
                        <td>
                            <?= $joueur['nom'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Prénom</th>
                        <td>
                            <?= $joueur['prenom'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Date naissance</th>
                        <td>
                            <?= $joueur['naissance']?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">email</th>
                        <td>
                            <?= $joueur['email'] ?>
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
