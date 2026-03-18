<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Database</title>
</head>

<body>

    <?php
    // Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "nishandhakal";
    $dbname = "test";

    // Connecting to database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Handle action
    $action = $_GET['action'] ?? '';
    $message = "";

    if ($action == "insert") {
        $sql = "INSERT INTO Students(name, email, course) VALUES ('Nishan', 'nissandhakal11@gmail.com', 'BSc.CSIT')";
        $message = mysqli_query($conn, $sql) ? "Record Inserted" : "Error inserting record: " . mysqli_error($conn);
    }

    if ($action == "insertMany") {
        $sql = "INSERT INTO Students(name, email, course) VALUES 
                ('Nishan', 'nissandhakal11@gmail.com', 'BSc.CSIT'),
                ('Subodh', 'subodh123@gmail.com', 'BSc.CSIT')";
        $message = mysqli_query($conn, $sql) ? "Multiple Records Inserted" : "Error inserting records: " . mysqli_error($conn);
    }

    if ($action == 'read') {
        $sql = "SELECT * FROM Students";
        $result = mysqli_query($conn, $sql);
    }

    if ($action == 'update') {
        $sql = "UPDATE Students SET name='Amit' WHERE ID=3";
        $message = mysqli_query($conn, $sql) ? "Record Updated" : "Error while updating: " . mysqli_error($conn);
    }

    if ($action == 'delete') {
        $sql = "DELETE FROM Students WHERE ID=1";
        $message = mysqli_query($conn, $sql) ? "Record Deleted" : "Error while deleting record: " . mysqli_error($conn);
    }
    ?>

    <br><br>

    <?php
    // Display message
    if (!empty($message)) {
        echo "<p>$message</p>";
    } else {
        echo "<p>No action performed yet.</p>";
    }

    // Display table if data is available
    if (isset($result) && mysqli_num_rows($result) > 0) {
        echo "<table border='1'>";
        echo "<tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
              </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['course'] . "</td>
                  </tr>";
        }
        echo "</table>";
    } elseif ($action == 'read') {
        echo "<p>No records found.</p>";
    }

    // Close connection
    mysqli_close($conn);
    ?>

    <h1>PHP CRUD Operations</h1>
    <form method="get">
        <button name="action" value="insert">Insert One</button>
        <button name="action" value="insertMany">Insert Many</button>
        <button name="action" value="read">Read All</button>
        <button name="action" value="update">Update</button>
        <button name="action" value="delete">Delete</button>
    </form>

</body>

</html>