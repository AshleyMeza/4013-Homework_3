<select class="form-select" id="cName" name="cName">
  <?php
    while ($cNameItem =$cNameList->fetch_assoc()){
      ?>
      <option value="<?php echo $cNameItem['club_id'];?>"><?php echo $cNameItem['club_name'];?></option>
  <?php
    }
    ?>
</select>
