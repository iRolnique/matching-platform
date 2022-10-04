<!-- <?php
    session_start();

    require_once 'connect.php';
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
    $passwort_confirm = $_POST['passwort_confirm'];
 
 
    $query = "INSERT INTO `login` 
    (`id`, `email`, `passwort`) 
    VALUES (NULL, '$email', '$passwort')";

    mysqli_query($connect, "INSERT INTO `login` (`id`, `email`, `passwort`) 
    VALUES (NULL, '$email', '$passwort')"
    ); 

    $_SESSION['message'] = 'Sie haben sich erfolgreich angemeldet';
    header('Location: /matchingplatform/index.php');
// echo ($query);
?> -->