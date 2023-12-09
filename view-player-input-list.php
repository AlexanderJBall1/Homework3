<select class="form-select" id="tid" name="tid">
<?php
while ($teamItem = $teamList->fetch_assoc()) {
    $selText = "";
  if ($selectedTeam == $teamItem['Team_ID']) {
    $selText = " selected";
  }
?>
<option value="<?php echo $teamItem['Team_ID']; ?>"<?=$selText?>><?php echo $teamItem['Name']; ?></option>
<?php
  }
?>
</select>
