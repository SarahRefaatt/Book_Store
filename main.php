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
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .button-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #45a049;
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
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<div class="button-container">
    <button class="btn" onclick="fetchBooks()">Fetch Books</button>
</div>
<div class="button-container">
    <button class="btn" onclick="fetchAuthors()">Fetch Authors</button>
</div>
<div class="button-container">
    <button class="btn" onclick="fetchDate()">Fetch Books Title</button>
</div>

<div id="bookTableContainer"></div>

<script>
    function fetchBooks() {
        // AJAX request to fetch book data
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Display fetched data in bookTableContainer
                document.getElementById("bookTableContainer").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "books.php", true);
        xhttp.send();
    }

    function fetchAuthors() {
        // AJAX request to fetch book data
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Display fetched data in bookTableContainer
                document.getElementById("bookTableContainer").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "author.php", true);
        xhttp.send();
    }
    function fetchDate() {
        // AJAX request to fetch book data
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Display fetched data in bookTableContainer
                document.getElementById("bookTableContainer").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "publish.php", true);
        xhttp.send();
    }
</script>

</body>
</html>

<?php
$servername ="localhost";
$username = "root";
$password = "usbw";
$dbname ="book_store";
$postnumber=3307;
// Create connection
$conn = new mysqli($servername, $username, $password,
$dbname,$postnumber);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
else { echo "<p style='text-align: center; color: green;'>Connected successfully</p>"; }


$sql = "SELECT * FROM book_store.book";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
        {
            echo "<table>";
            echo "<tr><th>ID</th><th>Title</th><th>Author ID</th></tr>";
            while($row = $result-> fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["title"] . "</td>";
                echo "<td>" . $row["author_id"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        else {
            echo "<p style='text-align: center;'>No books found</p>";
        }
?>

</body>
</html>
