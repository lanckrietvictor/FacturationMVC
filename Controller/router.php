<?php

if(empty($_GET)){
  require_once "Model/homepage.php";
  require_once "View/homepage.php";
}

elseif (isset($_GET["client"])) {
  require_once "Model/client.php";
  require_once "View/client.php";
}

elseif (isset($_GET["fournisseur"])){
  require_once "Model/fournisseur.php";
  require_once "View/fournisseur.php";
}

elseif (isset($_GET["detailcontact"])) {
  $idf = $_GET["detailcontact"];
  require_once "Model/detailcontact.php";
  require_once "View/detailcontact.php";
}

elseif (isset($_GET["detailsocietes"])) {
  $idf = $_GET["detailsocietes"];
  require_once "Model/detailsociete.php";
  require_once "View/detailsociete.php";
}

elseif (isset($_GET["detailfacture"])) {
  $idf = $_GET["detailfacture"];
  require_once "Model/detailfacture.php";
  require_once "View/detailfacture.php";
}
 ?>
