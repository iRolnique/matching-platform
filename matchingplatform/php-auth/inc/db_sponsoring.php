<?php
    session_start();
    require_once 'connect.php';
?>
<?php
   $user_id = $_SESSION["id"]; 
   $organisation = $_POST['organisation'];
   $strasse = $_POST['strasse'];
   $hausnummer = $_POST['hausnummer'];
   $plz = $_POST['plz'];
   $ort = $_POST['ort'];
   $land = $_POST['land'];
   $beschreibung = $_POST['beschreibung'];
   $ap_vorname = $_POST['ap_vorname'];
   $ap_nachname = $_POST['ap_nachname'];
   $ap_telefonnummer = $_POST['ap_telefonnummer'];
   $ap_email = $_POST['ap_email'];
   $sponsoringfeld = $_POST['sponsoringfeld'];
   $sponsoringart = $_POST['sponsoringart'];
  
    //  $query = "INSERT INTO `sponsoring` (`id`, `organisation`, `strasse`, `hausnummer`, `plz`, `ort`, `land`, `beschreibung`, `ap_vorname`, `ap_nachname`, `ap_telefonnummer`, `ap_email`, `sponsoringfeld`, `sponsoringart`) 
    //  VALUES (NULL, '$id', '$organisation', '$strasse', '$hausnummer', '$plz', '$ort', '$land', '$beschreibung', '$ap_vorname', '$ap_nachname', '$ap_telefonnummer', '$ap_email', '$sponsoringfeld', '$sponsoringart')
    //  "; 
    if (mysqli_query($connect, "INSERT INTO `sponsoring` (`id`, `user_id`, `organisation`, `strasse`, `hausnummer`, `plz`, `ort`, `land`, `beschreibung`, `ap_vorname`, `ap_nachname`, `ap_telefonnummer`, `ap_email`, `sponsoringfeld`, `sponsoringart`) 
    VALUES (NULL, '$user_id', '$organisation', '$strasse', '$hausnummer', '$plz', '$ort', '$land', '$beschreibung', '$ap_vorname', '$ap_nachname', '$ap_telefonnummer', '$ap_email', '$sponsoringfeld', '$sponsoringart')
    ")) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }
    
 
    // $_SESSION['message'] = '#';
    header('Location: /matchingplatform/php-auth/nav/sponsoring.php');
?>

