<?php

namespace Core;

class Router{

    private $rotas_validas = [];
    private  static $parametros = [];


    private function val_method($method){
        $meth = strtolower($method);

        return in_array($meth,["get","post","put"]);
    }



    public function __callStatic($method,$arg){
        try{

            if(!self::val_method($method))
                throw new \Exception("Method not valid",1);

            [$router,$controller] = $arg;

            if(!isset($router) or !isset($controller))
                throw new \Exception("Router or controller not valid",1);   






        }catch(\Exception $e){
            return $e->getMessage();
        }

   
    }




    private function verificar_controller(string $caminho){

         [$_arquivo,$_function] = explode("@",$caminho);

         

    }


}
