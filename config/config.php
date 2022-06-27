<?php 

    #Arquivos-Pastas Raízes
    $pastaInterna = "mvc_completo/mvc/";

    //caminho absoluto
    define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
    //caminho físico do servidor
    if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
        define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$pastaInterna}");
    } else {
        define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/{$pastaInterna}");
    }

    //pastas específicas
    define('DIRIMG',    DIRPAGE."public/img/");
    define('DIRJS',     DIRPAGE."public/js/");
    define('DIRCSS',    DIRPAGE."public/css/");
    define('DIRADMIN',  DIRPAGE."public/admin/");
    define('DIRAUDIO',  DIRPAGE."public/audio/");
    define('DIRDESIGN', DIRPAGE."public/design/");
    define('DIRFONTS',  DIRPAGE."public/fonts/");
    define('DIRVIDEO',  DIRPAGE."public/video/");

    //Definições de Base de dados 
    define('HOST', "localhost");
    define('DB', "sistema");
    define('USER', "root");
    define('PaSS', "");