 <?php
require_once ("util-db.php");
require_once ("model-games.php");

$pageTitle = "Game scores";
include "view-header.php";

if (isset($_POST['actionType'])){
 switch ($_POST['actionType']){
  case 'Add':
   insertGames($_POST['gWinner'],$_POST['gLoser'],$_POST['gScore'],$_POST['gDate']);
   break;
 }
}

$games = selectGames();
include "view-games.php";

include "view-footer.php";
?>
