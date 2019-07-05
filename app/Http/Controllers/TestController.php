<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'name' => 'required|string'
        ]);

        //$headers = apache_request_headers();
        $headers = $_SERVER;

        return response()->json([
            'message' => $request->name,
            'time' => round(microtime(true) * 1000),
            'result' => $headers,
        ], 200);
    }
}
