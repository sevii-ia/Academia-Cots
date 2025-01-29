<html>
        <head>
                <title>Convertir</title>
                <meta charset="UTF-8">
                <link rel="shortcut icon" href="../../favicon.ico"/>
        </head>
        <body>
                <?php
                $euro=$_GET['euro'];
                $moneda=$_GET['moneda'];

                if($moneda=="dolares")
                {
                        $cantidad = $euro*1.03;
                        echo $cantidad.' '.$moneda;
                }
                if($moneda=="libras")
                {
                        $cantidad = $euro*0.84; 
                        echo $cantidad.' '.$moneda; 
                }
                if($moneda=="yenes")
                {
                        $cantidad = $euro*162.91;
                        echo $cantidad.' '.$moneda;
                }
                if($moneda=="francos")
                {
                        $cantidad = $euro*0.94;
                        echo $cantidad.' '.$moneda;
                }?>
        </body>
</html>