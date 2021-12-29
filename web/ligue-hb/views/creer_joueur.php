<?php include_once('views/header.php'); ?>

<form class="m-5">
  <div class="form-group">
    <label for="inputLastName">Nom</label>
    <input type="text" class="form-control" id="inputLastName" placeholder="Nom">
  </div>
  <div class="form-group">
    <label for="inputFirstName">Prenom</label>
    <input type="text" class="form-control" id="inputFirstName" placeholder="Prenom">
  </div>
  <div class="form-group">
    <label for="inputBirthday">Date de naissance</label>
    <input type="date" class="form-control" id="inputBirthday"  placeholder="Date de naissance">
  </div>
  <div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="inputCategory">Categorie</label>
    <select class="form-control" id="inputCategory">
      <?php foreach($category as $categories) { ?>
        <option><?= $category['nom']?></option>
      <?php }?>
    </select>
  </div>
  <div class="form-group">
    <label for="inputClub">Club</label>
    <select class="form-control" id="inputClub">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include_once('views/footer.php'); ?>
