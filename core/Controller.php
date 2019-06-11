<?php
namespace Core;

 class Controller {


    public static function view(string $name,array $var = []){
        try{
            $_view = __DIR__."/../App/View/".$name.".php";
            if(!file_exists($_view))
                throw new \Exception("View não existe..",1);
    
           return[ "view" => $_view, "response" => $var];     

        }catch(\Exception $e){

            return $e->getMessage();
        }
     

    }

    
}