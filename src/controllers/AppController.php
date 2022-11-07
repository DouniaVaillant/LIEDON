<?php

class AppController
{

    public static function index()
    {
        include(VIEWS . 'app/index.php');
    }

    // public static function createBook()
    // {
     
      
     
     
    //  include(VIEWS."app/createBook.php" ) ;
    // }

    // ! inscription il ne manque que cette partie pour pouvoir ajouter des users

    public static function registration()
    {
     
      
     
     
     include(VIEWS."app/registration.php" ) ;
    }

}
