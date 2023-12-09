<?php
function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Player_ID, Player_Name, Player_Number, Player_Team FROM `Player`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertPlayers($pName, $pNum, $pTeam) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Player` (`Player_Name`, `Player_Number`, `Player_Team`) VALUES (?, ?, ?);");
        $stmt->bind_param("sss", $pName, $pNum, $pTeam);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updatePlayers($pName, $pNum, $pTeam, $pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Player SET Player_Name = ?, Player_Number = ?, Player_Team = ? where Player_ID = ?");
        $stmt->bind_param("sssi", $pName, $pNum, $pTeam, $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePlayers($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Player where Player_ID = ?");
        $stmt->bind_param("i", $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
