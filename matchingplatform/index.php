<?php
  session_start();
  // require_once('./php-auth/inc/config.php');
  // require_once('./inc/header.php');  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="/php-auth/assets/css/main.css">
  <title>LOGIN</title>
</head>
<body>
  <div class="container" align="center">
    <br>
    <h1>B2B Matching Platform</h1>
    <img src="./php-auth/assets/img/logo.jpg" width=800px;>
    <p>      
      <!--Authorisation Form-->
      <div class="container">
        <h2>Login</h2>
              <!-- <div class="row justify-content-center">
              <div class="col text-center"> -->
        <form action="./php-auth/inc/signin.php" method="post">                
          <div class="form-group" style="width: 250px;">            
            <input type="email" class="form-control" name="email" id="email" placeholder="E-Mail" >
          </div>
          <div class="form-group" style="width: 250px;">            
            <input type="password" class="form-control" name="password" id="password" placeholder="Passwort">
          </div>             
          <button type="submit" class="btn btn-primary">anmelden</button>
                <!-- <p>
                  Neuer Kunde? - <a href="#">jetzt registrieren</a>                
                </p> -->
          <p><a href="#">Passwort vergessen?</a></p>
                <!-- </div>
              </div> -->
        </form>
      </div>
      <?php
        // if($_SESSION['message']) {
        //   echo '<p class = "msg">' . $_SESSION['message'] . '</p>';
        // }
        // unset($_SESSION['message']);
      ?>  
    </p>
  </div>
 </body>
</html>