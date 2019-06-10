<?php
namespace Core;

class Controller {


    protected final function view(string $name,array $var = []){
        try{
            $_view = __DIR__."/../App/View/".$name."php";
            if(!file_exists($_view))
                throw \Exception("View não existe..",1);
    
           include $_view;     

        }catch(\Exception $e){

            return $e->getMessage();
        }
     

    }

    


}