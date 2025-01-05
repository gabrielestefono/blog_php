<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        return self::view('pages.admins.profile');
    }
}
