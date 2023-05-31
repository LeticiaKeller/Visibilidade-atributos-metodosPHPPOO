<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibilidade de Atributos e Métodos</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            background-color:indianred;
        }

        .container {
            display: flexbox;
            align-items: center;
            text-align: center;
        }
    </style>

</head>
<body>
    <div class="container">
        <pre>
            <h1>Visibilidade de Atributos e Métodos</h1>
        <?php
            require_once "visibilidade-atributosemetodos.php";
            $c = new Caneta;
            $c->modelo= "BIC";
            $c->cor= "Azul";
            //$c->ponta= 0.5; (não é possivel atribuir valor por ser protegido ou privado)
            //$c->carga= 88; (não é possivel atribuir valor por ser protegido ou privado)
            //$c->tampada= true; (não é possivel atribuir valor por ser protegido ou privado)
            var_dump($c);

            $c->rabiscar();
            $c-> tampar();
        ?>
        </pre>
    </div>
</body>
</html>