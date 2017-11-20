<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Use a simple controller to show a variable.
     *
     * @return Response
     */
    public function show()
    {
       $myVar = 'MySampleVariable';

        return view('myView', ['myVar' => $myVar]
         );
    }
}
