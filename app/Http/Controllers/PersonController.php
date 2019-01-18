<?php

namespace App\Http\PersonControllers;

use Laravel\Lumen\Routing\PersonController as BaseController;
use App\Person;
class PersonController extends BaseController
{
    function prueba (){
        return Person:: get();
    }
    
}
