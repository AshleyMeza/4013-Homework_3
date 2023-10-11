 <?php
require_once ("util-db.php");
require_once ("model-clubs.php");

$pageTitle = "Soccer Clubs;
include "view-header.php";

$clubs = selectClubs();
include "view-clubs.php";

include "view-footer.php";
?>
