<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 2</title>
</head>
<body>

    <table style='border: 1px solid black; border-collapse: collapse;'>

        <!-- Abecedario -->
        <tr>
            <?php
            # Declarar variables
            $numero = 10;

            # Bucle
            for($i=65;$i<$numero+66;$i++) {
                $ascii = chr($i);
                echo "<td style='border: 1px solid black;'> $ascii </td>";
            }
            ?>
        </tr>


        <!-- Numeros -->
        <tr>
            <?php
            # Bucle
            for($i=0;$i<$numero+1;$i++) {
                echo "<td style='border: 1px solid black;'> $i </td>";
            }
            ?>
        </tr>
    </table>
    
</body>
</html>