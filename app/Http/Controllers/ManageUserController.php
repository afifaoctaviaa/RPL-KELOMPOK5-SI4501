<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ManageUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('manageuser.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manageuser.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'full_name'=> 'required',
            'username'=> 'required|unique:users',
            'email'=> 'required|email|unique:users',
            'telpon'=> 'required',
            'password'=> 'required|min:3' 
        ]);

        $validate['password'] = Hash::make($validate['password']);

        User::create($validate);
        return redirect()->route('manageuser.index')->with('success', 'User added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('manageuser.show', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('manageuser.index')->with('success', 'User deleted successfully.');
    }
}
