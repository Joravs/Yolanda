<?php
    if(isset($_COOKIE['color'])){
        $style = $_COOKIE['color'];
        echo<<<_END
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Cookies</title>
                <style>
                    body{
                        background-color: $style;
                    }
                </style>
            </head>
            <body>
                <form action="" method="post">
                    Seleccione de que color desea que sea la web de ahora en adelante: <br><br>
                    <label for="green">Verde</label>
                    <input type="radio" id='green' name="color" value="green"><br>
                    <label for="rojo">Rojo</label>
                    <input type="radio" id='rojo' name="color" value="red"><br>
                    <label for="azul">Azul</label>
                    <input type="radio" id='azul' name="color" value="blue"><br><br>
                    <input type="submit" value="Crear Cookie" name="enviar">
                </form>
            </body>
            </html>
        _END;
    }
?>