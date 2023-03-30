<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Jetstream\Contracts\DeletesUsers;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UserController extends Controller
{
    public function userIndex() {
        
        $user = User::paginate(10);
        return view('user.index', ['user' => $user]);
    }

    public function userCreate() {
        
        return view('user.create');
    }

    public function userStore() {

        $this->validate(request(), [
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'is_associated' => 'boolean',
        ]);

        $user = User::create(request(['name', 'surname', 'phone', 'email', 'password', 'is_associated']));

        auth()->login($user);
        return redirect()->to('/');
    }

    public function showProfile() {
        $user = Auth::user();
        return view ('user.profile', ['user' => $user]);
    }

    public function userEdit() {

        $user = Auth::user();
        return view('user.profile', ['user' => $user]);
    }


    public function userUpdate(Request $request, $id) {
        
        $user = User::find($id);

        $affected = DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'surname' => $request->input('surname'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'is_associated' => $request->input('is_associated'),
            ]);
        
        return redirect()->route('user.profile')->with('succes', 'Profile updated successfully!!');
    }

    public function userDelete(DeletesUsers $deleter)
    {
        $user = Auth::user();
        $deleter->delete($user);
        Auth::logout();
        return redirect()->route('home')->with('success', 'User deleted successfully!!');
    }

    // public function userDelete($id) {
    //     $user = User::find($id);
    //     $user->delete();
    //     return redirect()->route('home')->with('success', 'User deleted successfully!!');
    // }
    
}
