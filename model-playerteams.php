<?php
function selectPlayerTeams($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT p.Player_ID, Player_Name, Player_Number, Player_Team, Salary, Years FROM `Player` p JOIN PlayerTeam pt ON p.Player_ID = pt.Player_ID where pt.Player_ID = ?");
        $stmt->bind_param("i", $pid);
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
