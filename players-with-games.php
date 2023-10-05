 <?php
require_once ("util-db.php");
require_once ("model-players-with-games.php");

$pageTitle = "Soccer Players with Game Review";
include "view-header.php";

$players = selectPlayers();
include "view-players-with-games.php";

include "view-footer.php";
?>
