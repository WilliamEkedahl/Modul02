<!DOCTYPE html>
<html lang="no">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>
<body>
<h1> Oppgave 2 </h1>
<a href="index.html"> Tilbake til hovedmenyen </a>
<pre>

</pre>
<form method ="post" action ="" id ="oppgave2" name="oppgave2">
  Er du student (j/n)? <input type="text" id = "svar" name ="svar" /> <br/>
  <input type ="submit" value ="Fortsett" id ="fortsett" name ="fortsett" />
  <input type ="reset" value ="Nullstill" id ="" name ="nullstill" /> <br/>
</form>
</body>
</html>

<?php
if (isset($_POST['fortsett'])) {
  $svar = strtolower(trim( $_POST["svar"]));
  if ($svar == "j") {
    echo "det er svart j på spørsmålet";

  } else if ($svar == "n"){
    echo "det er svart n på spørsmålet";

  } else if ($svar != "j" || $svar != "n"){
    echo "det er ikke svart varken j eller n på spørsmålet";
  } else if (!$svar) {
    echo "Det er ikke svart på spørsmålet";
  }
}

