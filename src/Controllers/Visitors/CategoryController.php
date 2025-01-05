<?php

namespace App\Controllers\Visitors;

use App\Controllers\Controller;

class CategoryController extends Controller{
    public function index(){
        return self::view('pages.visitors.category');
    }
}
