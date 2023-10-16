<?php
function selectGamesbyPlayers($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT g.game_id,winner,loser,score,date,stadium_name,s.location FROM `games` g JOIN stadium s ON g.stadium_id = s.stadium_id WHERE g.player_id=?");
        $stmt->bind_param("i", $pid); 
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
