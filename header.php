<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Bootstrap</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="accueil.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-examples/bootstrap-5.3.0-alpha1-examples/carousel/carousel.rtl.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    
    
  </head>
  <body>
    
    <!--partie header-->
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <div class="company">
                <a class="nav-link" href="accueil.php"><i class="fa-brands fa-monero"></i></a>
              </div>
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                <a class="nav-link " href="accueil.php"><i class="fas fa-home "></i> Accueil</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="contact.php"><i class="fas fa-address-card "></i> Contactes nous</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
            </div>
              <ul class="navbar-nav me-auto mb-2 mb-md-0 mr-2">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Login</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="connexion_form.php">Connexion</a></li>
                    <li><a class="dropdown-item" href="inscription.php">Inscription</a></li>
                    <li><a class="dropdown-item" href="deconnexion.php">Deconnexion</a></li>
                  </ul>
                </li> 
              </ul>
        </div>
     </nav>
  </header>
</body>
<html>