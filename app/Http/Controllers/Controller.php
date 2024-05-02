<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function ok($data, $status_code = 200)
    {
        return response()->json($data, $status_code);
    }
}
