<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 02 - PHP dan Array</title>
    <link rel="stylesheet" href="latihan01a.css">
</head>
<body>
    <h1>Klasemen Sementara (HTML + PHP Array)</h1>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Points</th>
                <th>Team</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $racer_list = array(
                array(1,"Dan","4000","Team 1 Electric"),
                array(2,"Reid","3200","Team 2 Gas"),
                array(3,"Ken","2000","Team 3 Energy"),
                array(4,"Varr","6400","Team 4 Furniture"),
                array(5,"Fett","6500","Team 5 Typography"),
                array(6,"Greg","4900","Team 6 Comms"),
                array(7,"Clob","5000","Team 7 Defense"),
                array(8,"Ralf","5100","Team 8 Construction"),
                array(9,"Cal","3400","Team 9 Media"),
                array(10,"Case","4000","Team 10 Tech")
            );

            foreach ($racer_list as $racer) {
                echo(
                    "<tr>
                        <td>" . $racer[0] . "</td>
                        <td>" . $racer[1] . "</td>
                        <td>" . $racer[2] . "</td>
                        <td>" . $racer[3] . "</td>
                    </tr>"
                );
            }
            ?>
        </tbody>
    </table>
</body>
</html>