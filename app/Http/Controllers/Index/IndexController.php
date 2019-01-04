<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index(Request $request){
//         dump($request->has('age'));
//        //判断一个key值是否存在
//        dump($request->get('aa',10));
//        //获取值
//        dump($request->only('id','name'));
        $name = "李四";
        return view('admin.index.welcome',compact('name'));
    }

    public function add()
    {
        return '添加';
    }

}
