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
        <div class="col-auto">
          
        </div>
        <div class="col-auto">
           <form method = "post" action="">
      <input type="hidden" name= "gid" value ="<?php echo $game['game_id'];?>">
    <input type="hidden" name ="actionType" value = "Delete">
      <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
          </svg>
       </button>
        </form>
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
