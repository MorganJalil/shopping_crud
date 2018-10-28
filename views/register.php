<?php
session_start();
include '../includes/database_connection.php';

/**
 * 1. Koppla upp till databasen
 * 2. Hämta användaren från databasen
 * 3. Kolla så att lösenordet i databasen
 *    stämmer överens med lösenordet
 *    som användaren har skrivit in i 
 *    formuläret: password_verify
 */

?>

<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php';
echo '<style>';
 include '../css/style.css';
echo '</style>'; ?>
<body>

<nav class="navbar navbar-expand-sm navbar-light sticky-top navbar-custom shadow py-0">
  <h1 class="navbar-brand mr-auto">Le Boutique</h1>
  <button class="btn btn-sm align-middle btn-dark ml-auto mr-2 order-sm-last" type="button">
    <span class="fa fa-shopping-cart" aria-hidden="true">
  </span></button>
</nav>

<div class="formbox">
    <h3 style="color:bisque;font-size:2.5em;">Register new account</h3><br>
    <form class="needs-validation" id="register" action="../validations/form_validation.php" method="POST" novalidate>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="username"><h5>Username</h5></label>
        <input type="text" class="form-control" name="username" id="username"  required>
        <div class="valid-feedback">
        ✔
        </div>        
        <div class="invalid-feedback">
          Please register your username.
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="password"><h5>Password</h5></label>
        <input type="text" class="form-control" name="password"  id="password"  required>
        <div class="valid-feedback">
        ✔
        </div>
        <div class="invalid-feedback">
          Please register your password.
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="phonenumber"><h5>Phonenumber</h5></label>
        <input type="tel" class="form-control" name="phone_number"  id="phonenumber"  required>
        <div class="valid-feedback">
        ✔
        </div>
        <div class="invalid-feedback">
          Please register your phonenumber.
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="email"><h5>Email</h5></label>
        <input type="email" class="form-control" name="email"  id="email"  required>
        <div class="valid-feedback">
        ✔
        </div>
        <div class="invalid-feedback">
          Please register a valid e-mail.
        </div>
      </div>
    
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Agree to terms and conditions.
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-end">
        <a href="../index.php" class="btn btn-danger btn-lg mr-2" role="button" aria-pressed="true">Cancel</a>
        <button class="btn btn-success btn-lg " type="submit" value="submit" name="submit">Login</button>
    </div>
  </form>
</div>




<script>
// JavaScript for disabling form submissions if there are invalid fields.
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>