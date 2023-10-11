<h1>Club</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
       <th>ID</th>
      <th>Club Name</th>
      <th>Location</th>
      <th>Color(s)</th> 
      <th></th> 
      </tr>
      </thead>
      <tbody>
  <?php
  while ($club = $clubs -> fetch_assoc()) {
    ?>
    <tr>
      <td><?php echo $club['club_id'];?></td>
      <td><?php echo $club['club_name'];?></td>
      <td><?php echo $club['location'];?></td>
      <td><?php echo $club['color(s)'];?></td>
    </tr>
    <?php
  }
  ?>
      </tbody>
  </table>
</div>
