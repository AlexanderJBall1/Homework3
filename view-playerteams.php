<h1>Player Info</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <th>ID</th>
      <th>Name</th>
      <th>Salary</th>
      <th>Years</th>
    </thead>
    <tbody>
<?php
while ($player = $players->fetch_assoc()){
?>
  <tr>
    <td><?php echo $player['Player_ID']; ?></td>
    <td><?php echo $player['Player_Name']; ?></td>
    <td><?php echo $player['Salary']; ?></td>
    <td><?php echo $player['Years']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
