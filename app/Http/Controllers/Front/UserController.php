<?php

namespace App\Http\Controllers\Front;

//use App\Http\Controllers\Controller;

class UserController extends \Illuminate\Routing\Controller
{
    public function showAdminName(){
        return 'Abdullah Zaid';
    }

    public function showUserName(){
        return 'mohammed Ali';
    }

    public function getIndex(){
        $data=[];
        $data['id']=121;
        $data['name']='Abdullah Zaid';
//        return view('welcome',$data);

        $obj=new \stdClass();
        $obj->id=121;
        $obj->name='Abdullah Zaid';
//        return view('welcome',compact('obj'));

        $arrd=['ali','ahmed'];
        $arr=[];
        $num=6;
        return view('welcome',compact('arrd','num','arr','obj'),$data);
    }
}

