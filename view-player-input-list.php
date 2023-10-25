<select class="form-select" id="pName" name="pName">
  <?php
    while ($pNameItem =$pNameList->fetch_assoc()){
      ?>
      <option value="<?php echo $pNameItem['player_id'];?>"><?php echo $pNameItem['player_name'];?></option>
  <?php
    }
    ?>
</select>
