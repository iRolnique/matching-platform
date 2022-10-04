<?php
    session_start();

   require_once 'connect.php';
  
  $user_id = $_SESSION["id"];
  $projektart = $_POST['projektart'];
  $projektname = $_POST['projektname'];
  $projektort = $_POST['projektort'];
  $veranstaltungsart = $_POST['veranstaltungsart'];
  $pax = $_POST['pax'];
  $sex = $_POST['sex'];
  $age = $_POST['age'];
  $komment = $_POST['komment'];
 
  
  if (mysqli_query($connect, "INSERT INTO `event` 
  (`id`, `user_id`, `projektart`, `projektname`, `projektort`, `veranstaltungsart`, `pax`, `sex`, `age`, `komment`) 
  VALUES (NULL, '$user_id' , '$projektart', '$projektname', '$projektort', '$veranstaltungsart', '$pax', '$sex', '$age', '$komment')
   ")) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connect);
    } 

$wirt_verw_polit = $_POST['wirt_verw_polit'];
$werb_mark_ecomm = $_POST['werb_mark_ecomm'];
$gesund_pharm = $_POST['gesund_pharm'];
$it_edv = $_POST['it_edv'];
$verkehr_logistik = $_POST['verkehr_logistik'];
$tourismus_gastro = $_POST['tourismus_gastro'];
$medien = $_POST['medien'];
$tech_telekomm  = $_POST['tech_telekomm'];
$landwirt_umw_energ = $_POST['landwirt_umw_energ'];
$bau_architekt = $_POST['bau_architekt'];
$metall_mbau_elektro = $_POST['metall_mbau_elektro'];
$kunst_kult_mus  = $_POST['kunst_kult_mus'];
$dleistung_handwerk = $_POST['dleistung_handwerk'];
$sport_fit_fzeit = $_POST['sport_fit_fzeit'];
$sozi_päd = $_POST['sozi_paed'];
$sonstiges = $_POST['sonstiges'];

if ( mysqli_query($connect, "INSERT INTO `branchen` 
 (`id`, `user_id`, `wirt_verw_polit`, `werb_mark_ecomm`, `gesund_pharm`, `it_edv`, `verkehr_logistik`, `tourismus_gastro`, `medien`, `tech_telekomm`,  `landwirt_umw_energ`,  `bau_architekt`, `metall_mbau_elektro`, `kunst_kult_mus`, `dleistung_handwerk`, `sport_fit_fzeit`, `sozi_paed`, `sonstiges`) 
  VALUES (NULL, '$user_id' , '$wirt_verw_polit', '$werb_mark_ecomm', '$gesund_pharm', '$it_edv', '$verkehr_logistik', '$tourismus_gastro', '$medien', '$tech_telekomm', '$landwirt_umw_energ', '$bau_architekt', '$metall_mbau_elektro', '$kunst_kult_mus', '$dleistung_handwerk', '$sport_fit_fzeit', '$sozi_paed', '$sonstiges')
   ")) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }  

 //  $_SESSION['message'] = 'Ein neues Projekt wurde hinzugefügt';
 //  header('Location: /matchingplatform/php-auth/nav/event.php');

// echo ($query);
