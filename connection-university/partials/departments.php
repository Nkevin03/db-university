<?php

require_once __DIR__ . '/partials/db.php';

$sql = "SELECT * FROM `departments`";
$results = $conn->query($sql);

$departments = []; 

if ($results && $results->num_rows > 0) {
    while ($row = $results->fetch_assoc()) {
        $departments[] = $row;
    }
} elseif ($results) {
    echo '<h2>No results found</h2>';
} else {
    echo "Error query";
}
$conn->close();

?>