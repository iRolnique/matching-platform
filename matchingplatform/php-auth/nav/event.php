<?php
  session_start();

  require_once('../inc/config.php');

  require_once('../inc/header.php');

  
?>

<?php 
  // require_once('profil.php');
?>

<br>
<img src="../assets/img/projekt.jpg" width=800; align="right">

<form action="../inc/db_event.php" method="post" enctype="multipart/form-data">


<fieldset>
    <p> <b>Wählen Sie bitte die Projektart</b> </p>

    <div>
      <input type="radio" name = "projektart" value="kommerziell">
      <label for="projektart">kommerziell</label>
    </div>

    <div>
      <input type="radio" name = "projektart" value="wohltaetig">
      <label for="projektart">wohltätig</label>
    </div> <br>

</fieldset>





<!-- <select input type="text" name="projektart" Placeholder="Bitte auswählen">
  <option>Projektart</option>
  <option>kommerziell</option>
  <option>wohltätig</option>
  
</select> -->

  <div class ="Projekt">
    <input type="text" class="form-control" name="projektname" placeholder="Projektname">
    <input type="text" class="form-control"  name="projektort" placeholder="Projektort">
  </div> <br>


  <fieldset>
    <p> <b>Wählen Sie bitte die Veranstaltungsart:</b> </p>

    <div>
      <input type="radio" name = "veranstaltungsart" id="messe" value="messe">
      <label for="messe">Messe</label>
    </div>

    <div>
      <input type="radio" name = "veranstaltungsart" id="congress" value="congress">
      <label for="congress">Congress</label>
    </div>

    <div>
      <input type="radio" name = "veranstaltungsart" id="konzert" value="konzert">
      <label for="konzert">Konzert</label>
    </div>

    <div>
      <input type="radio" name = "veranstaltungsart" id="konferenz" value="konferenz">
      <label for="konferenz">Konferenz</label>
    </div>
</fieldset>
<br>


<!-- -->
<details>

<summary>
    ➕

</summary>
<fieldset>
    <p> <b>zu erwartende Personanzahl:</b> </p>

    <div class="accordion-body">

    <div>
      <input type="radio" name="pax" id="pax" value="0 - 20 Pax">
      <label for="pax">0 - 20 Personen</label>
    </div>

    <div>
      <input type="radio" name="pax" id="pax" value="21 - 100 Pax">
      <label for="pax">21 - 100 Personen</label>
    </div>

    <div>
      <input type="radio" name="pax" id="pax" value="101 - 500 Pax">
      <label for="pax">101 - 500 Personen</label>
    </div>

    <div>
      <input type="radio" name="pax" id="pax" value="ueber 501 Pax">
      <label for="pax">501 - 1000 Personen</label>
    </div>

    <div>
      <input type="radio" name="pax" id="pax" value="ueber 1001 Pax">
      <label for="pax">1001 - 2000 Personen</label>
    </div>

    <div>
      <input type="radio" name="pax" id="pax" value="ueber 2001 Pax">
      <label for="pax">2001 - 5000 Personen</label>
    </div>

    </div>

</fieldset>
</details>
<br>

<!-- ZIELGRUPPE -->

<details>
<summary>
    ➕

</summary>
<fieldset>
    <p> <b>Zielgruppe:</b> </p>

    <div>
      <input type="radio" name="sex" id="men" value="m">
      <label for="men">männlich</label>
    </div>

    <div>
      <input type="radio" name="sex" id="women" value="f">
      <label for="women">weiblich</label>
    </div>

    <div>
      <input type="radio" name="sex" id="diverse" value="d">
      <label for="diverse">diverse</label>
    </div>

    <div>
      <input type="radio" name="sex" id="alle" value="alle">
      <label for="alle">alle</label>
    </div>
</fieldset>
</details>
<br>

<!-- ALTERSGRUPPE -->

<details>
<summary>
    ➕

</summary>
<fieldset>
    <p> <b>Altersgruppe:</b> </p>

    <div>
      <input type="radio" id="group1" name="age" value="6-14">
      <label for="group1"> 6 - 14 Jahre</label>
    </div>

    <div>
      <input type="radio" id="group2" name="age" value="15-20">
      <label for="group2">15 - 20 Jahre</label>
    </div>

    <div>
      <input type="radio" id="group3" name="age" value="21-34">
      <label for="group3">21 - 34 Jahre</label>
    </div>

    <div>
      <input type="radio" id="group3" name="age" value="35-67">
      <label for="group3">35 - 67 Jahre</label>
    </div>

    <div>
      <input type="radio" id="altersunabhaengig" name="age" value="altersunabhaengig">
      <label for="altersunabhaengig">altersunabhängig</label>
    </div>
</fieldset>
</details>
<br>
<p> <b>Branchen fürs Matching</b> </p>   

   <span class="kategorie">
  <input name="kategorie[]" name="wirt_verw_polit" type="checkbox" id="A1" value="wirt_verw_polit">
  <label for="A1">Wirtschaft, Verwaltung, Politik</label>
  </span>
  <span class="kategorie">
  <input name="kategorie[]" name="werb_mark_ecomm" type="checkbox" id="A2" value="werb_mark_ecomm">
  <label for="A2">Werbung, Marketing, e-Commerce</label>
  </span>
  <span class="kategorie">
  <input name="kategorie[]" name="gesund_pharm" type="checkbox" id="A3" value="gesund_pharm">
  <label for="A3">Gesundheit & Pharma</label>
  </span>
  <span class="kategorie">
  <input name="kategorie[]" name="it_edv" type="checkbox" id="A4" value="it_edv">
  <label for="A4">IT, Computer, EDV</label>
  </span>
  <span class="kategorie">
  <input name="verkehr_logistik" name="verkehr_logistik" type="checkbox" id="A5" value="verkehr_logistik">
  <label for="A5">Verkehr & Logistik</label>
  </span>
  <span class="kategorie">
  <input name="kategorie[]" name="tourismus_gastro" type="checkbox" id="A6" value="tourismus_gastro">
  <label for="A6">Tourismus & Gastronomie</label>
  </span>
  <span class="kategorie">
  <input name="kategorie[]" name="medien" type="checkbox" id="A7" value="medien">
  <label for="A7">Medien</label>
  </span>
  <span class="kategorie">
  <input name="kategorie[]" name="tech_telekomm" type="checkbox" id="A8" value="tech_telekomm">
  <label for="A8">Technik & Telekommunikation</label>
  </span>
  <span class="kategorie">
  <input name="kategorie[]" name="landwirt_umw_energ" type="checkbox" id="A9" value="landwirt_umw_energ">
  <label for="A9">Landwirtschaft, Umwelt, Energie </label>
  </span>
  <span class="kategorie">
  <input name="kategorie[]" name="bau_architekt" type="checkbox" id="A10" value="bau_architekt">
  <label for="A10">Bau, Architektur</label>
  </span>
  <span class="kategorie">
  <input name="kategorie[]" name="metall_mbau_elektro" type="checkbox" id="A11" value="metall_mbau_elektro">
  <label for="A11">Metall, Maschinenbau, Elektro</label>
  </span>
  <span class="kategorie">
  <input name="kategorie[]" name="kunst_kult_mus" type="checkbox" id="A12" value="kunst_kult_mus">
  <label for="A12">Kunst, Kultur, Musik</label>
  </span>
  <span class="kategorie">
  <input name="kategorie[]" name="dleistung_handwerk" type="checkbox" id="A13" value="dleistung_handwerk">
  <label for="A13">Dienstleistungen & Handwerk</label>
  </span>
  <span class="kategorie">
  <input name="kategorie[]" name="sport_fit_fzeit" type="checkbox" id="A14" value="sport_fit_fzeit">
  <label for="A14">Sport, Fitness, Freizeit</label>
  </span>
  <span class="kategorie">
  <input name="kategorie[]" name="sozi_paed" type="checkbox" id="A15" value="sozi_paed">
  <label for="A15">Soziales, Pädagogik</label>
  </span>
  <span class="kategorie">
  <input name="kategorie[]" name="sonstiges" type="checkbox" id="A16" value="sonstiges">
  <label for="A15">Sonstiges</label>
  </span>

     <!-- KOMMENTARFELD -->
     <div>  
      <label for="text"> <b>Hier können Sie Ihr Kommentar hinterlassen:</b> </label>
      <textarea id="text" type="text" name="komment" cols="35" rows="4" maxlength="160"></textarea> 
   </div> 


  <input type="submit" value="Event hinzufügen" name="Event hinzufügen">

  
    <?php

        if (isset($_SESSION['message'])){
          echo ' <p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
       unset ($_SESSION['message']);
      ?>

</form>

<?php
  require_once('../inc/footer.php');
?>





