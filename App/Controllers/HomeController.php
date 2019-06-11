<?php
namespace App\Controllers;
use Core\Controller;

class HomeController extends Controller {


    public static function index(){
        $asas= "sadasdasda";


         return self::view('teste',['users' => "sasas"]);
    }
}