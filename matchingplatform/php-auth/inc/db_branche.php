<?php
    session_start();

   require_once 'connect.php';
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
  $sozi_päd = $_POST['sozi_päd'];
  $sonstiges = $_POST['sonstiges'];
 
 
    $query = "INSERT INTO `branchen` 
    (`id`, `wirt_verw_polit`, `werb_mark_ecomm`, `gesund_pharm`, `it_edv`, `verkehr_logistik`, `tourismus_gastro`, `medien`, `tech_telekomm`,  `landwirt_umw_energ`,  `bau_architekt`, `metall_mbau_elektro`, `kunst_kult_mus`, `dleistung_handwerk`, `sport_fit_fzeit`, `sozi_päd`, `sonstiges`) 
    VALUES (NULL, '$wirt_verw_polit', '$werb_mark_ecomm', '$gesund_pharm', '$it_edv', '$verkehr_logistik', '$tourismus_gastro', '$medien', '$tech_telekomm', '$landwirt_umw_energ', '$bau_architekt', '$metall_mbau_elektro', '$kunst_kult_mus', '$dleistung_handwerk', '$sport_fit_fzeit', '$sozi_päd', $sonstiges)
    "; 
   mysqli_query($connect, "INSERT INTO `branchen` 
   (`id`, `wirt_verw_polit`, `werb_mark_ecomm`, `gesund_pharm`, `it_edv`, `verkehr_logistik`, `tourismus_gastro`, `medien`, `tech_telekomm`,  `landwirt_umw_energ`,  `bau_architekt`, `metall_mbau_elektro`, `kunst_kult_mus`, `dleistung_handwerk`, `sport_fit_fzeit`, `sozi_päd`, `sonstiges`) 
    VALUES (NULL, '$wirt_verw_polit', '$werb_mark_ecomm', '$gesund_pharm', '$it_edv', '$verkehr_logistik', '$tourismus_gastro', '$medien', '$tech_telekomm', '$landwirt_umw_energ', '$bau_architekt', '$metall_mbau_elektro', '$kunst_kult_mus', '$dleistung_handwerk', '$sport_fit_fzeit', '$sozi_päd', $sonstiges)
   "); 

   $_SESSION['message'] = 'Die ausgewählte/n Branche/n wurde/n hinzugefügt';
   header('Location: /matchingplatform/php-auth/nav/branche.php');

// echo ($query);

?>