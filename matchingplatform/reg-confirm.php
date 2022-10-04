<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentifizierung und Anmeldung</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/php-auth/assets/css/main.css">
  </head>
  <body>
<?php
include('php-auth/inc/connect.php');
//------------------------------------------------------------------------
// Ausführen wenn get parameter code(Zeichenkette) vorhanden ist...
$ZEICHENKETTE = $_GET["code"];
$data = mysqli_query($connect, "SELECT * FROM user WHERE passwort_reset_code LIKE '$ZEICHENKETTE'");
$fetched_data = mysqli_fetch_array($data);
if ($fetched_data && $ZEICHENKETTE != null){
//------------------------------------------------------------------------
//SQL Abfrage ob Zeichenkette in Datenbank vorhanden ist   
  $ausgabe = '
  <div class="container" align="center">
      <br>
      <h1>B2B Matching Platform</h1>
      <img src="./php-auth/assets/img/logo.jpg" width=800px;>
      <p>
        <!--Authorisation Form-->
        <div class="container">
                <!-- <div class="row justify-content-center">
                <div class="col text-center"> -->
          <form action="./reg-confirm.php?f=confirm" method="post">                
            <div class="form-group" style="width: 250px;">
              <label for="email">E-Mail</label>
              <input value="'.$fetched_data["email"].'" type="email" class="form-control" name="email" id="email" disabled>
            </div>
            <div class="form-group" style="width: 250px;">              
              <input type="password" class="form-control" name="password" id="password" placeholder="Passwort">
            </div>
            <div class="form-group" style="width: 250px;">              
              <input type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="Bestätigen Sie Ihr Passwort">
            </div>            
            <button type="submit" class="btn btn-primary">anmelden</button>
                  <!-- <p>
                    Neuer Kunde? - <a href="#">jetzt registrieren</a>                
                  </p> -->
            <p><a href="#">Passwort vergessen?</a></p>
                  <!-- </div>
                </div> -->
          </form>
        </div>';
  echo $ausgabe;
  }
?>    
</div>
</body>
</html>