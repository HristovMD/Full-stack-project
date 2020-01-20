<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/table.css">
    <title>Beers rated</title>
</head>

<body>
    <table>
        <tr>
            <th>Brand</th>
            <th>Brewer</th>
            <th>Country</th>
            <th>Style</th>
            <th>Alc%</th>
            <th>Price</th>
            <th>Foam holding</th>
            <th>Transparency</th>
            <th>SRM(color)</th>
            <th>IBU(bitterness)</th>
            <th>Glass</th>
            <th>Served from</th>
            <th>Notes</th>
            <th>User</th>

        </tr>

        <?php

    $conn = mysqli_connect("localhost", "root", "", "beertester");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM beers " ;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>" . $row["brand"]. "</td><td>" . $row["brewer"] . "</td>
    <td>". $row["country"]. "</td><td>" . $row["style"]. "</td>
    <td>" . $row["alc"]. "</td><td>" . $row["price"] . "</td>
    <td>" . $row["foam"]. "</td><td>" . $row["transparency"] . "</td>
    <td>" . $row["srm"]. "</td><td>" . $row["ibu"] . "</td>
    <td>" . $row["glass"]. "</td><td>" . $row["vessel"] . "</td>
    <td>" . $row["notes"]. "</td>
    <td>" . $row["name"]."</td>

</tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();

    ?>
    </table>
</body>

</html>