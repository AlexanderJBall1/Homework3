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


function selectPlayerOnTeams($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT PT_ID, P.Player_ID, Player_Name, Number, Years, Salary, T.Team_ID, Name, City  FROM `Player` P JOIN PlayerTeam PT on PT.Player_ID = P.Player_ID JOIN Team T on PT.Team_ID = T.Team_ID WHERE T.Team_ID = ?");
        $stmt->bind_param("i", $tid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectPlayersForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Player_ID, Player_Name FROM `Player` order by Player_Name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectTeamsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Team_ID, Name FROM `Team` order by Name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertPlayerTeam($tid, $pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `PlayerTeam` (`Team_ID`, `Player_ID`) VALUES (?, ?)");
        $stmt->bind_param("ii", $tid, $pid);
        $result = $stmt->execute();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updatePlayerTeam($tid, $pid, $ptid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `PlayerTeam` set `Team_ID` = ?, `Player_ID` = ? where PT_ID = ?");
        $stmt->bind_param("iii", $tid, $pid, $ptid);
        $result = $stmt->execute();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePlayerTeam($ptid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from PlayerTeam where PT_ID=?");
        $stmt->bind_param("i", $ptid);
        $result = $stmt->execute();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
?>
