<?php

namespace App\Http\Controllers;

use DB;
use Validator;
use Storage;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::table('users')->get();
       return view('users.read', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {      
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    

    public function store()
    {
   

        $rules = [
         'email' => 'unique:users,email',
         'password' => 'required',
         'role' => 'required'
        ];
        $messages = [
            'email.unique' => 'Email telah digunakan, Mohon masukkan yang lain',
        ];
        // untuk validasi, format parameter, input dan rule
        $validator = \Validator::make(\Request::all(), $rules);
        if($validator->fails())
            return Redirect()->to('user/create')->withErrors($validator);

        $data = new User();
        $destinationPath = public_path('images');
        $data->name = \Request::input('name');
        $data->email = \Request::input('email');
        $data->password= bcrypt(\Request::input('password'));
        $data->role = \Request::input('role');
        $data->save();

        $destinationPath = public_path('images');
        $fileName = $data->id.".PNG";
        $data->image = $fileName;
        \Request::file('image')->move($destinationPath, $fileName);
        $data->save();
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user= User::find($id);
        return view('users.show', ['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('users.edit', ['user'=>User::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
         $rules = [
         'email' => 'unique:users,email',
         'password' => 'required',
         'role' => 'required'
        ];
        // untuk validasi, format parameter, input dan rule
        $validator = \Validator::make(\Request::all(), $rules);
        if($validator->fails())
            return Redirect()->back()->withInput()->withError($validator);

        $data = User::find($id);
        $data->name = \Request::input('name');
        $data->email = \Request::input('email');
        $data->password = \Request::input('password');
        $data->save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $data = User::find($id);
      
        $fileName = $data->image;
        Storage::delete($fileName);
        $data->delete();
        return redirect()->route('user.index');
    }
    public function login()
    {
        return view('users.login');
    }
}
