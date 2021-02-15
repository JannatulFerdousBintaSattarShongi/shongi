<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function responseWithSuccess($data,$message,$code)
    {
        return response()->json([
            'data'=>$data,
            'message'=>$message,
            'code'=>$code


        ]);
    }
    public function responseWithError($data,$message,$code)
    {
        return response()->json([
            'data'=>$data,
            'message'=>$message,
            'code'=>$code


        ]);
    }
}
