 <?php
require_once ("util-db.php");
require_once ("model-clubs.php");

$pageTitle = "Clubs";
include "view-header.php";

if (isset($_POST['actionType'])){
 switch ($_POST['actionType']){
  case 'Add':
   if (insertClubs($_POST['cName'],$_POST['cLocation'],$_POST['cColor'])){
    echo '<div class="alert alert-success" role="alert"> Club Added!</div>';
   } else {
    echo '<div class="alert alert-danger" role="alert">Error</div>';
   }
   break;
  case 'Edit':
   if (updateClub($_POST['cName'],$_POST['cLocation'],$_POST['cColor'],$_POST['cid'])){
    echo '<div class="alert alert-success" role="alert"> Club Updated!</div>';
   } else {
    echo '<div class="alert alert-danger" role="alert">Error</div>';
   }
   break;
  case 'Delete':
   if (deleteClub($_POST['cid'])){
    echo '<div class="alert alert-success" role="alert"> ClubDeleted!</div>';
   } else {
    echo '<div class="alert alert-danger" role="alert">Error</div>';
   }
   break;
 }
}

$clubs = selectClubs();
include "view-clubs.php";

include "view-footer.php";
?>
