<?php

namespace core\base\model;

use core\base\controller\Singleton;
use core\base\exceptions\DbException;

class BaseModel
{
    use Singleton;

    protected $db;

    private function __construct() {
        $this->db = @new \mysqli(HOST, USER, PASS, DB_NAME);

        if ($this->db->connect_error) {
            throw new DbException('Помилка підключення до бази данних: '
            . $this->db->connect_errno . ' ' . $this->db->connect_error);
        }

        $this->db->query("SET NAMES UTF8");
    }
}