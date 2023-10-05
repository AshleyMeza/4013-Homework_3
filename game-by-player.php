 <?php
require_once ("util-db.php");
require_once ("model-games-by-players.php");

$pageTitle = "Game Reviews for Player";
include "view-header.php";

$games = selectGamesbyPlayers($_GET['id']);
include "view-games-by-players.php";

include "view-footer.php";
?>
