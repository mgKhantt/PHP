<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StarterController extends Controller
{
    public function getPage1() {
        return view('admin.starter.page1');
    }

    public function getPage2() {
        return view('admin.starter.page2');
    }

    public function getPage3() {
        return view('admin.starter.page3');
    }
}
