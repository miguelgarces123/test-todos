<?php

namespace MiguelGarces\Unicornio;

class Saludo 
{

    public function hola(string $nombre) : string {
        return 'Holaaa: '.$nombre;
    }

}