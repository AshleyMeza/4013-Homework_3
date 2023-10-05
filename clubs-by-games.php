 <?php
require_once ("util-db.php");
require_once ("model-clubs-by-games.php");

$pageTitle = "Game Reviews for Clubs";
include "view-header.php";

$clubs = selectClubsbyGames($_POST['gid']);
include "view-clubs-by-games.php";

include "view-footer.php";
?>
