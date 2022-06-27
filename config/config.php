<?php 

    #Arquivos-Pastas Raízes
    $pastaInterna = "";

    //caminho absoluto
    define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
    //caminho físico do servidor
    if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
        define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$pastaInterna}");
    } else {
        define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/{$pastaInterna}");
    }

    //pastas específicas
    define('DIRIMG', "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}public/img");
