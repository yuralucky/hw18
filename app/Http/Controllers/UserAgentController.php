<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yuriy\UserAgent\UserAgent;

class UserAgentController extends Controller
{
    public function index(UserAgent $agent)
    {
        return "У вас ОС:{$agent->system()}  и вы вошли с помощью браузера:{$agent->browser()}";
    }
}
