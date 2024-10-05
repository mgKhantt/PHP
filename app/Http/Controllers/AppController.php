<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function getIndex() {
        $portfolios = Portfolio::get();
        $icons = Icon::get();
        return view('app.index')
            ->with('portfolios', $portfolios)
            ->with('icons', $icons);
    }
}
