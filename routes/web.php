<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return 1;
});







//Route::get('user', function () {
//    //生成一个csrf凭据
//    $_token = csrf_field(); # laravel提供的
//    $html = "
//    <form action=\"user\" method=\"post\">
//        {$_token}
//        <input type=\"text\" name=\"username\" id=\"\">
//        <button type=\"submit\">提交用户</button>
//</form>
//    ";
//    return $html;
//});
//
//Route::post('user',function(){
//   return '我就是post';
//});
//
//Route::put('user',function (){
//    return '我就是put';
//});
//Route::delete('user',function (){
//    return '我就是delete';
//});

//必填参数  依赖注入

//Route::get('art/{id}',function ($id){
//    dump($_GET);
//    return "文章的ID号为：" .$id;
//})->where(['id'=>'\d+']);

    //问号是可选参数 可填可不填  回调函数要添加默认值
//Route::get('art/{id?}',function (int $id=0){
//    return "文章的ID号为：" .$id ;
//});

//路由别名
//Route::get('arts/{id?}',function (int $id=0){
//    return "文章的ID号为：" .$id ;
//})->name('art');
//
//
//Route::get('name',function (){
//    //根据路由别名生成相对应的url地址
//    $url = route('art',['id'=>101]);
//    $uri = route('art',['id'=>100]);
//    return '<a href='.$url.'>小明你好</a>';
//});

//Route::group(['prefix'=>'admin'],function (){
//    Route:: get('login',function (){
//       return 'admin.login';
//    });
//
//    Route::get('logout',function (){
//        return 'admin.logout';
//    });
//
//    Route::group(['prefix'=>'index'],function (){
//       Route::get('index',function (){
//           return 'admin/index/index';
//       }) ;
//       Route::get('welcome',function (){
//           return 'admin/index/welcome';
//       });
//    });
//});

Route::group(['prefix'=>'index','namespace'=>'Index'],function (){
    Route::get('index','IndexController@index')->name('index.index.index');
    Route::get('add','IndexController@add')->name('index.index.add');
});

//视图
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('index','IndexController@index')->name('admin.index.index');
    Route::get('welcome','IndexController@welcome')->name('admin.index.welcome');
    Route::get('showlist','IndexController@showlist')->name('admin.index.showlist');

    Route::get('user/index','UserController@index')->name('admin.user.index');
    Route::get('user/add','UserController@add')->name('admin.user.add');
});


