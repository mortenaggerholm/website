<!-- Added index.html header -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
   <html>
    <? include('config.php'); ?>
    <?php ini_set ("display_error", 0);?> 
    <head>
        <meta http-equiv="Content-Type" content="text; charset=utf-8">
        <meta name="description" content="Ejerlejlighed Sælges NU!">
        <meta name="keywords" content="Ejerlejlighed, Vallensbæk Strand, Ejerlejlighed Sælges">
        <meta name="author" content="Morten Aggerholm">
        <title>Ejerlejlighed Sælges NU!</title>
        <link href="./styles/styles.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/jquery.fancybox/jquery.fancybox.css" media ="screen" />
        <script type="text/javascript" src="jquery.fancybox/jquery-1.3.2.min.js"></script>
        <script type="text/javascript" src="jquery.fancybox/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="jquery.fancybox/jquery.fancybox-1.2.1.pack.js"></script>
        <script type="text/javascript"> $(document).ready(function() {
          $("a.image").fancybox();
        });
        </script>
    </head>
    <body>
      <div id="container"> <!--start .container-->
        <header id="mainHeader">
          <a href="index.php>"><img src="design/top.png" alt="Top Image"></a>
          <div id="path"> <!--start .path-->
              <ul>
                <li>Du er her: </li>
                <li><a href="index.php">Forside</a>&gt;</li>
                <li><a href="images.php">Billeder</a></li>
              </ul>
          </div> <!--end .path--> 
        </header> <!-- end .header-->
        <section id="houseInfo">
          <h1><?php echo $title; ?></h1>
          <p>
          <?php echo $subtitle; ?><br />
          <?php
            foreach($image as $disImage) {
              echo '<a rel="group" title="'.$disImage.'"
              href="'.$dir.'/'.$disImage.'" title="'.$disImage.'" class="image"><img
              src="'.$dir.'/'.$disImage.'" height="'.$maxheight.'" width="'.$maxwidth.'" /></a>';
            }
            ?>
            </p>
                <nav id="mainNav">
                  <ul id="siteNav">
                    <li class="first"><a href="index.php">Forsiden</a></li>
                    <li><a href="map.html">Kort</a></li>
                    <li class="last"><a href="images.php">Billeder</a></li>
                  </ul>
                </nav>   
        </section>
        <footer id="pageFooter"> <!--start .pageFooter-->
          <p>Kontaktoplysninger: Morten Aggerholm - Tlf. 29 70 41 32 - <a href="mailto:morten@mortenaggerholm.dk">E-mail: morten(at)mortenaggerholm.dk</a></p>
          <p>&copy; Copyright 2018 - Alle Rettigheder Forbeholdes</p>
        </footer> <!--end.container--> 
      </div><!--end.container--> 

    </body>
  </html>