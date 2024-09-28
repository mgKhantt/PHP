<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CSRFController extends Controller
{
    public function getLecture1() {
        return view('admin.csrf.lecture1');
    }
    public function getLecture2() {
        return view('admin.csrf.lecture2');
    }
    public function getLecture3() {
        return view('admin.csrf.lecture3');
    }

    public function postCreate(Request $request) {
        $name = $request['name'];
        $age = $request['age'];
        dd($name, $age);
    }

    public function getGetData() {
        $data = ['item1', 'item2', 'item3'];
        return response()->json($data, 200);
    }
}
