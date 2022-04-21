
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="admin.php"><?=$_COOKIE['adresseMail']?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      
      <li class="nav-item dropdown">
      </li>
      <li class="nav-item">
        <a class="nav-link d-flex" href="ajouter_Article.php">Article<i class="fa fa-plus mt-1 ml-2" aria-hidden="true"></i></a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link d-flex" href="../controlleur/contr_deconnexion.php">Deconnexion<i class="fa fa-sign-out mt-1 ml-2" aria-hidden="true"></i>
</a>
      </li>
    </ul>
    <form  class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Rechercher un article" aria-label="Search" name="search" style="width: 300px;
      border-radius: 36px;">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Chercher</button>
    </form>
  </div>
</nav>