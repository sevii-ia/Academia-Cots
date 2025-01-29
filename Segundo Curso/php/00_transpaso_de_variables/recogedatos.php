<head>
<title>Recogedatos</title>
</head>
<body>
Buenos dias <br>
Nombre:
<?php
        $nom=$_GET['nom'];
        echo "D. ".$nom;
        ?> <br>

Apellido:
<?php
        $ape=$_GET['ape'];
        echo $ape;
        ?> <br>

Clave:
<?php
        $psw=$_GET['psw'];
        echo $psw;
        ?>
</body>