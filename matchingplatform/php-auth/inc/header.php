<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href= https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo($PATH)?>/php-auth/assets/css/main.css">
  <title>Document</title>

</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo($PATH)?>/php-auth/nav/profil.php">Meine Stammdaten</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo($PATH)?>/php-auth/nav/sponsoring.php">Sponsoringziel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo($PATH)?>/php-auth/nav/event.php">Eventprofil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo($PATH)?>/php-auth/nav/match.php">Matching</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Kontakt</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo($PATH)?>/php-auth/nav/logout.php">Abmelden</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  
