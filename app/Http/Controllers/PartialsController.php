<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartialsController extends Controller
{
    public function dashboard()
    {
        return view('partials.dashboard.index');
    }

    public function button()
    {
        return view('partials.elements.button');
    }

    public function typography()
    {
        return view('partials.elements.typography');
    }

    public function other()
    {
        return view('partials.elements.other');
    }

    public function widgets()
    {
        return view('partials.widgets.index');
    }

    public function form()
    {
        return view('partials.widgets.index');
    }

    public function tables()
    {
        return view('partials.tables.index');
    }

    public function charts()
    {
        return view('partials.charts.index');
    }
}
