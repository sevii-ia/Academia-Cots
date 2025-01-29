<html>
        <head>
                <title>Multiplicar</title>
                <meta charset="UTF-8">
                <link rel="shortcut icon" href="../../favicon.ico"/>
        </head>
        <body>
                <?php
                function mult($num1,$num2)
                {
                echo $num1*$num2;
                }
                $numero1=$_GET['numero1'];
                $numero2=$_GET['numero2'];
                mult($numero1,$numero2)
                ?>
        </body>
</html>