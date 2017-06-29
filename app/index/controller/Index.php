<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\User;
class Index extends Controller
{
    public function index()
    {
      // $res = User::create([
      // 		'name'	=> 'imooc',
      // 		'password'	=> md5('imooc')
      // 	]);	
      // $user = User::get(1);
      // $user->name ='17771258';
      // $res = $user->save();
    	// $res = User::destroy(3);
    $res = User::get(4);
      dump($res->getData());
    }
}
