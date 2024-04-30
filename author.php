<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <style>
        /* CSS styles for table */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        p {
            text-align: center;
            color: #666;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Authors of Science Books</h1>

    <?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "usbw";
    $dbname = "book_store";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, 3307);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to fetch authors of science books
    $sql = "SELECT a.name, a.nationality
            FROM book_store.author AS a
            INNER JOIN book_store.book AS b ON a.id = b.author_id
            WHERE b.title = 'science'";
    $result = $conn->query($sql);

    // Display table if authors exist
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Author</th><th>Nationality</th></tr>";
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["nationality"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No authors found</p>";
    }

    // Close connection
    $conn->close();
    ?>
</div>

</body>
</html>
