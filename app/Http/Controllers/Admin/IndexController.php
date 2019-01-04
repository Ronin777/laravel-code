<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index(){
        $data = [

            [
                'id' => 'menu-article',
                'title' => '咨讯管理',
                'child' =>[
                    [
                        'ctitle' => '咨讯管理',
                        'url' => '/admin/showlist'
                    ]
                ]
            ],
            [
                'id' => 'menu-picture',
                'title' => '图片管理',
                'child' =>[
                    [
                        'ctitle' => '图片管理',
                        'url' => 'adminlist'
                    ]
                ]
            ],
            [
                'id' => 'menu-product',
                'title' => '产品管理',
                'child' =>[
                    ['ctitle' => '品牌管理',
                        'url' => 'adminlist'],
                    [
                        'ctitle' => '分类管理',
                        'url' => 'adminlist'
                    ]
                ]
            ]

        ];
        return view('admin.index.index',compact('data'));
    }

    public function welcome(){
        return view('admin.index.welcome');
    }

    public function showlist(){
        return '我是一个详情页';
    }
}
