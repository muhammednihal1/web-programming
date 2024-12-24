<?php
$players = array(
    "Virat Kohli" => "Captain, Batsman",
    "Rohit Sharma" => "Batsman",
    "Shubman Gill" => "Batsman",
    "Hardik Pandya" => "All-rounder",
    "KL Rahul" => "Wicketkeeper, Batsman",
    "Jasprit Bumrah" => "Bowler"
);
?>

<html>
<head>
    <title>Indian Cricket Players</title>
</head>
<body>
    <h2 style="text-align:center;">Indian Cricket Players</h2>
    
    <table border="1" style="width:60%; margin:auto; border-collapse:collapse;">
        <tr>
            <th>Index</th>
            <th>Player Name</th>
            <th>Position</th>
        </tr>
        
        <?php
        $index = 1;
        foreach($players as $player => $position) {
            echo "<tr><td>$index</td><td>$player</td><td>$position</td></tr>";
            $index++;
        }
        ?>
    </table>

</body>
</html>

