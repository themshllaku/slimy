<?php

namespace App\Http\Controllers\Core\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('theme.app.settings.index');
    }
}
