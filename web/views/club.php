<?php
    require_once 'footer.php';
?>

        <main role="main" class="container">
            <h1><?php echo $post['title'] ?></h1>
            <h3><?php echo $post['description'] ?></h3>

            <button type="button" class="btn btn-primary my-3" onclick="window.location.href = '/index.php?action=posts-list'">
                Liste des posts
            </button>
            
            <div>
            <?php if ($comments && count($comments) > 0) { ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Description</th>
                            <th scope="col">Créé le</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($comments as $comment) { ?>
                        <tr>
                            <th scope="row"><?php echo $comment['id'] ?></th>
                            <td><?php echo $comment['description'] ?></td>
                            <td><?php echo $comment['created_at'] ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            <?php } ?>
            </div>
        </main>

<?php
require_once 'footer.php';
?>
