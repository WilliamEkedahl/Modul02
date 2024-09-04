<!DOCTYPE html>
<html lang="no">
<head>
  <meta charset="UTF-8">
  <title>Oppgave 6</title>
</head>
<body>
<h1> Oppgave 6</h1>
<a href="index.html">Tilbake til hovedmenyen </a>
<pre>

</pre>
<form method ="post" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id ="oppgave6" name="oppgave6">
  Skriv et tall <input type="number" id = "Tall1" name ="tall1" required /> <br/>
  Skriv et til tall <input type="number" id = "tall2" name ="tall2" required /> <br/>
  <input type ="submit" value ="Fortsett" id ="fortsett" name ="fortsett" />
  <input type ="reset" value ="Nullstill" id ="nullstill" name ="nullstill" /> <br/>
</form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $tall1 = isset($_POST["tall1"]) ? (int)$_POST["tall1"] : 0;
  $tall2 = isset($_POST["tall2"]) ? (int)$_POST["tall2"] : 0;

  if ($tall1 > $tall2) {
    echo "Tall 1 er $tall1 <br/> Tall 2 er $tall2 <br/> <br/> Tall 1 er større enn Tall 2 ";
  } elseif ($tall2 === $tall1) {
    echo "Tall 1 er $tall1 <br/> Tall 2 er $tall2 <br/> <br/> Tall 1 er lik Tall 2";
  } else {
    echo "Tall 1 er $tall1 <br/> Tall 2 er $tall2 <br/> <br/> Tall 1 er mindre en Tall 2";
  }
}
?>
