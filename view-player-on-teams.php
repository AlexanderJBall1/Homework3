<h1>Players on Team</h1>
<div class="card-group">
<?php
while ($team = $teams->fetch_assoc()){
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $team['Name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php
 $playeronteams = selectPlayerOnTeams($team['Team_ID']);
while($player = $playeronteams->fetch_assoc()){
?>
    <li class="list-group-item"><?php echo $player['Player_Name']; ?> - <?php echo $player['Salary']; ?> - <?php echo $player['Years']; ?></li>

<?php
}
?>

        </ul>
      </p>
    </div>
  </div>
</div>
<?php
}
?>

</div>
