<h1>Players</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
       <th>Game ID</th>
      <th>Winner</th>
      <th>Score</th>
      <th>Date</th> 
      </tr>
      <tbody>
  <?php
  while ($game = $games -> fetch_assoc()) {
    ?>
    <tr>
      <td><?php echo $game['game_id'];?></td>
      <td><?php echo $game['winner'];?></td>
      <td><?php echo $game['score'];?></td>
      <td><?php echo $game['date'];?></td>
    </tr>
    <?php
  }
  ?>
      </tbody>
    </thead>
  </table>
</div>
