<?php

namespace App\Http\Controllers\Front;

use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function showUserName(){
        return 'Hussein Khalifeh';
    }

    public function getIndex(){

        $data=[];
        $data['id'] = 5;
        $data['name'] = 'Hussein Khalifeh';

        $obj = new \stdClass();
        $obj -> name = 'Hussein';
        $obj -> id = 5;
        $obj -> gender = 'male';

        $array=[];

        return view('welcome',compact('array'));
//        return view('welcome') -> with('name','Hussein Khalifeh');
//        return view('welcome',compact('obj'));
//        return view('welcome',$data);
    }
}
