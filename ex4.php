<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 4</title>
</head>
<body>

    <table style='border: 1px solid black; border-collapse: collapse;'>

        <?php
            $numero = 5;

            for($i=0;$i<$numero+1;$i++) {
                echo "<tr>";

                for($j=0;$j<$numero+1;$j++) {

                    if ($i == 0 && $j == 0){
                        echo "<td style='border: 1px solid black;'>  </td>";
                        
                    } elseif ($j == 0) {
                        $ascii = chr($i+64);
                        echo "<td style='border: 1px solid black;'> $ascii </td>";
    
                    } elseif ($i == 0)  {
                        echo "<td style='border: 1px solid black;'> $j </td>";
                    }

                    else {
                        echo "<td style='border: 1px solid black;'> </td>";
                    }
                    
                }
                echo "</tr>";
            }
        ?>

    </table>
    
</body>
</html>