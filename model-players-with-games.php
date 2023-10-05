<?php
function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player_id,player_name,number,cleats FROM `player`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectGamesbyPlayers($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("PUT THING HERE");
        $stmt->bind_param("p", $pid); 
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
