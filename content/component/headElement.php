<?php

namespace content\component;

class headElement{

    static public function Heading(){
        echo (
            '<meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="author" content="Gisbel Torres">
            <meta name="description" content="Practica">

            <!--css-->
            <link rel="stylesheet" type="text/css" href="'._ROUTE_.'/assets/css/style.css">
            <link rel="stylesheet" type="text/css" href="'._ROUTE_.'/assets/icons/font/bootstrap-icons.css">
            <link rel="stylesheet" type="text/css" href="'._ROUTE_.'/assets/plugins/bootstrap/css/bootstrap-minty.min.css">

            '
        );
    }


}


?>

