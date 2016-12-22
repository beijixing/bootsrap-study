<?php
/**
 * Created by PhpStorm.
 * User: horse
 * Date: 16/12/22
 * Time: 下午3:57
 */

namespace app\index\controller;

use think\Controller;
class Popover extends Controller
{
    public function index() {
        $this->view->replace([
//            '__PUBLIC__' => '/bootstrap-study/public/static',
            '__PUBLIC__' => '/HelloPHPStorm/public/static',
        ]);
        return $this->fetch();
    }
}

