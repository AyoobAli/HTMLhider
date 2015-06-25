<?php

/**
 * 
 * HTML Hider v0.1
 * By AyoobAli.com
 * License: The MIT License (MIT)
 * Copyright (c) 2015 Ayoob Ali
 * 
 * This tool will hide the HTML source code of your page from the normal 'view source' option.
 * 
 * Use:-
 * include('HTMLhider.class.php');
 * $hider = new \HTMLhider\hider();
 * $hider->hide($FullHTMLpage);
 * $hider->activateJS();
 * echo $hider->getHiddenPage();
 * 
 */

include ( "../HTMLhider.class.php" );

$hider = new \HTMLhider\hider();
$hider->setJSpath('../hjs.php');

$tempPage = <<< EOF
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>HTML Hider</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
    <div class="container">
        <div class="section btl btr bbl bbr">
            <div class="sectitle btl btr bb">HTML Hider</div>
            <div class="seccontent tac">
                This tool will hide the HTML source code of your page from the normal 'view source' option.<br />
                Get a copy from <a href="https://github.com/AyoobAli" target="_blank">GitHub</a>.
            </div>
            <div class="secfooter bbl bbr bt">Copyright (c) 2015 AyoobAli.com</div>
        </div>
    </div>
    </body>
</html>
EOF;

$hider->hide( $tempPage );

echo $hider->getHiddenPage( true );

?>