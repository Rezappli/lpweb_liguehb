<?php include_once('views/header.php'); ?>

<form class="m-5 needs-validation" action="upload.php" method="post" enctype="multipart/form-data" novalidate>
<div class="form-group">
    <label for="inputLastName">Photo</label>
    <input type="file" class="form-control" name="fileToUpload" id="fileToUpload" accept="image/gif, image/jpeg, image/png" >
  </div>

  <div class="form-group">
    <label for="inputLastName">Licence</label>
    <input type="text" class="form-control" name="licence" id="inputLastName" placeholder="Licence" require>
  </div>
  <div class="form-group">
    <label for="inputLastName">Nom</label>
    <input type="text" class="form-control" name="nom" id="inputLastName" placeholder="Nom" require>
  </div>
  <div class="form-group">
    <label for="inputFirstName">Prenom</label>
    <input type="text" class="form-control" name="prenom"  id="inputFirstName" placeholder="Prenom" require>
  </div>
  <div class="form-group">
    <label for="inputBirthday">Date de naissance</label>
    <input type="date" class="form-control" name="naissance"  id="inputBirthday"  placeholder="Date de naissance" require>
  </div>
  <div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" name="email"  id="inputEmail" placeholder="Enter email" >
  </div>
  <div class="form-group">
    <label for="inputCategory">Categorie</label>
    <select class="form-control" name="categorie" id="inputCategory" require> 
      <?php foreach($categories as $category) { ?>
        <option value="<?= $category['id'] ?>"><?= utf8_encode($category['nom'])?></option>
      <?php }?>
    </select>
  </div>
  <div class="form-group">
    <label for="inputClub">Club</label>
    <select class="form-control"  name="club" id="inputClub" require>
    <?php foreach($clubs as $club) { ?>
        <option value="<?= $club['id'] ?>"><?= utf8_encode($club['club'])?></option>
      <?php }?>
    </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Valider</button>
</form>

<script>
  (function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
  </script>
<?php include_once('views/footer.php');


?>


