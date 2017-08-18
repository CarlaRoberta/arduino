<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .body{  text-align: center; }
            .botão {
                width: 200px;
                height: 50px;
                margin-top: 20px;
                margin-left: 20px;
            }
        </style>
    </head>
    <body>
        <div class="body">
            <h2>Acionamento de Led com Web Socket</h2>
            <form method="POST" action="arduino.php">
                <p>
                    <button class="botão" type="submit" value="1" name="estadoLed">Desligar</button>
                </p>
            </form>
            <form method="POST" action="arduino.php">
                <p>
                    <button class="botão" type="submit" value="2" name="estadoLed">Ligar</button>
                </p>
            </form>
            <form method="POST" action="arduino.php">
                <p>
                    <button class="botão" type="submit" value="3" name="estadoLed">Diminuir a temperatura para 16ºC</button>
                </p>
            </form>
            <form method="POST" action="arduino.php">
                <p>
                    <button class="botão" type="submit" value="4" name="estadoLed">Aumentar a temperatura para 25ºC</button>
                </p>
            </form>
            <form method="POST" action="arduino.php">
                <p>
                    <button class="botão" type="submit" value="5" name="estadoLed">Velocidade do Ventilador: Minimo</button>
                </p>
            </form>
            <form method="POST" action="arduino.php">
                <p>
                    <button class="botão" type="submit" value="6" name="estadoLed">Velocidade do Ventilador: Medio</button>
                </p>
            </form>
            <form method="POST" action="arduino.php">
                <p>
                    <button class="botão" type="submit" value="7" name="estadoLed">Velocidade do Ventilador: Maximo</button>
                </p>
            </form>
            <form method="POST" action="arduino.php">
                <p>
                    <button class="botão" type="submit" value="8" name="estadoLed">Velocidade do Ventilador: Variando</button>
                </p>
            </form>
        </div>
    </body>
</html>
