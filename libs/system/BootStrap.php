<?php

namespace libs\system;

class BootStrap
{
    public function __construct()
    {
        //On va verifier ce que utilisateur a saisie dans le navigateur
        if(!empty($_GET['url'])){
            echo $_GET['url'];
        }else{
            echo "MVC";
        }
    }
}
