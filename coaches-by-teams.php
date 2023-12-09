<?php
require_once("util-db.php");
require_once("model-teams-by-player.php");
$pageTitle = "Players on Team";
include "view-header.php";
$coaches = selectTeamsByPlayer($_POST['pid']);
include "view-teams-by-player.php";
include "view-footer.php";
?>
