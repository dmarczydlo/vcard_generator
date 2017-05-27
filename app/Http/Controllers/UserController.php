<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class UserController extends BaseController
{
    //

    public function showLogin()
    {
        return 'showLogin';
    }

    public function doLogin()
    {
        return 'doLogin';
    }
}
