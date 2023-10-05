<?php
function selectClubsbyGames($gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT g.game_id,winner,loser,score,date,club_name,location FROM `games` g JOIN club c ON c.game_id = g.game_id WHERE c.club_id=?");
        $stmt->bind_param("p", $gid); 
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
