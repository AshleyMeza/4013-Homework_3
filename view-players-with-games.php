<h1>Players with Games</h1>

<div class="card-group">
  
  <?php
  while ($player = $players -> fetch_assoc()) {
    ?>
    <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $player['player_name'];?></h5>
      <p class="card-text">
      <?php
        $games = selectGamesbyPlayers($player['player_id']);
    while ($game = $games -> fetch_assoc()){
      ?>
      
      <?php
      
    }
      ?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Player's Number: <?php echo $player['number'];?></small></p>
    </div>
  </div>
    <?php
  }
  ?>
</div>  
