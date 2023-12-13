<?php
require_once("util-db.php");
require_once("model-players-on-teams.php");
$pageTitle = "Players on Teams";
include "view-header.php";
$teams = selectPlayerOnTeams($_POST['tid']);
include "view-player-on-teams.php";
include "view-footer.php";
?>
