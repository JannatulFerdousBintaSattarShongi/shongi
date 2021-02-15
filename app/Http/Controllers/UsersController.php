<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function list()
    {
        $user=User::all();
        return $this->responseWithSuccess($user,'success','300');
    }

//code gula ektu guchiye likhar chesta koiro
    public function create(Request $request)
    {
       // dd($request->all());
        try{

            $user=User::create([
                'name'=>$request->name,
                'mobile'=>$request->mobile

             ]);
            return $this->responseWithSuccess($user,'user create successfully','300');
            }
        catch (\Exception $e)
            {
                return $this->responseWithError('',$e->getMessage(),'500');
            }

    }
}

