<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batalla Naval</title>
</head>

<body>
    <h1>Batalla Naval</h1>

    <?php

    # Longitud matriz
    $numero = 10;

    # Inicializar matriz 
    $tabla = array();

    # Generar matriz
    for ($i = 0; $i <= $numero; $i++) {
        for ($j = 0; $j <= $numero; $j++) {
            if ($i == 0 && $j == 0) {
                $tabla[$i][$j] = " ";
            } elseif ($j == 0) {
                $ascii = chr($i + 64);
                $tabla[$i][$j] = $ascii;
            } elseif ($i == 0) {
                $tabla[$i][$j] = $j;
            } else {
                $tabla[$i][$j] = " ";
            }
        }
    }

    # Array de barcos
    $barcos = array(
        "Fragata" => array(),
        "Submarino" => array(),
        "Destructor" => array(),
        "Portaaviones" => array(),
    );

    # Numero de barcos
    $barcos["Fragata"][] = array(array(0));
    $barcos["Submarino"][] = array(array(0, 1));
    $barcos["Destructor"][] = array(array(0, 1, 2));
    $barcos["Portaaviones"][] = array(array(0, 1, 2, 3));

    # Iterar por cada barco
    foreach ($barcos as $tipo => $listaBarcos) {
        echo "<br>Tipo de barco: $tipo\n" . "<br>";

        // Iterar sobre cada instancia de ese tipo de barco (en caso de que haya más de uno)
        foreach ($listaBarcos as $index => $barco) {
            echo "Barco: " . ($index + 1) . "<br>";

            $tamañoBarco = count($barco[0]);
            echo "Tamaño: " . ($tamañoBarco) . "<br>";
            $sentido = rand(0, 1);

            # Si es Horizontal
            if ($sentido == 0) {
                $posicion = rand(1, $numero - $tamañoBarco);
                $altura = rand(1, $numero);
                $alturaLetra = chr($altura + 64);
                echo "Coordenadas: " . chr($altura + 64) . $posicion . "<br><br>";
                # Colocar el barco en la matriz
                for ($j = $posicion; $j < $posicion + $tamañoBarco; $j++) {
                    if ($tipo === "Fragata") {
                        $tabla[$altura][$j] = "F";
                    } elseif ($tipo === "Submarino") {
                        $tabla[$altura][$j] = "S";
                    } elseif ($tipo === "Destructor") {
                        $tabla[$altura][$j] = "D";
                    } elseif ($tipo === "Portaaviones") {
                        $tabla[$altura][$j] = "P";
                    }
                }
            
            }

            # Si es Vertical
            else {
                $posicion = rand(1, $numero);
                $altura = rand(1, $numero - $tamañoBarco);
                $alturaLetra = chr($altura + 64);
                echo "Coordenadas: " . chr($altura + 64) . $posicion . "<br><br>";

                # Colocar el barco en la matriz
                for ($i = $altura; $i < $altura + $tamañoBarco; $i++) {
                    if ($tipo === "Fragata") {
                        $tabla[$i][$posicion] = "F"; 
                    } elseif ($tipo === "Submarino") {
                        $tabla[$i][$posicion] = "S";
                    } elseif ($tipo === "Destructor") {
                        $tabla[$i][$posicion] = "D";
                    } elseif ($tipo === "Portaaviones") {
                        $tabla[$i][$posicion] = "P";
                    }

                }

            }
        }
    }












    # Imprimir la matriz 
    echo "
            <style>
                table {
                    /* Para que las celdas compartan bordes */
                    border-collapse: collapse; 
                }
                td {
                    border: 1px solid black;
                    padding: 7px;
                    text-align: center;
                }
            </style>
        ";

    # Mostrar la tabla

    echo "<table>";
    for ($i = 0; $i < $numero + 1; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $numero + 1; $j++) {
            echo "<td>" . $tabla[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    # echo "<br>La posicion es: " . $posicion . " y la altura es: " . $altura . "<br>";







    ?>


</body>

</html>