<?php
function selectStadium() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT stadium_id,stadium_name,location,capacity FROM `stadium`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertStadium($sName,$sLocation,$sCapacity) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `stadium` (`stadium_name`, `location`,`capacity`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss",$sName,$sLocation,$sCapacity);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateStadium($sName,$sLocation,$sCapacity,$sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `stadium` set `stadium_name`=?, `location`= ?, `capacity`= ? where stadium_id=?");
        $stmt->bind_param("sssi",$sName,$sLocation,$sCapacity,$sid);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteStadium($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from stadium where stadium_id = ?");
        $stmt->bind_param("i", $sid);
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
