<div class = "row">
  <div class = "col">
<h1>Teams</h1>
  </div>
  <div>
    <div class = "col-auto">
  <?php
    include "view-teams-newform.php";
  ?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <th>ID</th>
      <th>City</th>
      <th>Name</th>
      <th></th>
      <th></th>
      <th></th>
    </thead>
    <tbody>
<?php
while ($team = $teams->fetch_assoc()){
?>
  <tr>
    <td><?php echo $team['Team_ID']; ?></td>
    <td><?php echo $team['City']; ?></td>
    <td><?php echo $team['Name']; ?></td>
    <td>
      <form method = "get" action = "player-teams.php">
        <input type = "hidden" name = "pid" value = "<?php echo $player['Player_ID']; ?>">
        <button type = "submit" class = "btn btn-primary">Player Info</button>
      </form>
    </td>
    </td>
    <td>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
