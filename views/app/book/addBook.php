<?php include(VIEWS . '_partials/header.php');

if (!isset($_SESSION['user'])) {
  header('location:../');
  exit();
}

?>


<form>
  <input type="hidden" name="photo" value="<?= $book['photo']; ?>">
  <div class="form-group">
    <label for="photoFile" class="form-label mt-4">Photo de profil</label>
    <input name="photo" onchange="loadFileProfile(event)" class="form-control" type="file" id="photoFile">
    <img src="" width="300" alt="" class="input-file">
    <img id="photo" alt="" width="300" border-radius>
  </div>
  <div class="mb-3">
    <label for="title" class="form-label">Titre</label>
    <input name="title" type="text" class="form-control" id="title">
  </div>
  <div class="mb-3">
    <label for="synopsis" class="form-label">Synopsis</label>
    <input name="synopsis" type="text" class="form-control" id="synopsis">
  </div>
  <div class="mb-3">
    <label for="author" class="form-label">Auteur.trice</label>
    <input name="author" type="text" class="form-control" id="author">
  </div>
  <div class="mb-3">
    <label for="editor" class="form-label">Editeur</label>
    <input name="editor" type="text" class="form-control" id="editor">
  </div>
  <div class="mb-3">
    <label for="date_publication" class="form-label">Date de publication</label>
    <input name="date_publication" type="date" class="form-control" id="date_publication">
  </div>
  <div class="mb-3">
    <label for="id_category" class="form-label">Catégorie</label>
    <select name="id_category" value="<?= $_POST['id_category'] ?? $user['id_category']; ?>" class="form-select" aria-label="Default select example">
      <option selected>Selectionner</option>
      <option <?php if (isset($user) && $user['id_category'] == 'h') : echo 'selected';
              endif; ?> value="h">Homme
      </option>
      <option <?php if (isset($user) && $user['id_category'] == 'f') : echo 'selected';
              endif; ?> value="f">Femme
      </option>
      <option <?php if (isset($user) && $user['id_category'] == 'autre') : echo 'selected';
              endif; ?> value="autre">Autre
      </option>
    </select>
    <small class="text-danger"><?= $error['id_category'] ?? ""; ?></small>
  </div>










  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="">
    <label class="form-check-label" for="">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>








<script>
  let loadFileBanner = function(event) {
    let banner = document.getElementById('banner');
    banner.src = URL.createObjectURL(event.target.files[0]);
  }
  let loadFileProfile = function(event) {
    let profile = document.getElementById('profile');
    profile.src = URL.createObjectURL(event.target.files[0]);
  }
</script>







<?php include(VIEWS . '_partials/footer.php'); ?>