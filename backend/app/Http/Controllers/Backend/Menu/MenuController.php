<?php

namespace App\Http\Controllers\Backend\Menu;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class MenuController extends Controller
{
    public function index(): View
    {
        return view('resource.menu.index');
    }
}
