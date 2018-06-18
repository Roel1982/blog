<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Roel's Blog</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  </head>
  <body>

    <div class="inlog">
      <h2>Admin Roel's Blog</h2>
      <form method="post" action="verstuur.php">
        <b>Titel van blog:</b>  <input type="text" name="blogtitel" align="left"></input><br /><br />
        <b>Auteur:</b> <input type="text" name="auteur" align="left"></input><br /><br />
        <b>Datum: </b><input type="date" name="datum" align="left"></input><br /><br />
        <b>Blogtekst:</b> <textarea name="bericht" rows="10" cols="30" align="left">Voer hier je blog in</textarea><br /><br />
        <button onclick="submit">Verstuur</button>
      </form>
    </div>

  </body>
</html>
