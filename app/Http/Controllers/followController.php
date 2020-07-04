<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class followController extends Controller
{
    public function store(User $user)
    {
        return $user->username;
    }
}
