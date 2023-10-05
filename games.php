 <?php
require_once ("util-db.php");
require_once ("model-games.php");

$pageTitle = "Game scores";
include "view-header.php";

$games = selectGames();
include "view-games.php";

include "view-footer.php";
?>
