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

  // -                                                                                                                                  - //

  public static function update(array $data)
  {

    $request = "UPDATE user SET photo_banner = :photo_banner, photo_profile = :photo_profile, lastname = :lastname, firstname = :firstname, pseudo = :pseudo, email = :email, birthday = :birthday, way = :way, address = :address, city = :city, postal_code = :postal_code, country = :country, gender = :gender, roles = :roles WHERE id=:id";
    $response = self::getDb()->prepare($request);
    $response->execute(self::htmlspecialchars($data));

    return self::getDb()->lastInsertId();
  }


  public static function updateStatus(array $data)
  {

    $request = "UPDATE user SET status = :status, newsletter = :newsletter WHERE id=:id";
    $response = self::getDb()->prepare($request);
    $response->execute(self::htmlspecialchars($data));

    return self::getDb()->lastInsertId();
  }

  public static function updateNewsletter(array $data)
  {

    $request = "UPDATE user SET newsletter = :newsletter WHERE id=:id";
    $response = self::getDb()->prepare($request);
    $response->execute(self::htmlspecialchars($data));

    return self::getDb()->lastInsertId();
  }

  // -                                                                                                                                  - //

  public static function findAll()
  {

    $request = "SELECT *, DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthday)), '%Y') + 0 AS age FROM user WHERE status != 'ban'";
    $response = self::getDb()->prepare($request);
    $response->execute();

    return $response->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function findByNewsletter()
  {

    $request = "SELECT *, DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthday)), '%Y') + 0 AS age FROM user WHERE newsletter = 1";
    $response = self::getDb()->prepare($request);
    $response->execute();

    return $response->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function findByRole(array $data)
  {

    $request = "SELECT * FROM user WHERE roles = :role";
    $response = self::getDb()->prepare($request);
    $response->execute($data);

    return $response->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function findByPseudo($data)
  {
    // die(var_dump($pseudo));
    $request = "SELECT * FROM user WHERE pseudo LIKE '%" . $data . "%'";
    $response = self::getDb()->prepare($request);
    $response->execute();

    // die(var_dump($pseudo));
    return $response->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function findBySearch($data)
  {
    
    $request = "SELECT * FROM user WHERE pseudo LIKE '%" . $data . "%'";
    $response = self::getDb()->prepare($request);
    $response->execute();

    return $response->fetchAll(PDO::FETCH_ASSOC);
  }

  // -                                                                                                                                  - //

  public static function findById(array $id)
  {

    $request = "SELECT * FROM user WHERE id = :id";
    $response = self::getDb()->prepare($request);
    $response->execute($id);

    return $response->fetch(PDO::FETCH_ASSOC);
  }

  public static function findByEmail($email)
  {

    $request = "SELECT * FROM user WHERE email = :email";
    $response = self::getDb()->prepare($request);
    $response->execute($email);

    return $response->fetch(PDO::FETCH_ASSOC);
  }

  // -                                                                                                                                  - //

  public static function editPassword(array $data)
  {
    $request = "UPDATE user SET password = :password WHERE id = :id";
    $response = self::getDb()->prepare($request);

    return $response->execute($data);
  }

  // -                                                                                                                                  - //

  public static function delete(array $data)
  {

    $request = "DELETE FROM user  WHERE id=:id";

    $response = self::getDb()->prepare($request);
    return $response->execute(self::htmlspecialchars($data));
  }
}
