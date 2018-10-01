<!-- Added index.html header -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
   <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="description" content="Ejerlejlighed Sælges NU!">
        <meta name="keywords" content="Ejerlejlighed, Vallensbæk Starnd, Ejerlejlighed Sælges">
        <meta name="author" content="Morten Aggerholm">
        <title>Ejerlejlighed Sælges NU!</title>
        <link href="./styles/styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
      <div id="container"> <!--start .container-->
        <header id="mainHeader">
          <a href="index.html>"><img src="design/top.png" alt="Top Image"></a>
          <div id="path"> <!--start .path-->
            <p>Du er her: <a href="#">Forsiden</a></p>
          </div> <!--end .path--> 
        </header> 
        <!-- PHP Scripts start-->
        <?php
            ini_set('display_errors', FALSE);
            /* MySQL Database Connect Function */
            function mydb_connect(){
                $dbhost = " ";
                $user = " ";
                $passwd = " ";
                // Create connection
                $db = mysql_connect($dbhost, $user, $passwd);
                    if($db == 0){
                        error ("Connection to database on '$dbhost' failed");
                    }
                $database = "mortenaggerholm";
                if (mysql_select_db($database, $db) == 0 ) {
                    error ("Failed to connect to '$database' ");
                 }
                }
                /* Input Validering */
                function error ($msg) {
                echo "<html><body><H2>ERROR: $msg </H2></body></html>";
                exit; // Undgå at forstætte scriptet. 
                }

                /* Der oprettes adgang til databasen via funktionen mydb_connect() */

                mydb_connect();
                // SQL Query
                $result = mysql_query("SELECT LejlighedID, Header, Uheader, Body, Lejligheden, Ejendommen, Boligareal, Rum, Year, Energimaerke, Pris, PrisPrm2, Ejerudgifter, Status, Posteddate
                                        FROM Ejerlejlighed
                                        ORDER BY LejlighedID DESC
                                        LIMIT 5");
                // SQL Query i MYSQL Databasen
                $i = 0;
                while ($row = mysql_fetch_array($result )){
                  // Udskriver validerende HTML
                  echo <section id='houseInfo'>
                  <article>
                  <header><h1>Ejerlejlighed Sælges: $row[1] <br> </h1></header>
                }
                </article>
                </section>
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