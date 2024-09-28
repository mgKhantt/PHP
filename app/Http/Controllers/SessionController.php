<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function get() {
        return view('admin.session.get');
    }

    public function put() {
        return view('admin.session.put');
    }
    public function putSession(Request $request) {
        session()->put('s1', $request['s1']);
        session()->put('s2', $request['s2']);
        session()->put('s3', $request['s3']);

        return redirect('/admin/session/get');
    }

    public function flash() {
        return view('admin.session.flash');
    }

    public function delete() {
        return view('admin.session.delete');
    }

    public function ajax() {
        return view('admin.session.ajax');
    }

    public function getSessionWithAjax($sessionName) {
        $getSessionName = session()->get($sessionName);
        return response()->json($getSessionName, 200);
    }

    public function deleteSession($sessionType) {
        
        if($sessionType == 's1') {
            session()->forget('s1');
        }
        else if($sessionType == 's2') {
            session()->forget('s2');
        }
        else if($sessionType == 's3') {
            session()->forget('s3');
        }
        else if($sessionType == 'all') {
            session()->flush();
        }

        return redirect('/admin/session/delete');
    }

    public function flashSession(Request $request) {
        $name = $request['name'];
        $age = $request['age'];
        $address = $request['address'];

        session()->put('name', $name);
        session()->put('age', $age);
        session()->put('address', $address);

        session()->flash('message', 'You save the message successfully');

        return redirect('/admin/session/flash');
    }
}
