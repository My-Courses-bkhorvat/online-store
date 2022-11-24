<?php

namespace core\admin\controller;

use core\base\controller\BaseController;
use core\admin\model\Model;

class IndexController extends BaseController
{

    protected function inputData()
    {

        $db = Model::instance();

        $table = 'category';

        $res = $db->get($table, [
            'fields' => ['id', 'name'],
            'where' => [ 'name' => 'Masha, Ola, Sveta', 'surname' => 'Sergeevna','fio' => 'ivanova'],
            'operand' => ['IN', 'LIKE%'],
            'condition' => ['AND'],
            'order' => ['fio', 'name', 'surname'],
            'order_direction' => ['ASC', 'DESC'],
            'limit' => '1'
        ]);

        exit('I am admin panel.');
    }

}