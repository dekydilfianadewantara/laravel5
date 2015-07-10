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
        //$users = DB::table('users')->get();
        //Pagination
        $users = DB::table('users')->orderBy('name', 'desc')->paginate(5);
       return view('users.read')->with('users', $users);
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
    

    public function store(Request $request)
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
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
            return Redirect()->to('user/create')->withErrors($validator);

        $data = new User();
        $destinationPath = public_path('images/users');
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->password= bcrypt($request->get('password'));
        $data->role = $request->get('role');
        $data->save();


        if ($data->image == ""){    
            $fileName = "default.PNG";
            $data->image = $fileName;
            $data->save();
        }else{
            $destinationPath = public_path('images/users');
            $fileName = $data->id.".PNG";
            $data->image = $fileName;
            $request->file('image')->move($destinationPath, $fileName);
            $data->save();
        }
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
        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user= User::find($id);
        return view('users.edit')->with('user', $user);

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
         'password' => 'required',
         'role' => 'required'
        ];
        // untuk validasi, format parameter, input dan rule
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
            return Redirect()->back()->withInput()->withError($validator);

        $data = User::find($id);
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->password = $request->get('password');
        $data->save();
        return redirect()->route('user.index');
        //return redirect()->to('/user');
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
        if ($data->image != "default.PNG" && $data->image != "" ){    
            $fileName = $data->image;
            Storage::delete($fileName);
        }
        $data->delete();
        return redirect()->route('user.index');
    }
    public function login()
    {
        return view('users.login');
    }
}
