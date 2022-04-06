<?php

namespace libs\system;
class BootStrap
{
    public function __construct()
    {
        //On va verifier ce que utilisateur a saisie dans le navigateur
        if(!empty($_GET['url'])){
            $url=explode("/",$_GET['url']);
            // echo $url[0];
            //je vais declarer une varible controller pour pouvoir le recuperer
            $controllerFile="src/controllers/".$url[0]."Controller.php";
            //Je vais verifier dabord si le controller est creer
            if(file_exists($controllerFile)){
                require_once $controllerFile;
                $file=$url[0]."Controller";
                //Je dclare ici un objet 
                $controllerObject= new $file();
                if(!empty($url[2])){  //Si mehode et id exite il execute ici
                    $methodeSaisie=$url[1];
                    if(method_exists($controllerObject ,$methodeSaisie)){
                        $controllerObject->$methodeSaisie($url[2]);
                    }else{
                        die("La ".$methodeSaisie." Saisie n'existe pas dans le controller ".$file);
                    }

                }
                //Si on saisie une mehode on verifie
                else if(!empty($url[1])){ // si methode et controller existe
                    $methodeSaisie=$url[1];
                    //On va verifier si la methode exite exite avec la varible de php methode_exite
                    //Methode existe ressoi deux paramettre la methode et le controllerObjet
                    if(method_exists($controllerObject ,$methodeSaisie)){
                        $controllerObject->$methodeSaisie();
                    }else{
                        die("La ".$methodeSaisie." Saisie n'existe pas dans le controller ".$file);
                    }
                }

            }else{
                die($controllerFile." n'existe pas");
            }
        }else{
            echo "MVC";
        }
    }
}
