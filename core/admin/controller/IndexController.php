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

 /*       $res = $db->get($table, [
            'fields' => ['id', 'name'],
            'where' => ['fio' => 'ivanova', 'name' => 'Masha', 'surname' => 'Sergeevna'],
            'operand' => ['=', '<>'],
            'condition' => ['AND'],
            'order_direction' => ['ASC', 'DESC'],
            'limit' => '1'
        ]);*/

        exit('I am admin panel.');
    }

}