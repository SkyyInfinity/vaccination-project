<?php
//session_start();
include('../inc/pdo.php');
include('../inc/functions.php');



$sql = "SELECT * FROM vaccins";
$query = $pdo->prepare($sql);
$query->execute();
$vaccins = $query->fetchAll();
//debug($users);
// pagination //

// requete modifier, supprimer //

?>



    <div class="wrap">
      <h1>Tableau des vaccins | MODERATION</h1>
      <style>
        body{background-color: #d3d3d3;}
        h1{text-align: center;}
        .users{
          text-align: center;
          border:1px solid black;
  	       padding: 10px;
  	        margin-top: 15px;}
        .wrap {
          max-width: 1000px;
          width:100%;
          margin: 0 auto;}
      </style>

      <?php foreach ($vaccins as $vaccin): ?>

          <div class="users">
            <ul>
              <li>
                <p>Vaccin | <?php echo $vaccin['nom']; ?></p>
                <p>Maladie ciblées | <?php echo $vaccin['maladie_ciblées']; ?></p>
                <a href="admin_delete_vaccins.php?id=<?= $vaccin['id'] ?>">Supprimer</a>
                <a href="admin_voir_vaccins.php?id=<?= $vaccin['id'] ?>">Voir</a>
              </li>
            </ul>
        </div>

      <?php endforeach; ?>
      </div>
