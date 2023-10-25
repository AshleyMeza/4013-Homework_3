<select class="form-select" id="gWinner" name="gWinner">
  <?php
    while ($winnerItem =$winnerList->fetch_assoc()){
      ?>
      <option value="<?php echo $winnerItem['game_id'];?>"><?php echo $winnerItem['winner'];?></option>
  <?php
    }
    ?>
</select>
