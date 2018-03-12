<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 12.03.2018
 * Time: 23:39
 */

namespace lib;


class DB
{
    private $pdo;

    public function __construct(array $params)
    {
        $dsn = "mysql:dbname={$params['db']}:host={$params['host']}";
        $user = $params['user'];
        $password = $params['pass'];

        try
        {
            $this->pdo = new PDO($dsn, $user, $password);
        }catch (\PDOException $e)
        {
            echo "Подключение не удалось: " . $e->getMessage();
            exit();
        }

        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function exec($sql, $params = [])
    {
        $stmt = $this->pdo->prepare($sql);

        try{
            $stmt = $this->pdo->prepare($sql);
        } catch (\Exception $e)
        {
            echo "Ошибка запроса к БД " . $e->getMessage();
            exit();
        }

        $res = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $res;
    }

    public function getCategories()
    {
        $sql = "select * from category";
        $res = $this->exec($sql);
        return $res;
    }

    public function getAllTable($tableName)
    {
        if (!$tableName)
        {
            throw new \Exception("Пустое имя таблицы");
        }

        $sql = "select * from $tableName";
        return $this->exec($sql);
    }
}