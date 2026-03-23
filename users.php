<?php
include "db.php";

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Users</title>
</head>

<body>

<h2>Registered Users</h2>

<table border="1">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Email</th>
<th>Age</th>
<th>Gender</th>
<th>Username</th>
<th>Phone</th>
</tr>

<?php
if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
echo "<tr>
<td>".$row['id']."</td>
<td>".$row['fullname']."</td>
<td>".$row['email']."</td>
<td>".$row['age']."</td>
<td>".$row['gender']."</td>
<td>".$row['username']."</td>
<td>".$row['phone']."</td>
</tr>";
}
}
?>

</table>

</body>
</html>