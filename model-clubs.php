<?php
function selectClubs() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT club_id, club_name,location,`color(s)` FROM `club`");
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
