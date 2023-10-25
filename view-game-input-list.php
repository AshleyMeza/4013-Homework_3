<select class="form-select" id="gWinner" name="gWinner">
  <?php
    while ($winnerItem =$winnerList->fetch_assoc()){
      $selText = "";
      if ($selectedWinner == $gameItem['game_id']){
        $selText = "selected";

      }
      ?>
      <option value="<?php echo $winnerItem['game_id'];?>"<?=$selText?>><?php echo $winnerItem['winner'];?></option>
  <?php
    }
    ?>
</select>
