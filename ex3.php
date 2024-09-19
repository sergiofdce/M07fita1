<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 3</title>
</head>
<body>

    <table style='border: 1px solid black; border-collapse: collapse;'>

        <?php
            $filas = 5;
            $columnas = 5;

            for($i=0;$i<$filas+1;$i++) {
                echo "<tr>";
                for($j=0;$j<$columnas+1;$j++) {
                    echo "<td style='border: 1px solid black;'> " . ($i + $j) . " </td>";
                }
                echo "</tr>";
            }
        ?>

    </table>
    
</body>
</html>