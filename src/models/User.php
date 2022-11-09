<?php

class User extends Db
{

    public static function create(array $data)
    {
     
      $request = "INSERT INTO user (roles, lastname, firstname, pseudo, email, password, birthday, way, address, city, postal_code, country, gender, date_registration) VALUES (:roles, :lastname, :firstname, :pseudo, :email, :password, :birthday, :way, :address, :city, :postal_code, :country, :gender, NOW())";
      $response = self::getDb()->prepare($request);
      $response->execute(self::htmlspecialchars($data));

     return self::getDb()->lastInsertId();
     
    }

    public static function findByEmail($email)
    {
     
      $request = "SELECT * FROM user WHERE email = :email";
      $response = self::getDb()->prepare($request);
      $response->execute($email);   
     
      return $response->fetch(PDO::FETCH_ASSOC);
     
    }
































}
