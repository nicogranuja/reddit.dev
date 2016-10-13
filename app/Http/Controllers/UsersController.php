<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Hash;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        $data['users'] = $users;
        return view('users.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->session()->flash('ERROR_MESSAGE', 'User was not saved. Please see messages under inputs');

        $this->validate($request,User::$rules);
        
        $request->session()->forget('ERROR_MESSAGE');
        
        $user = new User();

        $user->name= $request->get('name');
        $user->email= $request->get('email');
        $user->password= Hash::make($request->get('password'));
        $user->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'User was successfully created.');
        
        return redirect()->action('UsersController@show', $user->id);
        // return redirect()->action('UsersController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $data['user'] = $user;
        return view('users.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $data['user'] = $user;
        return view('users.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->session()->flash('ERROR_MESSAGE', 'User was not updated. Please see messages under inputs');

        $this->validate($request,User::$rules);
        
        $request->session()->forget('ERROR_MESSAGE');
        

        $user = User::find($id);
        $user->name= $request->get('name');
        $user->email= $request->get('email');
        $user->password= Hash::make($request->get('password'));
        $user->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'User was successfully updated.');

        // return redirect()->action('usersController@index');
        return redirect()->action('UsersController@show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = User::find($id);
        
        $user->delete();
        return redirect()->action('UsersController@index');
    }
}