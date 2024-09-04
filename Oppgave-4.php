<!DOCTYPE html>
<html lang="no">
<head>
  <meta charset="UTF-8">
  <title>Oppgave 4</title>
</head>
<body>
<h1> Oppgave 4 </h1>
<a href="index.html"> Tilbake til hovedmenyen </a>
<pre>

</pre>
<form method ="post" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id ="barn" name="barn">
  Har du barn (j/n) ? <input type="text" id = "svar1" name ="svar1" required /> <br/>
  Er du gift (j/n) ? <input type="text" id = "svar2" name ="svar2" required  /> <br/>
  <input type ="submit" value ="Fortsett" id ="fortsett" name ="fortsett" />
  <input type ="reset" value ="Nullstill" id ="nullstill" name ="nullstill" /> <br/>
</body>
</html>

<?php
if ($_SERVER ["REQUEST_METHOD"] === "POST"){  /* using Super global variable SERVER */
  $svar1 = isset($_POST["svar1"]) ? strtolower(trim($_POST["svar1"])) : ''; /* tenery operation if post then do strtolower(trim($_POST["svar1"])) else do nothing*/
  $svar2 = isset($_POST["svar2"]) ? strtolower(trim($_POST["svar2"])) : '';

  if (empty($svar1)|| empty($svar2)) {
    echo "<p> Du har ikke fylt ut begge feltene </p>";
  } elseif (($svar1 !== "j" && $svar1 !== "n") || ($svar2 !== "j" && $svar2 !== "n")) {
    echo "<p> Begge svarene må være enten j eller n </p>";
  }
  else {
    /*Bruker === streng sammenligning for og ikke acceptere noen typekonvertering*/
    if ($svar1 === "j" && $svar2 === "j") {
      echo "<p> Du er gift og har barn </p>";
    } elseif ($svar1 === "n" && $svar2 === "n") {
      echo "<p> Du er ikke gift og har ikke barn </P>";
    } elseif ($svar1 === "j" && $svar2 === "n") {
      echo "<p> Du er gift og har ikke barn </p>";
    } elseif ($svar1 === "n" && $svar2 === "j") {
      echo "<p> Du er ikke gift og har barn </p>";
    }
  }
}
?>
