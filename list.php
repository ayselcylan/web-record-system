<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Record List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Saved Records</h2>

<?php
$file = fopen("data.txt", "r");

if ($file) {
    while (($line = fgets($file)) !== false) {
        echo "<p>" . htmlspecialchars($line) . "</p>";
    }
    fclose($file);
} else {
    echo "No records found.";
}
?>

<br>
<a href="index.php">Back</a>

</body>
</html>
