<?php
/**
 * Created by PhpStorm.
 * User: horse
 * Date: 16/12/22
 * Time: 上午10:43
 */

namespace app\index\controller;
use think\Controller;

class Plugins extends Controller
{
    public function index() {
        $this->view->replace([
//            '__PUBLIC__' => '/bootstrap-study/public/static',
            '__PUBLIC__' => '/HelloPHPStorm/public/static',
        ]);
        return $this->fetch();
    }
}