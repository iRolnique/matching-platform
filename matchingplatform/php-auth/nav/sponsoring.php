<?php
session_start();
require_once('../inc/config.php');
require_once('../inc/header.php');

?>
<br>

<p align="left">
  Unter Sponsoring verstehen wir ein Geschäftsmodell, welches auf Leistung und Gegenleistung beruht. Wir als Sponsor fördern eine Organisation, eine Gruppe oder eine Person mit Medien-, Sach- oder Dienstleistungen. Sponsoring kann im sportlichen, medialen, kulturellen oder im sozialem Umfeld stattfinden. Ziele sind die Steigerung von Bekanntheit, Sympathie und Image, sowie die Verbesserung von Marketing- Vertriebsziele, Umsatz, Absatz und Gewinn.
</p>
<br>
<img src="../assets/img/sponsoring1.jpg" width=800; border-radius=4px; align="right">

<body>
  <!--Registration Form-->
  <div class="container">
    <form action="../inc/db_sponsoring.php" method="post" enctype="multipart/form-data">
      <div class="form-group" style="width: 250px;">
        <p><b>Deine Organisation oder Verein</b></p>
        <input type="text" class="form-control" name="organisation" id="organisation" placeholder="Organisation/Verein">
        <input type="text" class="form-control" name="strasse" id="strasse" placeholder="Straße"></a>
        <input type="text" class="form-control" name="hausnummer" id="hausnummer" placeholder="Hausnummer"></a>
        <input type="text" class="form-control" name="plz" id="plz" placeholder="PLZ"></a>
        <input type="text" class="form-control" name="ort" id="ort" placeholder="Ort"></a>
        <input type="text" class="form-control" name="land" id="land" placeholder="Land"></a>
        <br>
        <!-- KOMMENTARFELD -->
        <div>
          <label for="text"> <b>Beschreibe deine Organisation</b></label>
          <textarea id="text" type="text" name="beschreibung" cols="35" rows="4" maxlength="160"></textarea>
        </div>
        <br>
        <p> <b>Ansprechpartner</b> </p>
        <input type="text" class="form-control" name="ap_vorname" id="vorname" placeholder="Vorname">
        <input type="text" class="form-control" name="ap_nachname" id="nachname" placeholder="Nachname">
        <input type="text" class="form-control" name="ap_telefonnummer" id="telefonnummer" placeholder="Telefonnummer"></a>
        <input type="email" class="form-control" name="ap_email" id="email" placeholder="E-Mail">
      </div>
      <p> <b>In welchem Sponsoringfeld befindet sich das Projekt?</b> </p>
      <select input type="text" name="sponsoringfeld">
        <option value="Kunst/Kultur">Kunst/Kultur</option>
        <option value="Sport">Sport</option>
        <option value="Soziales">Soziales</option>
        <option value="Bildung/Wissenschaft">Bildung/Wissenschaft</option>
        <option value="Sonstiges">Sonstiges</option>
      </select>
      <br>
      <p> <b>Um welche Art von Sponsoring handelt es sich?</b> </p>
      <select input type="text" name="sponsoringart">
        <option value="Event/Veranstaltung">Event/Veranstaltung</option>
        <option value="Einzelperson">Einzelperson</option>
        <option value="Verein/Verband/Institution">Verein/Verband/Institution</option>
        <option value="Wettbewerbe">Wettbewerbe</option>
        <option value="Team/Gruppe">Team/Gruppe</option>
        <option value="Region/Landkreis">Region/Landkreis</option>
        <option value="Einrichtung/Location">Einrichtung/Location</option>
        <option value="Sonstiges">Sonstiges</option>
      </select>
      <br>
      <button type="submit" class="btn btn-primary">senden</button>
  </div>
  <p>
    <!-- Sind Sie bereits unser Kunde? - <a href="/matchingplatform/index.php">Anmelden-</a> -->
  </p>
  <?php
          if (isset($_SESSION['message'])){
            echo ' <p class="msg"> ' . $_SESSION['message'] . ' </p>';
          }
          unset($_SESSION['message']);
   ?> 
  </form>
</body>
</html>
<?php
  require_once('../inc/footer.php');
?>