 <?php
require_once ("util-db.php");
require_once ("model-stadium.php");

$pageTitle = "Stadium";
include "view-header.php";

$stadium = selectStadium();
include "view-stadium.php";

include "view-footer.php";
?>
