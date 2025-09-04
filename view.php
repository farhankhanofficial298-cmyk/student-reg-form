<?php
$conn = new mysqli("localhost", "root", "", "student_db1");


$result = $conn->query("SELECT * FROM students");

echo "<h2>Registered Students</h2>";
echo "<table border='1'>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
    <th>Registered At</th>
    <th>gender</th>
    <th>dob</th>
    <th>phone</th>
    <th>address</th>
</tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['course']."</td>
            <td>".$row['reg_date']."</td>
            <td>".$row['gender']."</td>
            <td>".$row['dob']."</td>
            <td>".$row['phone']."</td>
            <td>".$row['address']."</td>
          </tr>";
}
echo "</table>";

$conn->close();
?>