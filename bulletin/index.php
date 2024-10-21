<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title>C1test</title>
      <link href="style.css" rel="stylesheet" />
   </head>

   <body>
      <p>Bulletins :</p>
      <?php   // Connexion à la base de données
      try
      {
          $bdd = new PDO('mysql:host=localhost;dbname=bulletin;charset=utf8', 'bulletin', 'test');
      }
      catch(Exception $e){
            die( 'Erreur : '.$e->getMessage()   );
      }

      // On récupère les derniers bulletins
      $req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM bulletins ORDER BY date_creation DESC LIMIT 0, 5');

      while ($donnees = $req->fetch())
      {
      ?>
      <div class="news">
         <h3>
            <?php echo htmlspecialchars($donnees['titre']); ?>
            <em>le <?php echo $donnees['date_creation_fr']; ?></em>
         </h3>
         <p>
         <?php
                echo    nl2br ( htmlspecialchars( $donnees['contenu']));
         ?>
         <br />
         <em><a href="#">Coms</a></em>
         </p>
      </div>
      <?php
      }
      $req->closeCursor();
      ?>
   </body>
</html>
