<?php


namespace App\Http\Controllers\Api;

trait ApiResponseTrait
{
    public function ApiResponseTrait($data = null, $msg = null , $status = null)
    {
        $array = [
            'data'   =>  $data,
            'message'=>  $msg,
            'status' =>  $status,
        ];
        return response($array);
    }
}