<?php

// Function to connect to the databases
function connectToDatabase($host, $username, $password, $database) {
    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

// Function to synchronize data from shop_db to shop_db2
function synchronizeData() {
    // Connect to both databases
    $shop_db_conn = connectToDatabase("localhost", "root", "", "shop_db");
    $shop_db2_conn = connectToDatabase("localhost", "root", "", "shop_db2");

    // Define tables to synchronize
    $tables = ['cart', 'message', 'orders', 'products', 'users', 'wishlist'];

    // Loop through each table and synchronize data
    foreach ($tables as $table) {
        // Fetch data from shop_db
        $sql = "SELECT * FROM $table";
        $result = $shop_db_conn->query($sql);
        
        // If data is fetched successfully, insert into shop_db2
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                // Prepare data for insertion into shop_db2
                // Assuming the structure of both databases is the same
                $fields = implode(',', array_keys($row));
                $values = implode("','", array_values($row));
                $insert_query = "INSERT INTO shop_db2.$table ($fields) VALUES ('$values')";
                
                // Insert into shop_db2
                if (!$shop_db2_conn->query($insert_query)) {
                    // Handle errors
                    error_log("Error inserting data into $table in shop_db2: " . $shop_db2_conn->error);
                }
            }
        } else {
            // Handle errors
            error_log("Error fetching data from $table in shop_db: " . $shop_db_conn->error);
        }
    }

    // Close connections
    $shop_db_conn->close();
    $shop_db2_conn->close();
}

// Call the function to synchronize data
synchronizeData();

?>
