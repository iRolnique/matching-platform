<?php
// require_once('./php-auth/inc/config.php');
// require_once('./inc/header.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authentifizierung und Anmeldung</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="/php-auth/assets/css/main.css">
</head>

<body>
  <!--Registration Form-->
  <div class="container">
    <?php
    $f = NULL;
    if (isset($_GET['f'])) {
      $f = $_GET['f'];
    }
    if ($f == 'ok') {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>OK!</strong> Nutzer wurde Erfolgreich angelegt und darüber benachrichtigt!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    } elseif ($f == 'fail') {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>FAIL!</strong> Nutzer wurde NICHT Erfolgreich angelegt und NICHT darüber benachrichtigt dass er angelegt wurde!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }

    ?>
    <form action="./registration.php?f=confirm" method="post">
      <select input type="text" name="status">
        <option value="1">Entwickler-Modus</option>
        <option value="2">Sponsor</option>
        <option value="3">Veranstalter</option>
      </select>
      <div class="form-group" style="width: 250px;">
        <input type="text" class="form-control" name="vorname" id="vorname" placeholder="Vorname">
        <input type="text" class="form-control" name="nachname" id="nachname" placeholder="Nachname">
        <input type="text" class="form-control" name="firmenname" id="firmenname" placeholder="Firmenname">
        <input type="text" class="form-control" name="strasse" id="strasse" placeholder="Straße"></a>
        <input type="text" class="form-control" name="hausnummer" id="hausnummer" placeholder="Hausnummer"></a>
        <input type="number" class="form-control" name="plz" id="plz" placeholder="PLZ"></a>
        <input type="text" class="form-control" name="ort" id="ort" placeholder="Ort"></a>
        <input type="text" class="form-control" name="land" id="land" placeholder="Land"></a>
        <input type="text" class="form-control" name="telefonnummer" id="telefonnummer" placeholder="Telefonnummer"></a>
        <input type="email" class="form-control" name="email" id="email" placeholder="E-Mail">
      </div>
      <button type="submit" class="btn btn-primary">anmelden</button>
  </div>
  </form>
  <?php
  if ($f == 'confirm') {
    require_once './php-auth/inc/connect.php';
    $status = $_POST['status'];
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $firmenname = $_POST['firmenname'];
    $strasse = $_POST['strasse'];
    $hausnummer = $_POST['hausnummer'];
    $plz = $_POST['plz'];
    $ort = $_POST['ort'];
    $land = $_POST['land'];
    $telefonnummer = $_POST['telefonnummer'];
    $email = $_POST['email'];
    $passwort_reset_code = md5(time());
    mysqli_query($connect, "INSERT INTO `user` 
      (`id`, `status`, `vorname`, `nachname`, `firmenname`, `strasse`, `hausnummer`, `plz`, `ort`, `land`, `telefonnummer`, `email`, `passwort_reset_code`) 
      VALUES (NULL, '$status', '$vorname', '$nachname', '$firmenname', '$strasse', '$hausnummer', '$plz', '$ort', '$land', '$telefonnummer', '$email', '$passwort_reset_code')
      ");

    // ToDo: Email an Nutzer senden...


    // require 'phpmailer/PHPMailerAutolad.php';
    // // Instanz des PHPMAilers
    // $email = new PHPMailer();
    // // Empfänger
    // $email->addAddress (address: '', name: '');
    // // Absender
    // $email->setForm (address: '', name: '');
    // // set Subject
    // $email->Subject = "Test email";

    // //type of email
    // $email->isHTML(isHTML: true);

    // //write email
    // $email->Body = "<p>this is our email body</p><br><br><a href='http://google.com'>Google</a>" ;

    // //mail versenden
    // if (!$email->send())
    //   echo "Da ist was schief gegangen";
    //   else
    //   echo "Mail wurde versendet";
    //--------------------------------------------------------------

    // 2te Möglichkeit E-Mail zu verchicken

    // echo "Mail verschicken";

    // $to = "name@provider.com";
    // $subject = "E-Mail Test";
    // $message = "Test Mail";
    // $from = "From: <noreply@provider.com>";

    // if (mail($to, $subject, $message, $from)) {
    //   echo "E-Mail gesendet!";
    // }else {
    //   echo "Fehler beim Senden!";
    // }
    //------------------------------------------------------------

    // 3te Möglichkeit E-Mails zu verschicken

    // $empfaenger = "empfaenger@example.com"; // Mailadresse
    // $absender   = "absender@example.com";
    // $betreff    = "PHP-Mail-Test";
    // $mailtext   = "Inhalt einer Mail zum Test von PHP";
    // $antwortan  = "antworten_an@example.com";

    // mail( $empfaenger,
    //       $betreff,
    //       $mailtext,
    //       "From: $absender\nReply-To: $antwortan");

    // echo "Mail wurde gesendet!";

    //------------------------------------------------------------

    // 4te Möglichkeit E-Mails zu verschicken



    // $empfaenger='igor_rolnik@yahoo.de';
    // $subject = 'Anmeldung';
    // $kunde = 'Iggy Rolnik';
    // $link = 'http://localhost/matchingplatform/index.php';
    // $message = 'Sehr geehrter Herr '.$kunde.',

    // Hier ist Ihr Link: '.$link.'

    // mit freundlichen Grüßen';

    // // Header basteln
    // $mail_header  = "MIME-Version: 1.0\r\n";
    // $mail_header .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    // $mail_header .= "From: Iggy <igor_rolnik@yahoo.de>\r\n";

    // //mail schicken
    // mail($empfaenger,$subject,$message,$mail_header);

    // echo "Script abgearbeitet";
header('Location: ./registration.php?f=ok');
  }
  ?>
</body>

</html>