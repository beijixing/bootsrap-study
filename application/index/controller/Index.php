<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        echo "Hello debug";
        $this->view->replace([
            '__PUBLIC__' => '/bootstrap-study/public/static',
        ]);
        return $this->fetch();
    }
}
