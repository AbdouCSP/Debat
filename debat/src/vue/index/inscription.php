<?php include_once '../../controller/UserController.php' ?>
<?php include_once '../header.php'; ?>

<form method="post" class=center> 
  <div class="form-group sm-12 md-6 lg-6">
    <div class="col">
      <input type="text" class="form-control " id="uname" name="uname" placeholder="Username/Identifiant" autofocus autocomplete="off">
    </div>
    <div class="col">
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password / Mot de Passe" autocomplete="off">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Ajoutez</button>
  </div>
</form>

<?php
$validation = new UserController();
$validation->validationForm();

?>

<?php include_once '../footer.php';?>