<?php

namespace Modules\Dashboard\Controllers;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index(): string
    {
        return view('Modules\Dashboard\Views\index');
    }
}
