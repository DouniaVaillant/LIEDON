<?php

class Notifications extends Db
{



  public static function create(array $data)
  {

    $request = "INSERT INTO notifications (receiver, sent_by, subject, content, date_created) VALUES (:receiver, :sent_by, :subject, :content, NOW())";
    $response = self::getDb()->prepare($request);
    $response->execute(self::htmlspecialchars($data));

    return self::getDb()->lastInsertId();
  }

  public static function update(array $data)
  {

    $request = "UPDATE notifications SET content = :content WHERE id=:id";
    $response = self::getDb()->prepare($request);
    $response->execute(self::htmlspecialchars($data));

    return self::getDb()->lastInsertId();
  }

  public static function findAll()
  {

    $request = "SELECT * FROM notifications ORDER BY date_created DESC";
    $response = self::getDb()->prepare($request);
    $response->execute();

    return $response->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function findById(array $data)
  {

    $request = "SELECT * FROM notifications WHERE id = :id";
    $response = self::getDb()->prepare($request);
    $response->execute($data);

    return $response->fetch(PDO::FETCH_ASSOC);
  }

  public static function findAllUser(array $data)
  {

    $request = "SELECT DISTINCT * FROM notifications WHERE receiver = :receiver";
    $response = self::getDb()->prepare($request);
    $response->execute($data);

    return $response->fetchAll(PDO::FETCH_ASSOC);
  }
}
