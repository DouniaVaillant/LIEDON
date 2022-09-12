<?php

class AppController
{

    public static function index()
    {

        $produits = Produit::findAll();
        include(VIEWS . 'app/index.php');
    }


}
