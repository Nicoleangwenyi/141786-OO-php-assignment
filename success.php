<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Search Person</title>
    <link rel="stylesheet" href="success.css">
</head>
<body>
    <h1>Search for a Person</h1>
    <form method="POST" action="success.php">
        <input type="text" name="search_query" placeholder="Enter Email">
        <input type="submit" value="Search">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Includeing the database connection file
    require_once("db.php");
    $db = new Database();
    $conn = $db->connect();

    $searchQuery = $_POST["search_query"];

    
    $sql = "SELECT * FROM persons WHERE  email LIKE :query";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':query', $searchQuery, PDO::PARAM_STR);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($results) > 0) {
            echo "<h2>Search Results:</h2>";
            echo "<ul>";
            foreach ($results as $result) {
                echo "<li>Name: " . htmlspecialchars($result['name']) . "</li>";
                echo "<li>Email: " . htmlspecialchars($result['email']) . "</li>";
                echo "<li>Phone: " . htmlspecialchars($result['phone']) . "</li>";
                echo "<li>Comments: " . htmlspecialchars($result['comments']) . "</li>";
                echo "<br>";
            }
            echo "</ul>";
        } else {
            echo "<p>No matching records found.</p>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
<a href="index.php" class="exit-button">Exit</a>
</body>
</html>
