<?php
// Database connection
require '../config/database.php';

try {
    // Prepare SQL query to get all mountains ordered by mountain_id ascending
    $sql = "SELECT * FROM mountains ORDER BY mountain_id ASC"; 
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    // Get the result set
    $result = $stmt->get_result();

    // Check if there are any mountains
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Format the row data for display
            echo "<tr>";
            echo "<td>{$row['mountain_id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['location']}</td>";
            echo "<td>{$row['elevation']}</td>";
            echo "<td><img src='{$row['mountain_image']}' alt='{$row['name']}' style='width: 50px; height: 50px; object-fit: cover;'></td>";
            echo "<td>{$row['difficulty_level']}</td>";
            echo "<td>" . (strlen($row['description']) > 50 ? substr($row['description'], 0, 50) . "..." : $row['description']) . "</td>";
            echo "<td>{$row['latitude']}</td>";
            echo "<td>{$row['longitude']}</td>";
            echo "<td>{$row['ratings']}</td>";
            echo "<td>
                    <button class='edit-btn' onclick='showOptions(" . json_encode($row) . ")'><i class='fas fa-edit'></i> Edit</button>
                    <button class='delete-btn ms-2' onclick='deleteMountain({$row['mountain_id']})'><i class='fas fa-trash'></i> Delete</button>
                  </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='11' class='text-center'>No mountains found in the database.</td></tr>";
    }

} catch (PDOException $e) {
    echo "<tr><td colspan='11' class='text-center text-danger'>Error: " . $e->getMessage() . "</td></tr>";
}

// Close the database connection
$conn = null;
?>