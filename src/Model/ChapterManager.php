<?php

namespace App\Model;

use PDO;

class ChapterManager extends AbstractManager
{
    public const TABLE = 'chapter';

    /**
     * Insert new chapter in database
     */
    // public function insert(array $chapter): int
    // {
    //     $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (`title`) VALUES (:title)");
    //     $statement->bindValue('title', $item['title'], PDO::PARAM_STR);

    //     $statement->execute();
    //     return (int)$this->pdo->lastInsertId();
    // }

    // /**
    //  * Update item in database
    //  */
    // public function update(array $item): bool
    // {
    //     $statement = $this->pdo->prepare("UPDATE " . self::TABLE . " SET `title` = :title WHERE id=:id");
    //     $statement->bindValue('id', $item['id'], PDO::PARAM_INT);
    //     $statement->bindValue('title', $item['title'], PDO::PARAM_STR);

    //     return $statement->execute();
    // }
}
