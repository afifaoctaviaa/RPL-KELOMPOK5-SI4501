<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    

    public function index() {

        $user = Auth::user();
        return view('profile.index', compact('user'));
    }

    public function update(Request $request) {
        
        $user = User::find(Auth::user()->id);

        $filename = $user->profile_photo;

        if ($request->file('profile_photo')) {
            
            $filename = time().'.' . $request->file('profile_photo')->getClientOriginalExtension();

            $path = public_path('storage/user');
            $request->file('profile_photo')->move($path, $filename);
        }

        $user->full_name = $request->nama;
        $user->profile_photo = $filename;
        $user->username = $request->username;
        $user->telpon = $request->telpon;
        $user->save();

        return redirect('/profile')->with('status', 'Profile berhasil diubah!');

    }


}
