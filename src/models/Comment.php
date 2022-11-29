<?php

class Comment extends Db
{

    public static function create(array $data)
    {

        $request = "INSERT INTO comment (id_user, id_book, id_story, comment, date_created) VALUES (:id_user, :id_book, :id_story, :comment, NOW())";
        $response = self::getDb()->prepare($request);
        $response->execute(self::htmlspecialchars($data));

        return self::getDb()->lastInsertId();
    }
    
    public static function findAllByBook(array $idBook)
    {

        $request = "SELECT * FROM comment INNER JOIN book ON comment.id_book = book.id WHERE comment.id_book = :id_book";
        $response = self::getDb()->prepare($request);
        $response->execute($idBook);

        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function delete(array $data)
    {
  
      $request = "DELETE FROM comment WHERE id = :id";
  
      $response = self::getDb()->prepare($request);
      return $response->execute(self::htmlspecialchars($data));
    }

}