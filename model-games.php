<?php
function selectGames() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT game_id,winner,loser,score,date FROM `games`;");
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
