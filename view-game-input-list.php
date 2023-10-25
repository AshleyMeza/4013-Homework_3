<select class="form-select" id="gWinner" name="gWinner">
  <?php
    while ($winnerItem =$winnerList->fetch_assoc()){
      $selText = "";
      if ($selectedWinner == $gameItem['winner']){
        $selText = "selected";

      }
      ?>
      <option value="<?php echo $winnerItem['winner'];?>"<?=$selText?>><?php echo $winnerItem['winner'];?></option>
  <?php
    }
    ?>
</select>
