<?php
namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index(){
        \think\Container::pull('exchange')
            ->set('kwm')
            ->publish('message');
    }
}
