<?php

class Book extends Db
{

  public static function create(array $data)
  {

    $request = "INSERT INTO book (id_user, id_category, id_target_reader, title, author, synopsis, photo, editor, date_publication, status, date_created) VALUES (:id_user, :id_category, :id_target_reader, :title, :author, :synopsis, :photo, :editor, :date_publication, :status, :date_created)";
    $response = self::getDb()->prepare($request);
    $response->execute(self::htmlspecialchars($data));

    return self::getDb()->lastInsertId();
  }

  public static function findAll()
  {

    $request = "SELECT * FROM book";
    $response = self::getDb()->prepare($request);
    $response->execute();

    return $response->fetchAll(PDO::FETCH_ASSOC);
  }

}