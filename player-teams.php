<?php
require_once("util-db.php");
require_once("model-playerteams.php");
$pageTitle = "Player Info";
include "view-header.php";
$players = selectPlayerTeams($_GET['pid']);
include "view-playerteams.php";
include "view-footer.php";
?>
