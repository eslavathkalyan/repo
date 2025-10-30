<?php include 'db.php'; ?>
<h2>Farmer List</h2>
<table border="1">
<tr><th>ID</th><th>Name</th><th>Land</th><th>Village</th><th>Aadhaar</th></tr>
<?php
$result = $conn->query("SELECT * FROM farmers");
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['land_area']}</td><td>{$row['village']}</td><td>{$row['aadhaar']}</td></tr>";
}
?>
</table>
