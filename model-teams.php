<?php
function selectTeams() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Team_ID, City, Name FROM `Team`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertTeam($tName, $tCity) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Team` (`Name`, `City`) VALUES (?, ?);");
        $stmt->bind_param("ss", $tName, $tCity);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateTeam($tName, $tCity, $Team_ID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Team SET Name = ?, City = ? where Team_ID = ?");
        $stmt->bind_param("ssi", $tName, $tCity, $Team_ID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteTeam($Team_ID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Team where Team_ID = ?");
        $stmt->bind_param("i", $Team_ID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
