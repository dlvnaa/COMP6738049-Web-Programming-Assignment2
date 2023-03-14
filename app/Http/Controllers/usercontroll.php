<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;


class usercontroll extends Controller
{
    public function name($id){
        $user = [
            [
               'name' => 'Samuel',
               'key' => 1
            ],
            [
                'name' => 'Delvina',
                'key' => 2
            ],
            [
                'name' => 'Mary',
                'key' => 3
            ],
            [
                'name' => 'Nicholaus',
                'key' => 4
            ]
        ];
        return view('cavis', ['id' => $id, 'user' => $user]);
    }
}