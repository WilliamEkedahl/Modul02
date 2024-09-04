<!DOCTYPE html>
<html lang="no">
<head>
  <meta charset="UTF-8">
  <title>Oppgave 7</title>
</head>
<body>
<h1> Oppgave 7</h1>
<a href="index.html">Tilbake til hovedmenyen </a>
<pre>

</pre>
<form method ="post" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id ="oppgave6" name="oppgave6">
  Tall ett <input type="number" id = "tal1" name ="tal1" required /> <br/>
  Tall to <input type="number" id = "tal2" name ="tal2" required /> <br/>
  Tall tre <input type="number" id = "tal3" name ="tal3" required /> <br/>
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

  if ($tal1 > $tal2 && $tal2 > $tal3) {
    echo "Tall 1 er $tal1 <br/> Tall 2 er $tal2 <br/> Tall 3 er $tal3 <br/> <br/> Tall 1 er større enn Tall 2 <br/> Tall 1 er større en Tall 3 <br/> Tall 2 er større en Tall 3 rad1 ";
  } elseif ($tal1 === $tal2 && $tal2 === $tal3) {
    echo "Tall 1 er $tal1 <br/> Tall 2 er $tal2  <br/> Tall 3 er $tal3 <br/> <br/> Alla Tall er like store";
  } elseif ($tal1 < $tal2 && $tal2 < $tal3) {
    echo "Tall 1 er $tal1 <br/> Tall 2 er $tal2  <br/> Tall 3 er $tal3 <br/> <br/> Tall 1 er mindre en Tall 2 <br/> Tall 2 er mindre en Tall 3 <br/> Tall 3 er større en Tall 1 rad2";
  } elseif ($tal1 < $tal2 && $tal2 > $tal3) {
    echo "Tall 1 er $tal1 <br/> Tall 2 er $tal2 <br/> Tall 3 er $tal3<br/> <br/> Tall 1 er mindre en Tall 2 <br/> Tall 2 er større en Tall 3 <br/> Tall 3 er større en Tall 1 rad3";
  } elseif ($tal1 > $tal2 && $tal2 < $tal3) {
    echo "Tall 1 er $tal1 <br/> Tall 2 er $tal2 <br/> Tall 3 er $tal3<br/> <br/> Tall 1 er større en Tall 2 <br/> Tall 2 er mindre en Tall 3 <br/> Tall 3 er mindre en Tall 1 rad4";
  } elseif ($tal1 > $tal2 && $tal1 > $tal3) {
    echo "Tall 1 er $tal1 <br/> Tall 2 er $tal2 <br/> Tall 3 er $tal3<br/> <br/> Tall 1 er større en Tall 2 <br/> Tall 2 er mindre en Tall 3 <br/> Tall 3 er mindre en Tall 1 rad5";
  } elseif ($tal1 > $tal2 && $tal1 < $tal3) {
    echo "Tall 1 er $tal1 <br/> Tall 2 er $tal2 <br/> Tall 3 er $tal3<br/> <br/> Tall 1 er større en Tall 2 <br/> Tall 2 er mindre en Tall 3 <br/> Tall 3 større en Tall 1 rad6";
  } elseif ($tal1 > $tal2 && $tal2 < $tal3) {
    echo "Tall 1 er $tal1 <br/> Tall 2 er $tal2 <br/> Tall 3 er $tal3<br/> <br/> Tall 1 er større en Tall 2 <br/> Tall 2 er mindre en Tall 3 <br/> Tall 3 er mindre en Tall 1 rad7";
  } elseif ($tal1 === $tal2 && $tal3 < $tal2 ){
    echo "Tall 1 er $tal1 <br/> Tall 2 er $tal2 <br/> Tall 3 er $tal3<br/> <br/> Tall 1 och Tall 2 er like store, Tall 3 er mindre en tall 1 og 2";
  } elseif ($tal2 === $tal3 && $tal1 < $tal2 ){
    echo "Tall 1 er $tal1 <br/> Tall 2 er $tal2 <br/> Tall 3 er $tal3<br/> <br/> Tall 2 och Tall 3 er like store, Tall 1 er mindre en tall 2 og 3";
  } elseif ($tal1 === $tal3 && $tal2 < $tal3 ){
    echo "Tall 1 er $tal1 <br/> Tall 2 er $tal2 <br/> Tall 3 er $tal3<br/> <br/> Tall 1 och Tall 3 er like store, Tall 2 er mindre en tall 1 og 3";
  } elseif ($tal1 === $tal2 && $tal3 > $tal2 ){
    echo "Tall 1 er $tal1 <br/> Tall 2 er $tal2 <br/> Tall 3 er $tal3<br/> <br/> Tall 1 och Tall 2 er like store, Tall 3 er større en tall 1 og 2";
  } elseif ($tal2 === $tal3 && $tal1 > $tal2 ){
    echo "Tall 1 er $tal1 <br/> Tall 2 er $tal2 <br/> Tall 3 er $tal3<br/> <br/> Tall 2 och Tall 3 er like store, Tall 1 er større en tall 2 og 3";
  } elseif ($tal1 === $tal3 && $tal2 > $tal3 ){
    echo "Tall 1 er $tal1 <br/> Tall 2 er $tal2 <br/> Tall 3 er $tal3<br/> <br/> Tall 1 och Tall 3 er like store, Tall 2 er større en tall 1 og 3";
  } else {
    echo "Det har blivit ett logiskt feil, skriv et nytt tall.";
  }
}
?>
