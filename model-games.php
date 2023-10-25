<?php
function selectGames() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT game_id,winner,loser,score,date, club_id FROM `games`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function selectGamesForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT game_id,winner FROM `games` order by winner");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertGames($gWinner,$gLoser,$gScore,$gDate) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `games` (`winner`, `loser`, `score`,`date`) VALUES (?, ?, ?,?)");
        $stmt->bind_param("ssss",$gWinner,$gLoser,$gScore,$gDate);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateGames($gWinner,$gLoser,$gScore,$gDate,$gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `games` set `winner`=?, `loser`= ?, `score`= ?,`date`= ? where game_id=?");
        $stmt->bind_param("ssssi", $gWinner,$gLoser,$gScore,$gDate,$gid);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteGames($gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from games where game_id = ?");
        $stmt->bind_param("i", $gid);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
