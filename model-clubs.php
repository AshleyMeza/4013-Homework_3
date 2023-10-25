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
function insertClubs($cName,$cLocation,$cColor) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `club` (`club_name`, `location`, `color(s)`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $cName,$cLocation,$cColor);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateClubs($cName,$cLocation,$cColor,$cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `club` set `club_name`= ?, `location`= ?,`color(s)`= ? where club_id=?");
        $stmt->bind_param("sssi",$cName,$cLocation,$cColor,$cid);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteClubs($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from club where club_id = ?");
        $stmt->bind_param("i", $cid);
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
