<h1>Game Scores</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
       <th>Game ID</th>
      <th>Winner</th>
      <th>Loser</th>
      <th>Score</th>
      <th>Date</th>
      <th></th>  
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
      <td>
     
    <form method = "post" action="clubs-by-games.php">
      <input type="hidden" name= "gid" value ="<?php echo $game['club_id'];?>">
      <button type="submit" class="btn btn-primary">Clubs</button>
    </form>
        
     </td>
    </tr>
    <?php
  }
  ?>
      </tbody>
    </thead>
  </table>
</div>
