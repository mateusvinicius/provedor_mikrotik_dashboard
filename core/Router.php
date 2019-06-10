<?php

namespace Core;

class Router{

    private $rotas_validas = [];


    private function val_method($method){
        $meth = strtolower($method);

        return in_array($meth,["get","post","put"]);
    }


    public function __callStatic($method,$arg){
        try{

            if(!self::val_method($method))
                throw new \Exception("Method not valid",1);

             [$router,$controller] = $arg;

             print_r($controller);


        }catch(\Exception $e){
            return $e->getMessage();
        }

   
    }




}
