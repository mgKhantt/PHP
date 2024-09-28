<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller
{
    public function getViewOnly()
    {
        return view('admin.routing.view-only');
    }

    public function getPassDataToView()
    {
        $buttons = [
            [
                "type" => "primary",
                "text" => "Primary Button"
            ],
            [
                "type" => "danger",
                "text" => "Danger Button"
            ],
            [
                "type" => "Success",
                "text" => "Success Button"
            ]
        ];

        $links = [
            (object) [
                "href" => "https://www.google.com",
                "target" => "_blank",
                "text" => "Google"
            ],
            (object) [
                "href" => "https://www.youtube.com",
                "target" => "_self",
                "text" => "Youtube"
            ],
            (object) [
                "href" => "https://www.w3schools.com",
                "target" => "_blank",
                "text" => "w3school"
            ]
        ];
        return view('admin.routing.pass-data-view')
            ->with("data_buttons", $buttons)
            ->with("links", $links);
    }

    public function getRoutePara($bgColor, $color)
    {
        return view("admin.routing.route-para")
            ->with("bgColor", $bgColor)
            ->with("color", $color);
    }

    public function getDynamicRoutePara()
    {
        return view('admin.routing.dynamic-route-para');
    }

    public function postDynamicRoutePara(Request $request)
    {
        $bgColor = $request['bg_color'];
        $color = $request['color'];
        return redirect("/admin/routing/route-para/{$bgColor}/{$color}");
    }

    public function getNameRoute()
    {
        return view('admin/routing/name-route');
    }

    public function getTestMiddleWare()
    {
        return view('admin/routing/test-middleware');
    }

    public function postTestMiddleware(Request $request)
    {
        dd("Your age is {$request['age']}. You are allowed to access this page");
    }

    public function getCheckWithRegx($name, $age)
    {
        return view('admin.routing.check-with-regx')
            ->with('name', $name)
            ->with('age', $age);
    }

}
