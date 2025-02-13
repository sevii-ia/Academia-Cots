<html>
        <head>
                <title>Area de trapecio</title>
                <meta charset="UTF-8">
                <link rel="shortcut icon" href="../../favicon.ico"/>
        </head>
        <body>
                <?php
                function area($bmayor,$bmenor,$alt)
                {
                $areat = (($bmayor * $bmenor) / 2) * $alt;
                echo 'El area es '.$areat;
                }
                $basemayor=$_GET['basemayor'];
                $basemenor=$_GET['basemenor'];
                $altura=$_GET['altura'];
                area($basemayor,$basemenor,$altura)
                ?>
        </body>
</html>