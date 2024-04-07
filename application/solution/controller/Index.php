<?php

namespace app\solution\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        $result = Db::table('UserInfo')->select();
        $this->assign([
            'result' => $result,
        ]);
        return $this->fetch('');
    }
    // public function solution()
    // {
    //     $result = Db::table('UserInfo')->select();
    //     $this->assign([
    //         'result' => $result,
    //     ]);
    //     return $this->fetch();
    // }
}
