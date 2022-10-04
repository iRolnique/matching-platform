<?php
  session_start();
  require_once('../inc/config.php');
  require_once('../inc/header.php');
  require_once ('../inc/connect.php');
  if ($_SESSION["angemeldet"] == false) {
    header("Location: ../../index.php");
  }
  $id = $_SESSION["id"];
  $result = mysqli_query($connect,"SELECT * From user WHERE id like '$id'");
  $user = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authentifizierung und Anmeldung</title>
  <link rel="stylesheet" href="php-auth/assets/css/main.css">

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #f2f2f2;
  color: black;
}
</style>
<body>
<br>
<div class="container">
  <div class="row">
    <div class="col-lg-2">
      <table id="customers">            
            <tr><th>Status</th><th><?php echo $user['status'] ;?></th></tr>
            <tr><th>Vorname</th><th><?php echo $user['vorname'] ;?></th></tr>
            <tr><th>Nachname</th><th><?php echo $user['nachname'] ;?></th></tr>
            <tr><th>Firmenname</th><th><?php echo $user['firmenname'] ;?></th></tr>
            <tr><th>Straße</th><th><?php echo $user['strasse'] ;?></th></tr>
            <tr><th>Hausnummer</th><th><?php echo $user['hausnummer'] ;?></th></tr>
            <tr><th>PLZ</th><th><?php echo $user['plz'] ;?></th></tr>
            <tr><th>Ort</th><th><?php echo $user['ort'] ;?></th></tr>
            <tr><th>Land</th><th><?php echo $user['land'] ;?></th></tr>
            <tr><th>Telefonnummer</th><th><?php echo $user['telefonnummer'] ;?></th></tr>
            <tr><th>Email</th><th><?php echo $user['email'] ;?></th></tr>
      </table>
    </div>   
  </div>
</div>  
<?php 
  require_once('../inc/footer.php');
?>
</body>
</html>






