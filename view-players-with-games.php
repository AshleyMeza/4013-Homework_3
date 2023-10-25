<h1>Players with Games</h1>
<div class="card-group">
  <?php
  while ($player = $players -> fetch_assoc()) 
  {
    ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo $player['player_name'];?></h5>
          <p class="card-text">
            <ul class="list-group">
        
      <?php
        $games = selectGamesbyPlayers($player['player_id']);
    while ($game = $games -> fetch_assoc()){
      ?>
       <li class= "list-group-item">
      <div class="row">
        <div class="col">
          <?php echo $game['game_id'];?> - <?php echo $game['winner'];?> - <?php echo $game['loser'];?> - <?php echo $game['score'];?> - <?php echo $game['date'];?>
        </div>
        </div>
       </li>      
  <?php
    }
  ?>
    
    </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Player's Number: <?php echo $player['number'];?></small></p>
    </div>
  </div>
    <?php
  }
  ?>
</div>  
