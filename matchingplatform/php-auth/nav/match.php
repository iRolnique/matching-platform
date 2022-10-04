<?php 
  require_once('../inc/config.php');
  require_once('../inc/header.php');
  require_once ('../inc/connect.php');
?>

<!-- <img src="../assets/img/logo.jpg" width=1000; align="center"> --> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authentifizierung und Anmeldung</title>
  <link rel="stylesheet" href="php-auth/assets/css/main.css">

</head>
<body>

<?php

$connect = new mysqli($host, $user, $password, $database); 

$sql = "SELECT * FROM user";

$db_erg = mysqli_query( $connect, $sql );
if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . mysqli_error($mysqli));
}

?>


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
  background-color: #D9D3CC;
  color: black;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    
    <th>Status</th>
    <th>Firmenname</th>
    <th>Ort</th>
    <th>Land</th>
    
  </tr>
  <?php while ($zeile = mysqli_fetch_array( $db_erg, MYSQLI_ASSOC)):
?>
  <tr>
    
    <td><?php echo $zeile['status'] ;?></td>
    <td><?php echo $zeile['firmenname'] ;?></td>
    <td><?php echo $zeile['ort'] ;?></td>
    <td><?php echo $zeile['land'] ;?></td>
    
  </tr>
  <?php endwhile;?>
  
</table>

</body>
</html>

<?php 
  require_once('../inc/footer.php');
?>







