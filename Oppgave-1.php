<!DOCTYPE html>
<html lang="no">
<head>
  <meta charset="UTF-8">
  <title>Oppgave 1</title>
</head>
<body>
<h1> Oppgave 1  </h1>
<a href="index.html"> Tilbake til hovedmenyen </a>
<pre>

</pre>
<form method ="post" action ="" id ="oppgave1" name ="oppgave1">
  Hva er 3 ganger 3 <input type ="text" id ="svar" name ="svar" required /> <br/>
  <input type ="submit" value ="Fortsett" id ="fortsett" name ="fortsett" />
  <input type ="reset" value ="Nullstill" id ="nullstill" name ="nullstill" /> <br/>
</form>
</body>
</html>


<?php
if(isset($_POST["fortsett"])){
  $svar = strtolower(trim( $_POST["svar"]));

  if ($svar==9){
    echo "Riktig. 3 ganger 3 er 9";
  } else {
    echo "Feil. 3 ganger 3 er ikke $svar. 3 ganger 3 er 9.";
  }
}
?>
