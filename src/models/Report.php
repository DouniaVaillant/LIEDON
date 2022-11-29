<?php 

class Report extends Db {


    public static function create(array $data)
    {

        $request = "INSERT INTO report (id_reporter, id_reported, id_book, id_story, id_chapter, reason, fixed, date_created) VALUES (:id_reporter, :id_reported, :id_book, :id_story, :id_chapter, :reason, 0, NOW())";
        $response = self::getDb()->prepare($request);
        $response->execute(self::htmlspecialchars($data));

        return self::getDb()->lastInsertId();
    }



























}