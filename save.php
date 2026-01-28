<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $file = fopen(__DIR__ . "/data.txt", "a");
    fwrite($file, $name . " | " . $email . " | " . $message . PHP_EOL);
    fclose($file);

    echo "<p>Record saved successfully.</p>";
    echo "<a href='list.php'>View Records</a>";
}
?>
