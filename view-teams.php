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
      <form method = "get" action = "player-on-teams.php">
        <input type = "hidden" name = "pid" value = "<?php echo $team['Team_ID']; ?>">
        <button type = "submit" class = "btn btn-primary">Players on Team</button>
      </form>
    </td>
    <td>
  <?php
    include "view-teams-editform.php";
  ?>
    </td>
    <td>
        <form method = "post" action = "">
          <input type = "hidden" name = "tid" value = "<?php echo $team['Team_ID']; ?>">
          <input type = "hidden" name = "actionType" value = "Delete">
          <button type = "submit" class = "btn btn-primary" onclick = "return confirm('Are you sure?');">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
          </svg>
          </button>
        </form>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
