<h1>Games Review by Clubs</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Game ID</th>
      <th>Winner</th>
      <th>Loser</th>
      <th>Score</th>
      <th>Date</th>
      <th>Club Name</th>
      <th>Location</th> 
      </tr>
      <tbody>
  <?php
  while ($club = $clubs -> fetch_assoc()) {
    ?>
    <tr>
      <td><?php echo $club['game_id'];?></td>
      <td><?php echo $club['winner'];?></td>
      <td><?php echo $club['loser'];?></td>
      <td><?php echo $club['score'];?></td>
      <td><?php echo $club['date'];?></td>
      <td><?php echo $club['club_name'];?></td>
      <td><?php echo $club['location'];?></td>
    </tr>
    <?php
  }
  ?>
      </tbody>
    </thead>
  </table>
</div>
