<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class IconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Icon::select('icons.*', 'cb.email as created_by', 'ub.email as updated_by')
            ->leftJoin('users as cb', 'icons.created_by', 'cb.id')
            ->leftJoin('users as ub', 'icons.updated_by', 'ub.id')
            ->get();
        return view('admin.project.icons.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.icons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "icon" => 'required|image|mimes:svg,max:2048',
                "title" => 'required',
                "description" => 'required'
            ]
        );

        if ($validator->fails()) {
            return redirect('/admin/icons/create')
                ->withErrors($validator)
                ->withInput();
        }

        $iconPath = $request->file('icon')->store('icons', 'public');
        $inputs = [];
        $inputs['icon'] = $request['icon'];
        $inputs['icon'] = $iconPath;
        $inputs['title'] = $request['title'];
        $inputs['description'] = $request['description'];
        $inputs['created_by'] = auth()->user()->id;
        $inputs['created_at'] = Carbon::now();
        Icon::insert($inputs);

        session()->flash('message', "You save the record successfully");
        return redirect('/admin/icons');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Icon  $icon
     * @return \Illuminate\Http\Response
     */
    public function show(Icon $icon)
    {
        $data = Icon::select('icons.*', 'cb.email as created_by', 'ub.email as updated_by')
            ->leftJoin('users as cb', 'icons.created_by', 'cb.id')
            ->leftJoin('users as ub', 'icons.updated_by', 'ub.id')
            ->where('icons.id', $icon->id)
            ->first();

        return view('admin.project.icons.show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Icon  $icon
     * @return \Illuminate\Http\Response
     */
    public function edit(Icon $icon)
    {
        return view('admin.project.icons.edit')->with('data', $icon);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Icon  $icon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Icon $icon)
    {
        $hasFile = $request->hasFile('icon');

        if($hasFile) {
            $validator = Validator::make(
                $request->all(),
                [
                    "icon" => 'required|image|mimes:svg,max:2048',
                    "title" => 'required',
                    "description" => 'required'
                ]
            );
        } else {
            $validator = Validator::make(
                $request->all(),
                [
                    "title" => 'required',
                    "description" => 'required'
                ]
            );
        }
        if($validator->fails()) {
        return redirect('admin/icons/' . $icon->id . '/edit')
        ->withErrors($validator)
        ->withInput();
        }

        if ($hasFile) {
            $imagePath = $request->file('icon')->store('icons', 'public');
            Storage::delete('/public/' . $icon->icon);
        }

        $inputs = [];
        
        if ($hasFile) {
            $inputs['icon'] = $imagePath;
        }
        $inputs['title'] = $request['title'];
        $inputs['description'] = $request['description'];
        $inputs['updated_by'] = auth()->user()->id;
        $inputs['updated_at'] = Carbon::now();

        Icon::where('id', $icon->id)->update($inputs);
        session()->flash('message', 'You updated the record successfully');
        return redirect('/admin/icons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Icon  $icon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Icon $icon)
    {
        Icon::where('id', $icon->id)->delete();
        return response()->json("You have delete the record successfully");
    }
}
