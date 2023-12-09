<h1>Players on Team</h1>
  <?php
    include "view-player-on-teams-newform.php";
  ?>
<div class="row row-cols-1 row-cols-md-3 g-4">
<?php
while ($team = $teams->fetch_assoc()){
?>
<div class = "col">
`<div class="card h-100">
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
include "view-player-on-teams-editform.php";
?>

      </div>
      <div class="col-auto">
        <form method="post" action="">
          <input type="hidden" name="ptid" value="<?php echo $player['Team_ID']; ?>">
          <input type="hidden" name="actionType" value="Delete">
          <button type="submit" class="btn" onclick="return confirm('Are you sure?');">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
              <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
            </svg>
          </button>
        </form>
      </div>
    </div>
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
    </tbody>
  </table>
</div>
