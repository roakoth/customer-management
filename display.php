<!DOCTYPE html>
<html>
<head>
<title>Customer Records</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>First Name</th>
<th>Last Name</th>\
<th> Department </th>
<th> Email </th>
<th> Position </th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "customer");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, first_name, last_name, department, email, position FROM customer_records";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["first_name"] . "</td><td>"
. $row["last_name"] . "</td><td>". $row["department"] . "</td><td>" . $row["email"] . "</td><td>" . $row["position"] . "</td><td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<button type="submit" class="btn" name="update">Update Records</button>
<button type="submit" class="btn" name="delete">Delete Records</button> 


</body>
</html>