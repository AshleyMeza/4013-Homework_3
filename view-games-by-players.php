<h1>Games Review by Player</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Game ID</th>
      <th>Winner</th>
      <th>Loser</th>
      <th>Score</th>
      <th>Date</th>
      <th>Stadium</th>
      <th>Location</th> 
      </tr>
      <tbody>
  <?php
  while ($player = $players -> fetch_assoc()) {
    ?>
    <tr>
      <td><?php echo $player['game_id'];?></td>
      <td><?php echo $player['winner'];?></td>
      <td><?php echo $player['loser'];?></td>
      <td><?php echo $player['score'];?></td>
      <td><?php echo $player['date'];?></td>
      <td><?php echo $player['stadium_name'];?></td>
      <td><?php echo $player['location'];?></td>
    </tr>
    <?php
  }
  ?>
      </tbody>
    </thead>
  </table>
</div>
