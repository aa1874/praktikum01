<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 04 - PHP dan Database</title>
    <link rel="stylesheet" href="latihan01a.css">
</head>
<body>
    <h1>Klasemen Sementara (HTML + PHP Database)</h1>
    <?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $db = "praktikum01";

        $conn = new mysqli($server, $username, $password, $db);
        if ($conn->connect_error) {
            exit("Connection failed: " . $conn->connect_error);
        }

        $query = "SELECT rank, name, points, team FROM klasemen";
        $result = $conn->query($query);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo("rank: " . $row["rank"] . " - Name: " . $row["name"] . " " . $row["points"] . " - Team: " . $row["team"] . "<br>");
            }
        } else echo("0 results");

        $conn->close();
    ?>
    <!--<table class="styled-table">
        <thead>
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Points</th>
                <th>Team</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($racer_list as $racer) {
                echo(
                    "<tr>
                        <td>" . $racer[0] . "</td>
                        <td>" . $racer[1] . "</td>
                        <td>" . $racer[2] . "</td>
                        <td>" . $racer[3] . "</td>
                        <td>" . $racer[4] . "</td>
                    </tr>"
                );
            }
            ?>
        </tbody>
    </table>-->
</body>
</html>