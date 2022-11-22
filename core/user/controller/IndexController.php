<?php

namespace core\user\controller;

use core\base\controller\BaseController;

class IndexController extends BaseController
{

    protected function inputData()
    {
        $name = 'Masha';
        $surname = 'Ivanova';

        $this->name = 'Ivan';

        return compact('name', 'surname');
    }

    protected function outputData()
    {
        $vars = func_get_arg(0);
        exit($this->render('', $vars));
    }
}