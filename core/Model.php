<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2019-02-26
 * Time: 09:53
 */
namespace core;

class Model
{
    protected $table = null;
    protected $primaryKey = "id";
    protected $db = null;
    protected $builder = null;

    public function __construct()
    {
        $this->db = Database::newInstance();
        $this->builder = new QueryBuilder();
    }

    public function getAll() {
        $sql = $this->builder->select($this->table)->sql();
        return $this->db->query($sql);
    }

    public function getById($id) {
        $sql = $this->builder->select($this->table)
            ->where($this->primaryKey)
            ->sql();
        return $this->db->query($sql, Array($this->primaryKey=>$id));
    }

    public function filter($params) {
        $sql = $this->builder->select($this->table)
            ->whereAnd($params)->sql();
        return $this->db->query($sql, $params);
    }

    public function add($params) {
        $sql = $this->builder->insert($this->table, $params)->sql();
        return $this->db->execute($sql, $params);
    }

    public function update($params) {
        $updateKey = $params;
        unset($updateKey[$this->primaryKey]);
        $sql = $this->builder->udpate($this->table, $updateKey)->where($this->primaryKey)->sql();
        return $this->db->execute($sql, $params);
    }

    public function delete($id) {
        $sql = $this->builder->delete($this->table)->where($this->primaryKey)->sql();
        return $this->db->execute($sql, Array($this->primaryKey=>$id));
    }

    public function count() {

    }
}