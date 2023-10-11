<?php
function selectClubsbyGames($gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT g.game_id,winner,loser,score,g.date,club_name,c.location FROM `games` g JOIN club c ON g.club_id = c.club_id WHERE g.player_id = ?;");
        $stmt->bind_param("i",$gid); 
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
