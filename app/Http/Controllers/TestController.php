<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //mysql写库
    public function mysql1()
    {
        $data=[
            'navname'=>'中餐厅',
        ];
        $res=DB::table('nav')->insert($data);
        echo '<hr>';
        var_dump($res);
    }

    //mysql读库
    public function mysql2()
    {
        $res=DB::table('nav')->where(['navid'=>10])->get()->toArray();
        print_r($res);
    }
}
