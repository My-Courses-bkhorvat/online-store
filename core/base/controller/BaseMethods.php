<?php

namespace core\base\controller;

trait BaseMethods
{
    protected $styles;
    protected $scripts;

    protected function init($admin = false)
    {

        if (!$admin) {
            if (USER_CSS_JS['styles']) {
                foreach (USER_CSS_JS['styles'] as $item) $this->styles[] = PATH . TEMPLATE . trim($item, '/');
            }

            if (USER_CSS_JS['scripts']) {
                foreach (USER_CSS_JS['scripts'] as $item) $this->scripts[] = PATH . TEMPLATE . trim($item, '/');
            }
        } else {
            if (ADMIN_CSS_JS['styles']) {
                foreach (USER_CSS_JS['styles'] as $item) $this->styles[] = PATH . TEMPLATE . trim($item, '/');
            }

            if (ADMIN_CSS_JS['scripts']) {
                foreach (USER_CSS_JS['scripts'] as $item) $this->scripts[] = PATH . TEMPLATE . trim($item, '/');
            }
        }
    }

    protected function clearStr($str)
    {
        if (is_array($str)) {
            foreach ($str as $key => $item) $str[$key] = trim(strip_tags($item));
            return $str;
        } else {
            return trim(strip_tags($str));
        }
    }

    protected function clearNum($num)
    {
        return $num * 1;
    }

    protected function isPost()
    {
        return $_SERVER['REQUEST_METHOD'] = 'POST';
    }

    protected function isAjax()
    {
        return isset($_SERVER['HTTP_X_ REQUESTED_WITH']) && $_SERVER['HTTP_X_ REQUESTED_WITH'] = 'XMLHttpRequest';
    }
}