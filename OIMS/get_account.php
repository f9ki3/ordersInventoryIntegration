<?php

// Include configuration file with error handling
include 'config.php';

// Fetch data with error handling
$data = array();
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
} else {
    $data['error'] = mysqli_error($conn);
}

// Output JSON
echo json_encode($data);
?>
