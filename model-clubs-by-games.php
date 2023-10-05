<?php
function selectClubsbyGames($gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("PUT THING HERE");
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
