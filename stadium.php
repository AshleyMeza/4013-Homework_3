 <?php
require_once ("util-db.php");
require_once ("model-stadium.php");

$pageTitle = "Stadium";
include "view-header.php";

if (isset($_POST['actionType'])){
 switch ($_POST['actionType']){
  case 'Add':
   if (insertStadium($_POST['sName'],$_POST['sLocation'],$_POST['sCapacity'])){
    echo '<div class="alert alert-success" role="alert"> Stadium Added!</div>';
   } else {
    echo '<div class="alert alert-danger" role="alert">Error</div>';
   }
   break;
  case 'Edit':
   if (updateStadium($_POST['sName'],$_POST['sLocation'],$_POST['sCapacity'],$_POST['sid'])){
    echo '<div class="alert alert-success" role="alert"> Stadium Updated!</div>';
   } else {
    echo '<div class="alert alert-danger" role="alert">Error</div>';
   }
   break;
  case 'Delete':
   if (deleteStadium($_POST['sid'])){
    echo '<div class="alert alert-success" role="alert"> Stadium Deleted!</div>';
   } else {
    echo '<div class="alert alert-danger" role="alert">Error</div>';
   }
   break;
 }
}

$stadiums = selectStadium();
include "view-stadium.php";

include "view-footer.php";
?>
