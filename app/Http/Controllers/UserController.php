<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = DB::table('users')->select('id','name', 'email', 'created_at', 'updated_at')->get();
        $data = User::select('id', 'name', 'email', 'created_at', 'updated_at')->get();
        return view('admin.project.users.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.users.create');
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
                "name" => "required",
                "email" => "required|email|unique:users",
                "password" => "required|min:6|confirmed"
            ]
        );

        if ($validator->fails()) {
            return redirect('/admin/users/create')
                ->withErrors($validator)
                ->withInput();
        }

        $inputs = [];
        $inputs['name'] = $request['name'];
        $inputs['email'] = $request['email'];
        $inputs['password'] = bcrypt($request['password']);
        $inputs['created_at'] = Carbon::now();

        User::insert($inputs);
        session()->flash('message', 'You saved the record successfully');
        return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.project.users.show')->with('data', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.project.users.edit')->with('data', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "name" => 'required',
                "email" => 'required|email|unique:users,email,' . $user->id,
            ]
        );

        if ($validator->fails()) {
            return redirect('/admin/users/' . $user->id . '/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $inputs = [];
        $inputs['name'] = $request['name'];
        $inputs['email'] = $request['email'];
        $inputs['updated_at'] = Carbon::now();

        User::where('id', $user->id)->update($inputs);
        session()->flash('message', 'You updated the record successfully');
        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::where('id', $user->id)->delete();
        return response()->json("You deleted the record successfully.");
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    public function getResetPassword($id)
    {
        // dd($id);
        // dd($user->id);
        $user = User::where('id', $id)->first();
        // dd($user);
        return view('admin.project.users.get-reset-password')->with('data', $user);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function resetPassword(Request $request,$id)
    {
        $user = User::where('id', $id)->first();

        $validator = Validator::make(
            $request->all(),
            [
                "password" => 'required|min:6',
                "confirmPassword" => 'required|same:password',
            ]
        );

        if ($validator->fails()) {
            return redirect('/admin/users/get-reset-password/' . $user->id)
                ->withErrors($validator)
                ->withInput();
        }

        $inputs = [
            'password' => Hash::make($request->password),
            'updated_at' => Carbon::now(),
        ];

        User::where('id', $user->id)->update($inputs);
        session()->flash('message', 'You updated the password successfully');
        return redirect('/admin/users');
    }
}
