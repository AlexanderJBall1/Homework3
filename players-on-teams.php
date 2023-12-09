<?php
require_once("util-db.php");
require_once("model-players-on-teams.php");
$pageTitle = "Players on Teams";
include "view-header.php";
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertPlayerTeam($_POST['tid'], $_POST['pid'])) {
        echo '<div class="alert alert-success" role="alert">Section added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updatePlayerTeam($_POST['tid'], $_POST['pid'], $_POST['ptid'])) {
        echo '<div class="alert alert-success" role="alert">Section edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deletePlayerTeam($_POST['ptid'])) {
        echo '<div class="alert alert-success" role="alert">Section deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$teams = selectTeams();
include "view-player-on-teams.php";
include "view-footer.php";
?>
