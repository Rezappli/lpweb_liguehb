
<?php
 include_once('views/header.php');

require_once('models/database.php');

$pdo = initDatabse();
    if ($pdo === false)
    {
        echo "Erreur à l'initialisation";
    }



$target_dir = "photos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


$licence = $_POST['licence'];
$club=$_POST['club'];
$categorie=$_POST['categorie'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$naissance=$_POST['naissance'];
$email=$_POST['email'];
$img=$_POST['licence'];



if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {


$query = 'INSERT INTO joueur VALUES (:licence, :club, :categorie, :nom, :prenom, :naissance, :email, :img);';
$stmt = $pdo->prepare($query);
$stmt->execute([
    ':licence' => $licence,
    ':club' => $club,
    ':categorie' => $categorie,
    ':nom' => $nom,
    ':prenom' => $prenom,
    ':naissance' => $naissance,
    ':email' => $email,
    ':img' => $target_file ,
]);
  ?><h1 class="text-success"> Joueur inscrit  </h1><?php
}else{
    ?><h1 class="text-danger"> Erreur </h1><?php
}
?>

<a class="btn btn-primary" href="index.php">Retour à l'accueil</a>
<?php

include_once('views/footer.php');
?>

