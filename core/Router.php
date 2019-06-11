<?php

namespace Core;


class Router{

    private $rotas_validas = [];
    private  static $parametros = [];




    private function val_method($method){
        $meth = strtolower($method);

        return in_array($meth,["get","post","put"]);
    }



    public static function __callStatic($method,$arg){
        try{
            
            if(!self::val_method($method))
                throw new \Exception("Method not valid",1);

            [$router,$controller] = $arg;

            if(!isset($router) or !isset($controller))
                throw new \Exception("Router or controller not valid",1);   

             $dados =  self::verificar_controller($controller);

           




        }catch(\Exception $e){
            return $e->getMessage();
        }

   
    }




    private function verificar_controller(string $caminho){

            [$_arquivo,$_function] = explode("@",$caminho);

            $_controller = __DIR__."/../App/Controllers/".$_arquivo.".php";
           
            if(!file_exists($_controller))
     
                throw new \Exception(" Arquivo Controller não existe..",1);
                
            if(!class_exists("App\Controllers\\".$_arquivo))
                throw new \Exception("arquivo sem classe".$_arquivo,1);
    
            $arq = '\App\Controllers\\'.$_arquivo;

            if(!method_exists($arq,$_function))
                throw new \Exception("Metodo não existe",1);

            

  
            $teste =  array ( 'view' => $arq::$_function());


                
         return $teste;


    }


}
