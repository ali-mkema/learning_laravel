<?php
namespace App\Traits;
use App\Constants\HttpStatusCodes;

trait HttpResponses {
    protected function success($data, $message=null, $code=200)
    {
        return response()->json([
            'status'=>'Success',
            'message' => $message,
            'data' => $data
        ], $code);
    }
    protected function error($data, $message, $code)
    {
        return response()->json([
            'status'=>'Error',
            'message' => $message,
            'data' => $data
        ], $code);
    }
}
