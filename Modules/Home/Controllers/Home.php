<?php

namespace Modules\Home\Controllers;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Modules\Home\Views\index');
    }
}
