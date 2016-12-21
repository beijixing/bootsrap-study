<?php
/**
 * Created by PhpStorm.
 * User: horse
 * Date: 16/12/21
 * Time: 下午4:14
 */

namespace app\index\controller;
use think\Controller;

class Controls extends Controller
{
    public function index() {
        $this->view->replace([
            '__PUBLIC__' => '/HelloPHPStorm/public/static',
        ]);
        return $this->fetch();
    }
}