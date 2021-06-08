<?php

function hola_mundo_func(){
    echo "Hola mundo";
}

add_shortcode( "hola_mundo", "hola_mundo_func" );