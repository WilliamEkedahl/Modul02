<!DOCTYPE html>
<html lang="no">
<head>
  <meta charset="UTF-8">
  <title>Oppgave 3</title>
</head>
<body>
<h1> Oppgave 3</h1>
<a href="index.html" as="tilbake til hovedmenyen"> Tilbake til hovedmenyen </a>
<pre>

</pre>
<form method ="post" action =""<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id ="oppgave3" name="oppgave3">
Er du student? <input type="text" id = "svar" name ="svar"  /> <br/>
<input type ="submit" value ="Fortsett" id ="fortsett" name ="fortsett" />
<input type ="reset" value ="Nullstill" id ="" name ="nullstill" /> <br/>
</form>
</body>
</html>

<?php
$Ja = array("j","ja");
$Nei = array("n", "nei");


if (isset($_POST["fortsett"])) {
  $svar = strtolower(trim( $_POST["svar"]));

  if (empty($svar)) {
    echo "Du har ikke svart på spørsmålet om du er student.";
  } else if (in_array($svar, $Ja)) {
    echo "Du har svart ja på spørsmålet om du er student.";
  } else if (in_array($svar, $Nei)) {
    echo "Du har svart nei på spørsmålet om du er student.";
  } else {
    echo "Du har ikke svart ja eller nei på spørsmålet om du er student.";
  }
}
?>
