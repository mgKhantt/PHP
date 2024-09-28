<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Portfolio::select('portfolios.*', 'cb.email as created_by', 'ub.email as updated_by')
            ->leftJoin('users as cb', 'portfolios.created_by', 'cb.id')
            ->leftJoin('users as ub', 'portfolios.updated_by', 'ub.id')
            ->get();

        return view('admin.project.portfolios.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.portfolios.create');
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
                "image" => 'image|mimes:jpg,png,jpeg',
                "title" => 'required',
                "description" => 'required'
            ]
        );

        if ($validator->fails()) {
            return  redirect('/admin/portfolios/create')
                ->withErrors($validator)
                ->withInput();
        }

        $imagePath = $request->file('image')->store('portfolios', 'public');

        $inputs = [];
        $inputs['title'] = $request['title'];
        $inputs['image'] = $imagePath;
        $inputs['description'] = $request['description'];
        $inputs['created_by'] = auth()->user()->id;
        $inputs['created_at'] = Carbon::now();
        Portfolio::insert($inputs);

        session()->flash('message', "You save the record successfully");
        return redirect('admin/portfolios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        $data = Portfolio::select('portfolios.*', 'cb.email as created_by', 'ub.email as updated_by')
            ->leftJoin('users as cb', 'portfolios.created_by', 'cb.id')
            ->leftJoin('users as ub', 'portfolios.updated_by', 'ub.id')
            ->where('portfolios.id', $portfolio->id)
            ->first();

        return view('admin.project.portfolios.show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.project.portfolios.edit')->with('data', $portfolio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $hasFile = $request->hasFile('image');

        if($hasFile) {
            $validator = Validator::make(
                $request->all(),
                [
                    "image" => 'required|image|mimes:jpg,png,jpeg',
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

        if ($validator->fails()) {
            return redirect('admin/portfolios/' . $portfolio->id . '/edit')
                ->withErrors($validator)
                ->withInput();
        }

        if ($hasFile) {
            $imagePath = $request->file('image')->store('portfolios', 'public');
            Storage::delete('/public/' . $portfolio->image);
        }

        $inputs = [];
        
        if ($hasFile) {
            $inputs['image'] = $imagePath;
        }
        $inputs['title'] = $request['title'];
        $inputs['description'] = $request['description'];
        $inputs['updated_by'] = auth()->user()->id;
        $inputs['updated_at'] = Carbon::now();

        Portfolio::where('id', $portfolio->id)->update($inputs);
        session()->flash('message', 'You updated the record successfully');
        return redirect('/admin/portfolios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
