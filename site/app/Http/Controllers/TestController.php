<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller
{


    public function GetContacts() {
        sleep(1.5);

        return response()->json(
            [
                'data' => [
                    'pagination' => [
                        'items'    => [
                            ['id' => 1, 'nombres' => 'asasd', 'apellidos' => 'asdasdasd'],
                            ['id' => 2, 'nombres' => 'sdfsf', 'apellidos' => 'sdf'],
                            ['id' => 3, 'nombres' => 'assdfsdfsdasd', 'apellidos' => 'sdf'],
                        ],
                        'page'     => 1,
                        'pageSize' => 5,
                        'total'    => 3,
                    ],
                ],
            ]
        );

    }

}
