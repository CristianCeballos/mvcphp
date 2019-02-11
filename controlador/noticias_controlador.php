<?php

    require_once("modelo/noticias_modelo.php");

    $noticia=new noticias_modelo();

    $matriz_noticias=$noticia->get_noticias();




    require_once("vista/noticias_view.php");



?>