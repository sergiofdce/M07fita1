<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 1</title>
</head>
<body>

    <table style='border: 1px solid black; border-collapse: collapse;'>
        <tr>
            <?php

                # Declarar variables
                $valor_i = 7;

                # Bucle
                for($i=0;$i<$valor_i+1;$i++) {
                    echo "<td style='border: 1px solid black;'> $i </td>";
                }

            ?>
        </tr>
    </table>
    
</body>
</html>