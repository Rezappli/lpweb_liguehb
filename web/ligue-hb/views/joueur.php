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
                    <th colspan="4"><h1>Ligue de Bretagne de Handball - Comité 22</h1></th>
                </tr>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Date naissance</th>
                    <th scope="col">email</th>
                    <th scope="col">Licence</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach ($joueurs as $joueur) { ?>
                    <tr>
                        <td>
                            <?= $club['nom'] ?>
                        </td>
                        <td>
                            <?= $club['prenom'] ?>
                        </td>
                        <td>
                            <?= $club['naissance']?>
                        </td>
                        <td>
                            <?= $club['email'] ?>
                        </td>
                        <td>
                            <?= $club['licence'] ?>
                        </td>
                    </tr>
                </a>
            <?php } ?>
            </tbody>
        </table>
    </div>
</main>

<?php include_once('footer.php'); ?>
