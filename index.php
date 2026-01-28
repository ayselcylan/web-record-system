<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Web Record System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h2>User Record Form</h2>

<form action="save.php" method="post">
    <label>Name</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email</label><br>
    <input type="email" name="email" required><br><br>

    <label>Message</label><br>
    <textarea name="message" required></textarea><br><br>

    <button type="submit">Save</button>
</form>

<br>
<a href="list.php">View Records</a>

</body>
</html>
