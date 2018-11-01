<nav class="navbar navbar-expand-sm navbar-light sticky-top navbar-custom shadow py-1">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <h1 class="navbar-brand m-auto">Le Boutique</h1>
    <button class="btn btn-sm align-middle btn-default ml-auto mr-2 order-sm-last" type="button">
    <a href="index.php"><span class="fa fa-home" aria-hidden="true"></a></span>
    </button>

  <div class="collapse navbar-collapse" order-first-md id="navbarToggler">
    <ul class="navbar-nav ml-auto mt-0 mt-lg-0">

        <?php 
        /* Check if username is set or not, to show context sensitive links depending on result through session.*/
            if(!isset($_SESSION['username'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="views/login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="views/register.php">Register</a>
                </li>
        <?php else : ?>
        <li class="nav-item">
        <a class="nav-link" href="#">User Account: <?= $_SESSION["username"];?></a>
        <li class="nav-item">
            <a class="nav-link" href="validations/logout_validation.php">Logout</a>
        </li>
        <?php endif; ?>
    </ul>
  </div>
</nav>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>