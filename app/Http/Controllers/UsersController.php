<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\User;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users= User::all();
        return view('layout.user')->with('user', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout.usertambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsersRequest $request)
    {
        User::create($request->except(['_token']));
        
        return redirect()->route('user.index')->with('success','User Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Users $users, $id)
    {
        $users = User::findOrFail($id);
 
        return view('layout.useredit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsersRequest $request, Users $users, $id)
    {
        $users = User::findOrFail($id);
 
        $users->update($request->all());
 
        return redirect()->route('user.index')->with('success', 'User Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Users $users, $id)
    {
        $users = users::find($id);
 
        $users->delete();
 
        return redirect()->route('user.index')->with('success', 'User Berhasil Dihapus');
    }
}
