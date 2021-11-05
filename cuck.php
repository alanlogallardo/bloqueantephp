<div>
    <?php
    $starttime = microtime(true);
    printf("Abriendo Archivo");
    $archivo_url = fopen("el_quijote.txt", "r");

    $texto = " ";

    while ($fragmento = fgets($archivo_url)) {
        $texto .= $fragmento;
    }

    printf($texto);
    printf("<br>Haciendo otra cosa");
    $endtime = microtime(true);
    ?>
</div>
<div>
    <?php
    print($endtime - $starttime);
    ?>
</div>