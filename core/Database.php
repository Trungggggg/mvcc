<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2019-02-27
 * Time: 11:28
 */

namespace core;
use Exception;
use PDO;

class Database
{
    private static $instance = null;
    private $conn = null;
    private function __construct()
    {
        $db = Config::newInstance()->getConfig('database');
        if (isset($db)) {
            $conn_str = $db['default']['driver'] . ":host=" .
                $db['default']['hostname'] . ";port=" .
                $db['default']['port'] . ";dbname=" .
                $db['default']['database'];
            $this->conn = new PDO($conn_str, $db['default']['username'], $db['default']['password']);
        } else {
            throw new Exception("[E] Cannot read config");
        }
    }

    public static function newInstance()
    {

        if (is_null(self::$instance))
            return new Database();
        else
            return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }

    /**
     * @param $sql
     * @param array $params
     * @return array
     */
    public function query($sql, $params = [])
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    /**
     * @param $sql
     * @param array $params
     * @return bool
     */
    public function execute($sql, $params = [])
    {
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($params);
    }
}