<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /**
     * ajax请求返回
     * @param number $code
     * @param string $msg
     * @param array $data
     * @return number[]|string[]|unknown[]
     */
    public function returnJson($code=1,$msg="",$data=array()){
        exit(json_encode(['code'=>$code,'msg'=>$msg,'data'=>$data])) ;
    }
}
