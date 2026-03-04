<?php
include("database.php");

$sql = "SELECT * FROM hr_employee_full_view";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>HR Employee View</title>
    <style>
        body {
            font-family: Arial;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>HR Employee Consolidated View</h2>

<table>
    <tr>
        <th>Employee ID</th>
        <th>Name</th>
        <th>Job Title</th>
        <th>Employment Date</th>
        <th>Manager Name</th>
        <th>Department Name</th>
        <th>Location</th>
    </tr>

<?php
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['Employee ID']."</td>";
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['Job Title']."</td>";
        echo "<td>".$row['Employment Date']."</td>";
        echo "<td>".$row['Manager Name']."</td>";
        echo "<td>".$row['Department Name']."</td>";
        echo "<td>".$row['Location']."</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No records found</td></tr>";
}
?>

</table>

</body>
</html>

<?php
mysqli_close($conn);
?>