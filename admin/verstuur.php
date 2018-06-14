<?php
$blogtitel = $_REQUEST["blogtitel"];
$auteur = $_REQUEST["auteur"];
$datum = $_REQUEST["datum"];
$bericht = $_REQUEST["bericht"];
file_put_contents("../data/blogtitel.txt",$blogtitel . "\r\n\r\n",FILE_APPEND);
file_put_contents("../data/blogauteur.txt",$auteur . "\r\n\r\n",FILE_APPEND);
file_put_contents("../data/blogdatum.txt",$datum . "\r\n\r\n",FILE_APPEND);
file_put_contents("../data/blog.txt",$bericht . "\r\n\r\n",FILE_APPEND);
echo "Je blog is geplaatst!";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body><br /><br />
    <a href="../admin/index.php">Keer terug naar admin</a>
  </body>
</html>
