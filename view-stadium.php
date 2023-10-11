<h1>Stadium</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
       <th>ID</th>
      <th>Stadium Name</th>
      <th>Location</th>
      <th>Capacity</th> 
      </tr>
      <tbody>
  <?php
  while ($stadium = $stadiums -> fetch_assoc()) {
    ?>
    <tr>
      <td><?php echo $stadium['stadium_id'];?></td>
      <td><?php echo $stadium['stadium_name'];?></td>
      <td><?php echo $stadium['location'];?></td>
      <td><?php echo $stadium['capacity'];?></td>
      <td><a href="game-by-player.php?id=<?php echo $player['player_id'];?>">Game Review</a></td>
    </tr>
    <?php
  }
  ?>
      </tbody>
    </thead>
  </table>
</div>
