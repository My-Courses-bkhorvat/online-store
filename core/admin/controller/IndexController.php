<?php

namespace core\admin\controller;

use core\base\controller\BaseController;
use core\base\model\BaseModel;

class IndexController extends BaseController
{

    protected function inputData() {

        $db = BaseModel::instance();

        exit('I am admin panel.');
    }

}