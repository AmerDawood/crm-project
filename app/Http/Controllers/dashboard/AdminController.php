<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $users = User::where('type','user')->paginate(5);

        return view('dashboard.users.index',compact('users'));

    }


    public function updateUserType(Request $request, $userId)
    {
        $user = User::findOrFail($userId);

        $request->validate([
            'type' => 'required|in:user,admin',
        ]);

        $user->type = $request->input('type');
        $user->save();
        $request->session()->flash('success', 'User type updated successfully.');


        return redirect()->back();
    }



}
