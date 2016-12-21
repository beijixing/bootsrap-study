<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        $this->view->replace([
            '__PUBLIC__' => '/HelloPHPStorm/public/static',
        ]);
        return $this->fetch();
    }
}
