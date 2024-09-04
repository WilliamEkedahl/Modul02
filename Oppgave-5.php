<!DOCTYPE html>
<html lang="no">
<head>
  <meta charset="UTF-8">
  <title>Oppgave 5</title>
</head>
<body>
<h1>Oppgave 5</h1>
<a href="index.html">Tilbake til hovedmenyen </a>
<pre>

</pre>
<form method ="post" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id ="oppgave5" name="oppgave5">
  Skriv et tall  <input type="number" id = "tal1" name ="tal1" required /> <br/>
  Skriv et til tall  <input type="number" id = "tal2" name ="tal2" required /> <br/>
  Skriv et tall mellom 1-4 for å velge regneoperasjon, 1=addisjon, 2=subtraksjon, 3=multiplikasjon, 4=divisjon) <input type="number" id = "tal3" name ="tal3" required /> <br/>
  <input type ="submit" value ="Fortsett" id ="fortsett" name ="fortsett" />
  <input type ="reset" value ="Nullstill" id ="nullstill" name ="nullstill" /> <br/>
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $tal1 = isset($_POST["tal1"]) ? (int)$_POST["tal1"] : 0;
  $tal2 = isset($_POST["tal2"]) ? (int)$_POST["tal2"] : 0;
  $tal3 = isset($_POST["tal3"]) ? (int)$_POST["tal3"] : 0;
  if ($tal3 === 1){
    echo "Tall 1 er $tal1 <br/> Tall 2 er $tal2 <br/> <br/> Regneoperasjonen er addisjon <br/> Resultatet av regneoperasjonen er " . ($tal1 + $tal2);
  } elseif ($tal3 === 2){
    echo "Tall 1 er $tal1 <br/> Tall 2 er $tal2 <br/> <br/> Regneoperasjonen er subrtaksjon <br/> Resultatet av regneoperasjonen er " . ($tal1 - $tal2);
  } elseif ($tal3 === 3){
    echo "Tall 1 er $tal1 <br/> Tall 2 er $tal2 <br/> <br/> Regneoperasjonen er multiplikasjon <br/> Resultatet av regneoperasjonen er " . ($tal1 * $tal2);
  } elseif ($tal3 === 4){
    if ($tal2 != 0) {
      echo "Tall 1 er $tal1 <br/> Tall 2 er $tal2 <br/> <br/> Regneoperasjonen er divisjon <br/> Resultatet av regneoperasjonen er " . ($tal1 / $tal2);
    } else {
      echo "kan ikke dele med 0.";
    }
  } else {
    echo "Ugyldig regneoperasjon valgt.";
  }
}
?>
