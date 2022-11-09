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

    if (!empty($_POST)) {

      User::create([
        'roles' => 'ROLE_USER',
        'lastname' => $_POST['lastname'],
        'firstname' => $_POST['firstname'],
        'pseudo' => $_POST['pseudo'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'birthday' => $_POST['birthday'],
        'way' => $_POST['way'],
        'address' => $_POST['address'],
        'city' => $_POST['city'],
        'postal_code' => $_POST['postal_code'],
        'country' => $_POST['country'],
        'gender' => $_POST['gender']
      ]);
    }


    include(VIEWS . "app/registration.php");
  }
}
