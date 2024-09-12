<?php

namespace app\controller;

use support\Request;

class UserController
{
    public function hello(Request $request)
    {
        $default = 'webman';
        $name    = $request->get('name', $default);

        return json([
            'code' => 0,
            'msg'  => "ok",
            'data' => [
                'name' => $name
            ]
        ]);

        return response("hello {$name}");
    }

}