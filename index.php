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
        $file = array_reverse( file( 'data/blogtitel.txt' ) );
        $limit = 1;
        for ($i = 0; $i <= $limit; $i++ ){
        echo $file[$i] . "\n";
        }
     ?>
    </h1>



  <div class=auteur>
      <?php
        $file = array_reverse( file( 'data/blogauteur.txt' ) );
        $limit = 1;
        for ($i = 0; $i <= $limit; $i++ ){
        echo $file[$i] . "\n";
        }
      ?>
    </div>

    <div class=datum>
      <?php
        $file = array_reverse( file( 'data/blogdatum.txt' ) );
        $limit = 1;
        for ($i = 0; $i <= $limit; $i++ ){
        echo $file[$i] . "\n";
        }
      ?>
    </div>

    <div class=blogartikel>
      <?php
        $file = array_reverse( file( 'data/blog.txt' ) );
        $limit = 1;
        for ($i = 0; $i <= $limit; $i++ ){
        echo $file[$i] . "\n";
        }
      ?>
    </div>
    </div>

    <div class=blogtekst>
      <h1>
      <?php
        $openbestand = "data/blogtitel.txt";
        $lines = file($openbestand);
        echo $lines[2];
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
        $openbestand = "data/blogtitel.txt";
        $lines = file($openbestand);
        echo $lines[4];
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
