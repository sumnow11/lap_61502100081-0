<?php require_once("dbcon.php");
    $sql = "INSERT INTO movie (m_id,m_time,m_name)
    VALUES ('{$_POST['m_id']}', '{$_POST['m_time']}','{$_POST['m_name']}')";
if ($conn->query($sql) === TRUE) {
    sleep();
    header("location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
