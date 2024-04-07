<?php

namespace app\index\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        $result = Db::table('UserInfo')->select();
        $this->assign([
            'result' => $result,
            'title'=>"晟玥的个人学习项目",
            'keyword'=>'晟玥,TP5,thinkphp5门户网站,门户网站',
            'descrition' =>"thinkphp5项目实战学习(主要以搭建企业门户网站+网站后台管理+sql server数据库),网站前端使用layui和bootstrap5为前端ui框架."
        ]);
        return $this->fetch('');
    }
}
