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
  while ($game = $games -> fetch_assoc()) {
    ?>
    <tr>
      <td><?php echo $game['game_id'];?></td>
      <td><?php echo $game['winner'];?></td>
      <td><?php echo $game['loser'];?></td>
      <td><?php echo $game['score'];?></td>
      <td><?php echo $game['date'];?></td>
      td><?php echo $game['stadium_name'];?></td>
      td><?php echo $game['location'];?></td>
    </tr>
    <?php
  }
  ?>
      </tbody>
    </thead>
  </table>
</div>
