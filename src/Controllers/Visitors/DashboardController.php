<?php

namespace App\Controllers\Visitors;

use App\Controllers\Controller;

class DashboardController extends Controller{
    public function index(){
        return self::view('pages.visitors.index');
    }
}
