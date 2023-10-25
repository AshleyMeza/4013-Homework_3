 <?php
require_once ("util-db.php");
require_once ("model-games.php");

$pageTitle = "Game scores";
include "view-header.php";

if (isset($_POST['actionType'])){
 switch ($_POST['actionType']){
  case 'Add':
   if (insertGames($_POST['gWinner'],$_POST['gLoser'],$_POST['gScore'],$_POST['gDate'])){
    echo '<div class="alert alert-success" role="alert"> Game Score Added!</div>';
   } else {
    echo '<div class="alert alert-danger" role="alert">Error</div>';
   }
   break;
  case 'Delete':
   if (deleteGames($_POST['gid'])){
    echo '<div class="alert alert-success" role="alert"> Game Score Deleted!</div>';
   } else {
    echo '<div class="alert alert-danger" role="alert">Error</div>';
   }
   break;
 }
}

$games = selectGames();
include "view-games.php";

include "view-footer.php";
?>
