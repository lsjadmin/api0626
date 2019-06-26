<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    //
    public function time(){
        //时间 客户端ip ua 请求的url
        $time=time();
        // echo $time;
        if($time){
            $arr=[
                'error'=>200,
                'msg'=>'获得时间成功',
                'time'=>$time
            ];
            return json_encode($arr,JSON_UNESCAPED_UNICODE);
        }else{
            $arr=[
                'error'=>4000,
                'msg'=>'获得时间失败',
                'time'=>$time
            ];
            return json_encode($arr,JSON_UNESCAPED_UNICODE);
        }
    }
}
