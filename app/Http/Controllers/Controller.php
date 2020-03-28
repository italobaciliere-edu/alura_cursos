<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

/*
|--------------------------------------------------
| Autor name:  italobaciliere-edu
| Autor email: a226856106@fumec.edu.br
|--------------------------------------------------
|
|   Convenção de controles do Laravel
|   https://laravel.com/docs/master/controllers
|
*/