<h1>Players</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
       <th>ID</th>
      <th>Name</th>
      <th>Number</th>
      <th>Cleat Sponser</th> 
      <th></th> 
      </tr>
      <tbody>
  <?php
  while ($player = $players -> fetch_assoc()) {
    ?>
    <tr>
      <td><?php echo $player['player_id'];?></td>
      <td><?php echo $player['player_name'];?></td>
      <td><?php echo $player['number'];?></td>
      <td><?php echo $player['cleats'];?></td>
      <td><a href="game-by-player.php?id=<?php echo $player['player_id'];?>">Game Review</a></td>
    </tr>
    <?php
  }
  ?>
      </tbody>
    </thead>
  </table>
</div>
