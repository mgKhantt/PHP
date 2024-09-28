<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class BladeTemplateController extends Controller
{
    public function getComponent() {
        $alertWithKeyValueArray = [
            [
                "type" => "warning",
                "title" => "Warning Alert",
                "text" => "This is warning alert"
            ],
            [
                "type" => "danger",
                "title" => "Danger Alert",
                "text" => "This is danger alert"
            ]
        ];

        $alertWithObject = [
            (object)[
                "type" => "warning",
                "title" => "Warning Alert",
                "text" => "This is warning alert"
            ],
            (object)[
                "type" => "danger",
                "title" => "Danger Alert",
                "text" => "This is danger alert"
            ]
        ];
        return view('admin.blade-template.component')
            ->with("alertWithKeyValueArray", $alertWithKeyValueArray)
            ->with("alertWithObject", $alertWithObject);
    }

    public function getLocalization() {
        return view('admin.blade-template.localization');
    }

    public function changeLocalization(Request $request) {
        $language = $request['language'];
        session()->put('language', $language);
        return redirect('/admin/blade-template/localization');

    }
}
