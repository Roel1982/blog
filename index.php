<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welkom op mijn blog!</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
<?php include 'includes/header.php'; ?>
    <div class=blogtekst>
      <h1>
      <?php
      $openbestand = fopen("data/blogtitel.txt", "r") or die("Kan bestand niet openen!");
      echo fgets($openbestand,filesize("data/blogtitel.txt"));
      fclose($myfile);
      ?>
      </h1>

    <div class=auteur>
      <?php
      $openbestand = fopen("data/blogauteur.txt", "r") or die("Kan bestand niet openen!");
      echo fgets($openbestand,filesize("data/blogauteur.txt"));
      fclose($myfile);
      ?>
    </div>

    <div class=datum>
      <?php
      $openbestand = fopen("data/blogdatum.txt", "r") or die("Kan bestand niet openen!");
      echo fgets($openbestand,filesize("data/blogdatum.txt"));
      fclose($myfile);
      ?>
    </div>

    <div class=blogartikel>
      <?php
      $openbestand = fopen("data/blog.txt", "r") or die("Kan bestand niet openen!");
      echo fgets($openbestand,filesize("data/blog.txt"));
      fclose($myfile);
      ?>
    </div>
    </div>

    <div class=blogtekst>
      <h1>
      <?php
      $openbestand = fopen("data/blogtitel.txt", "r") or die("Kan bestand niet openen!");
      echo fgets($openbestand,filesize("data/blogtitel.txt"));
      fclose($myfile);
      ?>
      </h1>

    <div class=auteur>
      <?php
      $openbestand = fopen("data/blogauteur.txt", "r") or die("Kan bestand niet openen!");
      echo fgets($openbestand,filesize("data/blogauteur.txt"));
      fclose($myfile);
      ?>
    </div>

    <div class=datum>
      <?php
      $openbestand = fopen("data/blogdatum.txt", "r") or die("Kan bestand niet openen!");
      echo fgets($openbestand,filesize("data/blogdatum.txt"));
      fclose($myfile);
      ?>
    </div>

    <div class=blogartikel>
      <?php
      $openbestand = fopen("data/blog.txt", "r") or die("Kan bestand niet openen!");
      echo fgets($openbestand,filesize("data/blog.txt"));
      fclose($myfile);
      ?>
    </div>
    </div>

    <div class=blogtekst>
      <h1>
      <?php
      $openbestand = fopen("data/blogtitel.txt", "r") or die("Kan bestand niet openen!");
      echo fgets($openbestand,filesize("data/blogtitel.txt"));
      fclose($myfile);
      ?>
      </h1>

    <div class=auteur>
      <?php
      $openbestand = fopen("data/blogauteur.txt", "r") or die("Kan bestand niet openen!");
      echo fgets($openbestand,filesize("data/blogauteur.txt"));
      fclose($myfile);
      ?>
    </div>

    <div class=datum>
      <?php
      $openbestand = fopen("data/blogdatum.txt", "r") or die("Kan bestand niet openen!");
      echo fgets($openbestand,filesize("data/blogdatum.txt"));
      fclose($myfile);
      ?>
    </div>

    <div class=blogartikel>
      <?php
      $openbestand = fopen("data/blog.txt", "r") or die("Kan bestand niet openen!");
      echo fgets($openbestand,filesize("data/blog.txt"));
      fclose($myfile);
      ?>
    </div>
    </div>

<?php
  include 'includes/sidebar.php';
  include 'includes/footer.php';
?>

  </body>
</html>
