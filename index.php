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
                    <button class="botão" type="submit" value="oi" name="estadoLed">Liga Led Verde</button>
                </p>
            </form>
            <form method="POST" action="arduino.php">
                <p>
                    <button class="botão" type="submit" value="tchau" name="estadoLed">Desliga Led Verde</button>
                </p>
            </form>
        </div>
    </body>
</html>
